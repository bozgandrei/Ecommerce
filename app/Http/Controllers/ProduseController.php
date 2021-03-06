<?php

namespace App\Http\Controllers;
use App\Categorie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Produse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Cart;
class ProduseController extends Controller
{

    //Creare obiect nou de tip Produs si incarcarea cu date
    public function newProdus()
    {
        $validate = Validator::make(Input::all(), array(
            'nume' => 'required',
            'stoc' => 'required',
            'pret' => 'required',
            'descriere' => 'required',

        ));

        if ($validate->fails()) {

            return Redirect::to('addprodus')->withErrors($validate)->withInput();
        } else {
            //pentru upload
            $file = Input::file('file');
            $file->move('imaginiUpload', $file->getClientOriginalName());
            $path = 'http://localhost:8000/imaginiUpload/' . $file->getClientOriginalName();

            $produs = new Produse();
            $produs->nume = Input::get('nume');
            $produs->pret = Input::get('pret');
            $produs->id_categorie = Input::get('id_categorie');
            $produs->stoc = Input::get('stoc');
            $produs->descriere = Input::get('descriere');
            //$produs->poza = Input::get ('poza');
            //$produs->poza = Input::get('file');
            $produs->poza = $path;


            if ($produs->save()) {
                return Redirect::to('/add_message_prod')->with('success', 'You added succesfully.');
            } else {
                dd('error');
            }
        }
    }

    //Adauga in baza de date
    public function add()
    {

        $categorie = DB::table('categori')->get();
        return view('entities.add.addprodus', ['categorie' => $categorie]);
    }

    //De pus la addprodus ???

    public function upload()
    {
        if (Input::hasFile('file')) {
            echo "uploaded";
            $file = Input::file('file');
            $file->move('imaginiUpload', $file->getClientOriginalName());
            echo '<img src="imaginiUpload/' . $file->getClientOriginalName() . '" />';
            $path = 'http://localhost:8000/imaginiUpload/' . $file->getClientOriginalName();
        }
    }

    //Gaseste poza produsului
    public function getPicture()
    {
        $image = DB::table('produse')->get();
    }

    //Afisare produse
    public function showProdusCiclism()
    {
        $produs = DB::table('produse')->where('id_categorie', '5')->paginate(6);

        return view('ciclism.first', compact('produs'));
    }

    public function showProdusFotbal()
    {
        $produsFB = DB::table('produse')->where('id_categorie', '4')->paginate(6);

        return view('football.first', ['produsFB' => $produsFB]);
    }

    /*public function editProdus($id)
    {
        $produs = Produs::findOrFail($id);
        return view('articles.edit', compact('article'));
    }*/

    //Incarcare modal Detalii produs
    public function getDetaliiProdus($id)
    {
        $produs = Produse::find($id);
        $categorie = DB::table('categori')->where('id_categorie', '=', $produs->id_categorie)->get();

        return view('modale.modalDetaliiProdus', ['id' => $id, 'nume' => $produs->nume, 'pret' => $produs->pret, 'stoc' => $produs->stoc, 'poza' => $produs->poza, 'descriere' => $produs->descriere, 'categorie' => $categorie]);
    }

    public function postDetaliiProdus()
    {

        $nume = Input::get('nume');
        $pret = Input::get('pret');
        $id_categorie = Input::get('id_categorie');
        $stoc = Input::get('stoc');
        $poza = Input::get('poza');
        $descriere = Input::get('descriere');
        $id = Input::get('id');


        $produs = Produse::find($id);
        $produs->nume = $nume;
        $produs->pret = $pret;
        $produs->id_categorie = $id_categorie;
        $produs->stoc = $stoc;
        $produs->poza = $poza;
        $produs->descriere = $descriere;

        return Redirect::back();
    }

    //Stergere produs
    public function deleteProdus($id)
    {
        $produs = Produse::find($id);
        $produs->delete();
        return Redirect::back()->with("Sters cu succes");
    }

    //modal editare produs
    public function getEditProdus($id)
    {
        $produs = Produse::find($id);
        $nume = $produs->nume;
        $pret = $produs->pret;
        $stoc = $produs->stoc;
        $poza = $produs->poza;
        $descriere = $produs->descriere;
        $categorie = DB::table('categori')->get();
        $idcategorie = $produs->id_categorie;
        return view('modale.modalEditProdus', ['id' => $id, 'nume' => $nume, 'pret' => $pret, 'stoc' => $stoc, 'poza' => $poza, 'descriere' => $descriere, 'categorie' => $categorie, 'idcategorie' => $idcategorie]);
    }

    public function postEditProdus()
    {
        $file = Input::file('file');
        $path = "";
        if (isset($file)) {
            $file->move('imaginiUpload', $file->getClientOriginalName());
            $path = 'http://localhost:8000/imaginiUpload/' . $file->getClientOriginalName();
        }

        $nume = Input::get('nume');
        $pret = Input::get('pret');
        $id_categorie = Input::get('id_categorie');
        $stoc = Input::get('stoc');
        $poza = Input::get('poza');
        $descriere = Input::get('descriere');
        $id = Input::get('id');


        $produs = Produse::find($id);
        $produs->nume = $nume;
        $produs->pret = $pret;
        $produs->id_categorie = $id_categorie;
        $produs->stoc = $stoc;
        $produs->poza = $path;
        if (isset($file)) {
            $produs->poza = $path;
        } else {
            $produs->poza = $poza;
        }
        $produs->descriere = $descriere;
        $produs->save();

        return Redirect::back();
    }

    public function addcart($id)
    {
        $produs = Produse::find($id);
        Cart::add($produs->id_produs, $produs->nume, 1, (float)$produs->pret);
        return Redirect::back();
    }

    public function deleteitem($id)
    {
        Cart::remove($id);
        return Redirect::back();
    }

    public function getCart()
    {
        return view('layouts.aa', ['carts' => Cart::content(), 'total' => Cart::total()]);
    }

    public function search($search)
    {
        $search = urldecode($search);
        $category = DB::table('categori')->where('nume', 'LIKE', '%' . $search . '%')->get();
        if (count($category) > 0) {
            $products = Produse::where('nume', 'LIKE', '%' . $search . '%')
                ->orWhere('id_categorie', '=', $category[0]->id_categorie)
                ->orderBy('id_produs', 'desc')
                ->paginate(3);
        } else {
            $products = Produse::where('nume', 'LIKE', '%' . $search . '%')
                ->orderBy('id_produs', 'desc')
                ->paginate(3);
        }
        //dd($products);
        if (count($products) == 0) {
            return View('layouts.search')
                ->with('message', 'No results')
                ->with('search', $search)
                ->with('products', $products);
        } else {
            return View('layouts.search')
                ->with('products', $products)
                ->with('search', $search)
                ->with('message', null);
        }


    }
}