@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{URL::to('addprodus')}}">

            <input type="hidden" name="_token" value="">
            <div class="j">
                <div class="input-group input-group-lg">
                <span class="input-group-addon" id="serialno"><span
                            class="label label-primary">Nume</span></span>
                    <input type="text" class="form-control" name="nume" placeholder="Nume"
                           aria-describedby="Nume">
                </div>
            </div>
            <div class="j2">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="Pret"><span class="label label-primary">Pret</span></span>
                    <input type="integer" class="form-control" name="pret" placeholder="Pret" aria-describedby="type">
                </div>
            </div>
            <div class="j3">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="info"><span class="label label-primary">Stoc</span></span>
                    <input type="text" class="form-control" name="stoc" placeholder="Stoc" aria-describedby="Stoc">
                </div>
            </div>
            <div class="j4">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="time"><span class="label label-primary">Descriere</span></span>
                    <input type="text" class="form-control" name="descriere" placeholder="Descriere" aria-describedby="time">
                </div>
            </div>
            <div class="j5">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="min"><span class="label label-primary">Poza</span></span>
                    <input type="text" class="form-control" name="poza" placeholder="Poza"
                           aria-describedby="min">
                </div>
            </div>
            <div class="j6">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="id_categorie"><span class="label label-primary">Categorie</span></span>
                    <input type="decimal" class="form-control" name="id_categorie" placeholder="Categorie"
                           aria-describedby="max">
                </div>
            </div>
            {{--<div class="j8">--}}
                {{--<div role="form">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="sel1">{{trans('translate.select_station')}}:</label>--}}
                        {{--<select class="form-control" id="sel1" name="station">--}}
                            {{--@foreach($stations as $station)--}}
                                {{--<option value="{{$station->serial_no}}">{{$station->serial_no}}-{{$station->location}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}

                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            <div class="j1">
                <button href="new" type="submit" class="btn btn-info btn-lg"><span
                            class="glyphicon glyphicon-plus"></span>Adauga
                </button>
            </div>
            {!! csrf_field() !!}
        </form></div>
@stop