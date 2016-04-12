<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Produse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class ProduseController extends Controller
{

    //Creare obiect nou de tip Produs si incarcarea cu date
    public function newProdus() {
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
            $file -> move('imaginiUpload', $file->getClientOriginalName());
            $path='http://localhost:8000/imaginiUpload/' . $file->getClientOriginalName();

            $produs = new Produse();
            $produs->nume= Input::get('nume');
            $produs->pret = Input::get('pret');
            $produs->id_categorie= Input::get('id_categorie');
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
    public function add(){

        $categorie = DB::table('categori')->get();
        return view('entities.add.addprodus', ['categorie' => $categorie]);
    }

    //De pus la addprodus ???

    public function upload(){
        if(Input::hasFile('file')) {
            echo "uploaded";
            $file = Input::file('file');
            $file -> move('imaginiUpload', $file->getClientOriginalName());
            echo '<img src="imaginiUpload/' . $file->getClientOriginalName() . '" />';
            $path='http://localhost:8000/imaginiUpload/' . $file->getClientOriginalName();
        }
    }

    //Gaseste poza produsului
    public function getPicture(){
        $image=DB::table('produse')->get();
    }

    //Afisare produse
    public function showProdusCiclism()
    {
        $produs = DB::table('produse')->where('id_categorie', '5')->get();
        $produsFB = DB::table('produse')->where('id_categorie', '4')->get();

        return view('ciclism.first', compact('produs'));
    }
    public function showProdusFotbal()
    {
        $produsFB = DB::table('produse')->where('id_categorie', '4')->get();

        return view('football.first', ['produsFB'=>$produsFB]);
    }

    /*public function editProdus($id)
    {
        $produs = Produs::findOrFail($id);
        return view('articles.edit', compact('article'));
    }*/

    //Incarcare modal Detalii produs
    public function detaliiProdus() {
        return View::make('ciclism.modalDetaliiProdus');
    }

    public function deleteProdus($id){
        $produs=Produse::find($id);
        $produs->delete();
        return Redirect::back()->with("Sters cu succes");
    }

    public function getEditProdus($id)
    {
        $produs = Produse::find($id);
        $nume = $produs->nume;
        $pret = $produs->pret;
        $stoc = $produs->stoc;
        $descriere = $produs->descriere;
        $categorie = DB::table('categori')->get();
        $idcategorie = $produs->id_categorie;
        return view('modale.modalEditProdus',['id'=>$id,'nume' => $nume, 'pret' => $pret ,'stoc'=>$stoc, 'descriere' => $descriere,'categorie'=>$categorie,'idcategorie'=>$idcategorie]);
    }

    public function postEditProdus()
    {

        $nume= Input::get('nume');
        $pret = Input::get('pret');
        $id_categorie= Input::get('id_categorie');
        $stoc = Input::get('stoc');
        $descriere = Input::get('descriere');
        $id=Input::get('id');


        $produs = Produse::find($id);
        $produs->nume= $nume;
        $produs->pret = $pret;
        $produs->id_categorie= $id_categorie;
        $produs->stoc = $stoc;
        $produs->descriere = $descriere;
        $produs->save();

        return Redirect::back();
    }


}
