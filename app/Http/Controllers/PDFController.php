<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Produse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;
use DOMPDF;
use Barryvdh\DomPDF\PDF;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class PDFController extends Controller
{
    public function generatePDF(){


        $data=array('carts'=>Cart::content(),'total'=>Cart::total());
        $pdf =new DOMPDF();
//        $pdf->loadView('layouts.aa',$data);
//        return $pdf->download('KEEPTHENAMEYOUWANT.pdf');
        $pdf->load_html('<h1>Pagina in lucru.</h1>');
        $pdf->render();
        $pdf->stream('salut');
    }

    public function getContact(){

        return view('contact');
    }
}
