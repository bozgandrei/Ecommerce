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
        </form></div>
    <script  type="text/javascript">
        var frmvalidator = new Validator("myform");
        frmvalidator.addValidation("FirstName","req","Please enter your First Name");
        frmvalidator.addValidation("FirstName","maxlen=20",
                "Max length for FirstName is 20");

        frmvalidator.addValidation("LastName","req");
        frmvalidator.addValidation("LastName","maxlen=20");

        frmvalidator.addValidation("Email","maxlen=50");
        frmvalidator.addValidation("Email","req");
        frmvalidator.addValidation("Email","email");

        frmvalidator.addValidation("Phone","maxlen=50");
        frmvalidator.addValidation("Phone","numeric");

        frmvalidator.addValidation("Address","maxlen=50");
        frmvalidator.addValidation("Country","dontselect=000");
    </script>
@stop