@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="post"  action="{{URL::to('addprodus')}}">
            <input type="hidden" name="_token" value="">
            <div class="j">
                <div class="input-group input-group-lg">
                <span class="input-group-addon" id="serialno"><span
                            class="label label-primary">Nume</span></span>
                    <input type="text" class="form-control" name="nume" placeholder="Nume"
                           aria-describedby="Nume"></div>
                    @if ($errors->has('nume'))
                        <span  class="help-block" style="float: right">
                                        <strong>{{ $errors->first('nume') }}</strong>
                                    </span>
                    @endif
            </div>

            <div class="j2">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="Pret"><span class="label label-primary">Pret</span></span>
                    <input type="integer" class="form-control" name="pret" placeholder="Pret" aria-describedby="type">
                </div>
                @if ($errors->has('pret'))
                    <span class="help-block" style="float: right">
                                        <strong>{{ $errors->first('pret') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="j3">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="info"><span class="label label-primary">Stoc</span></span>
                    <input type="text" class="form-control" name="stoc" placeholder="Stoc" aria-describedby="Stoc">
                </div>
                @if ($errors->has('stoc'))
                    <span class="help-block" style="float: right">
                                        <strong>{{ $errors->first('stoc') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="j4">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="time"><span class="label label-primary">Descriere</span></span>
                    <input type="text" class="form-control" name="descriere" placeholder="Descriere" aria-describedby="time">
                </div>
                @if ($errors->has('descriere'))
                    <span class="help-block" style="float: right">
                                        <strong>{{ $errors->first('descriere') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="j5">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="min"><span class="label label-primary">Poza</span></span>
                    <input type="text" class="form-control" name="poza" placeholder="Poza"
                           aria-describedby="min">
                </div>
            </div>
            {{--<div class="j6">--}}
                {{--<div class="input-group input-group-lg">--}}
                    {{--<span class="input-group-addon" id="id_categorie"><span class="label label-primary">Categorie</span></span>--}}
                    {{--<input type="decimal" class="form-control" name="id_categorie" placeholder="Categorie"--}}
                           {{--aria-describedby="max">--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="j8">
                <div role="form">
                    <div class="form-group">
                        <label for="sel1">Categorie:</label>
                        <select class="form-control" id="sel1" name="id_categorie">
                            @foreach($categorie as $categori)
                                <option value="{{$categori->id_categorie}}">{{$categori->nume}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

            </div>

            <div class="j1">
                <button href="new" type="submit" class="btn btn-info btn-lg"><span
                            class="glyphicon glyphicon-plus"></span>Adauga
                </button>
            </div>
            {!! csrf_field() !!}
        </form>
        <script>
            $(document).ready(function() {

                $('#basicBootstrapForm').formValidation({
                    fields: {
                        nume: {
                            row: '.col-xs-4',
                            validators: {
                                notEmpty: {
                                    message: 'The first name is required'
                                }
                            }
                        },
                        pret: {
                            row: '.col-xs-4',
                            validators: {
                                notEmpty: {
                                    message: 'The last name is required'
                                }
                            }
                        },
                        stoc: {
                            validators: {
                                notEmpty: {
                                    message: 'The username is required'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'The username must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_\.]+$/,
                                    message: 'The username can only consist of alphabetical, number, dot and underscore'
                                }
                            }
                        },
                        poza: {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required'
                                },
                                different: {
                                    field: 'username',
                                    message: 'The password cannot be the same as username'
                                }
                            }
                        }
                    }
                });
            });
        </script>
    </div>
@stop