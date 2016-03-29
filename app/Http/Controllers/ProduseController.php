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
            'poza' => 'required'
        ));
        if ($validate->fails()) {

            dd('Error');
        } else {
            $produs = new Produse();
            $produs->nume= Input::get('nume');
            $produs->pret = Input::get('pret');
            $produs->id_categorie= Input::get('id_categorie');
            $produs->stoc = Input::get('stoc');
            $produs->descriere = Input::get('descriere');
            $produs->poza = Input::get ('poza');


            if ($produs->save()) {
                return Redirect::to('/')->with('success', 'You added succesfully.');
            } else {
                dd('error');
            }
        }
    }
    public function add(){

        $categorie = DB::table('categori')->get();
        return view('entities.add.addprodus', ['categorie' => $categorie]);
    }


}
