<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

<script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    //optiuni formatare text area

    tinymce.init({
        selector: 'textarea',
        width: 470,
        height: 250,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        statusbar: false,

        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>


<!-- Modal -->
<form class="form-horizontal" role="form" method="POST" action="{{ url('/editprodus') }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Product</h4>
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
                        {{--<input type="text" class="form-control" name="poza" value="{{$poza}}">--}}
                        <input type="text" class="form-control" name="poza" value="{{$poza}}"><br/>
                        <img src="{{ $poza }}" style="width: 100%;border-radius: 7px;"/>

                        @if ($errors->has('poza'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('poza') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div role="form">
                    <div class="form-group">
                        <label for="sel1" class="col-md-4 control-label">Select image to upload:</label>
                        <div class="col-lg-6">

                            <input class="form-control" type="file" name="file" id="file">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        </div>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('descriere') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Descriere</label>

                    <div class="col-md-6">
                        {{--<input type="text" class="form-control" name="descriere" value="{{$descriere}}">--}}
                        <textarea name="descriere" class="form-control">
                            {{$descriere}}
                        </textarea>

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
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="id"  value="{{$id}}">Save</button>
</div>
</div>
  </div>
</form>



