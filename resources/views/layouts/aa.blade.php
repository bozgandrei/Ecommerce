@extends('layouts.app')
@section('content')
    <div class="container">

    <table style="margin-top: 150px" class="table table-hover">
        <thead>
        <tr>
            <th>Nume</th>
            <th>Cantitate</th>
            <th>Pret</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($carts as $cart)
            <tr>
                <td>{{$cart->name}}</td>
                <td>{{$cart->qty}}</td>
                <td>{{$cart->price}} RON</td>
                <td>{{$cart->subtotal}} RON</td>
                <td><a href="{{url('deleteitem/'.$cart->rowid)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove">Delete</span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <table style="margin-top: 70px" class="table table-hover">
            <thead>
            <tr>
                <th style="float: right">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td style="float: right">{{$total}} RON</td>
            </tr>
            </tbody>
            </table>
        <a style="margin-top: 100px;float: right;padding-left: 20px" href="{{url('/pdf')}}" class="btn btn-info"><span class="glyphicon glyphicon-print">PDF</span></a>
        <a style="margin-top: 100px;float: right;margin-right: 40px" href="{{url('/send')}}" class="btn btn-success"><span class="glyphicon glyphicon-send"> Trimite Comanda</span></a>
    </div>

@endsection