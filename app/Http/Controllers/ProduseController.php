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
    public function getPicture(){
        $image=DB::table('produse')->get();
    }

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

}
