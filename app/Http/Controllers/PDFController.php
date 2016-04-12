<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Produse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;
class PDFController extends Controller
{
    public function generatePDF(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Loading...</h1>
                        <h2>Invoice page in progress</h2>');
        return $pdf->stream();
    }
}
