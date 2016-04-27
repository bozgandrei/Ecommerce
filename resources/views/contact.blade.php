@extends('layouts.app')

@section('content')
<div class="container">
    <form style="float: right;margin-bottom: 30px" class="form-inline" role="search" action="{{url('home/searchredirect')}}">
        <input type="text" class="form-control" size=50 name='search' placeholder="Search...">
        <button type="submit" class="btn btn-danger">Search</button>
    </form>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contact</div>

                <div class="panel-body">
                   <p> Pentru comenzi si informatii nu ezitati sa ne contactati la numerele de telefon afisate mai jos:</p>

                   <p> – 0737.910.930  Comenzi Telefonice</p>

                    <p> -0731.928.981  Comenzi Telefonice</p>

                    <p>-0737.910.929  Comenzi Telefonice</p>

                    <p> -0753.826.854  Comenzi Telefonice</p>

                    <p> TehInt.Sports SRL</p>

                    <p> J10/272/2015</p>

                    <p> RO 34310553</p>

                    <p> Cont Banca Transilvania: RO83BTRLRONCRT0292846401</p>

                    <p>Cont Trezorerie: RO38TREZ1665069XXX011637</p>

                    <p> mail : tehint.sports@gmail.com</p>

                <h2>We Love Sports!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
