@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{URL::to('addcategori')}}">

            <input type="hidden" name="_token" value="">
            <div class="j">
                <div class="input-group input-group-lg">
                <span class="input-group-addon" id="nume"><span
                            class="label label-primary">Nume</span></span>
                    <input type="text" class="form-control" name="nume" placeholder="Nume"
                           aria-describedby="Nume">
                </div>
            </div>

            <div class="j2">
                <button href="new" type="submit" class="btn btn-info btn-lg"><span
                            class="glyphicon glyphicon-plus"></span>Adauga
                </button>
            </div>
            {!! csrf_field() !!}
        </form></div>
@stop