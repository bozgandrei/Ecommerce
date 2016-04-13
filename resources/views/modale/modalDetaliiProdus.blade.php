<!-- Modal -->
<form class="form-horizontal" role="form" method="POST" action="{{ url('/detaliiprodus') }}">
    {!! csrf_field() !!}
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ $nume }}</h4>
            </div>
            <div class="modal-body">
                {!! csrf_field() !!}
                <div role="form">
                    <div class="form-group">
                        <label for="sel1" class="col-md-4 control-label">Categorie:</label>
                        <div class="col-md-6">
                            <select class="form-control" id="sel1" name="id_categorie">
                                @foreach($categorie as $categori)
                                    <option value="{{$categori->id_categorie}}" {{($categori->id_categorie == $idcategorie) ? 'selected="selected"' : ''}}>{{$categori->nume}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <input type="hidden" name="_token" value="">
                <div class="form-group{{ $errors->has('nume') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Nume</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="nume" value="{{$nume}}">

                        @if ($errors->has('nume'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nume') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('pret') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Pret</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="pret" value="{{$pret}}">

                        @if ($errors->has('pret'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('pret') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('stoc') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Stoc</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="stoc" value="{{$stoc}}">

                        @if ($errors->has('stoc'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('stoc') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('poza') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Poza</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="poza" value="{{$poza}}">
                        <img src="{{ $poza }}"/>

                        @if ($errors->has('poza'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('poza') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('descriere') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Descriere</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="descriere" value="{{$descriere}}">

                        @if ($errors->has('descriere'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('descriere') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cumpara</button>
            </div>
        </div>
    </div>
</form>