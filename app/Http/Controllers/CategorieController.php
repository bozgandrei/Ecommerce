<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Categorie;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
{
    public function newCategorie()
    {
        $validate = Validator::make(Input::all(), array(
            'nume' => 'required',
        ));
        if ($validate->fails()) {

            dd('Error');
        } else {
            $categorie = new Categorie();
            $categorie->nume = Input::get('nume');

            if ($categorie->save()) {
                return Redirect::to('add_message_cat')->with('success', 'You added succesfully.');
            } else {
                dd('error');
            }
        }
    }
}
