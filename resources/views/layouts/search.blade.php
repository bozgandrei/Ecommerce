@extends('layouts.app')
@section('content')
    <head>
        <title>Search</title>
    </head>
    <div class="container">
        <form style="float: right" class="form-inline" role="search" action="{{url('home/searchredirect')}}">
            <input type="text" class="form-control" size=50 name='search' placeholder="Search...">
            <button type="submit" class="btn btn-danger">Search</button>
            </form>
    <h2>Search results: {{$search}}</h2>
    @if($message==null)
        <div class="row">
        @if(count($products)>0)
            @foreach($products as $produ)

                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{ $produ->nume }}</div>
                        <div class="panel-body"><img src="{{ $produ->poza }}" class="img-responsive" style="width:100%"
                                                     alt="Image"></div>
                        <div class="panel-footer">{{ $produ->pret }} RON
                            <div class="pull-right" style="margin-top:-7px">
                                    <a href="#" class="btn btn-primary detaliiProdus" data-id="{{$produ->id_produs}}">Detalii</a>
                                    <a href="{{url('addcart/'.$produ->id_produs)}}" class="btn btn-success"><span
                                                class="glyphicon glyphicon"></span>Cumpara</a>
                            </div>
                        </div>

                    </div>
                </div>@endforeach</div>

        @endif

        @else
        <h3>{{$message}}</h3>

@endif
        {{$products->links()}}
        <div id="modalDetaliiProdus" class="modal fade" role="dialog"></div>

    </div>


    @endsection