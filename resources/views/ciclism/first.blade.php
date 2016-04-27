@extends('layouts.appciclism')

@section('content')
    <head>
        <title>Ciclism</title>
    </head>
    <br>
    <br>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href='ciclism'> <img src="{{ asset('/img/ciclism.jpg') }}" alt="New York" width="1200"
                                            height="700">
                        <div class="carousel-caption">
                            <h3>Ciclism Products</h3>
                            <p>We love ciclism !</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/2.jpg') }}" alt="Chicago" width="1200"
                                            height="700">
                        <div class="carousel-caption">
                            <h3>Ciclism Products</h3>
                            <p>We love ciclism !</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/3.jpg') }}" alt="Chicago" width="1200"
                                            height="700">
                        <div class="carousel-caption">
                            <h3>Ciclism Products</h3>
                            <p>We love ciclism !</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/4.jpg') }}" alt="Chicago" width="1200"
                                            height="700">
                        <div class="carousel-caption">
                            <h3>Ciclism Products</h3>
                            <p>We love ciclism !</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/5.jpg') }}" alt="Chicago" width="1200"
                                            height="700">
                        <div class="carousel-caption">
                            <h3>Ciclism Products</h3>
                            <p>We love ciclism !</p>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href='ciclism'> <img src="{{ asset('/img/ciclism/slider/6.jpg') }}" alt="Chicago" width="1200"
                                            height="700">
                        <div class="carousel-caption">
                            <h3>Ciclism Products</h3>
                            <p>We love ciclism !</p>
                        </div>
                    </a>
                </div>


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <br>
        <br>
        <br>
        <br>


        <div class="row">

            @foreach($produs as $produ)

                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{ $produ->nume }}</div>
                        <div class="panel-body"><img src="{{ $produ->poza }}" class="img-responsive" style="width:100%"
                                                     alt="Image"></div>
                        <div class="panel-footer">{{ $produ->pret }} RON
                            <div class="pull-right" style="margin-top:-7px">
                                @if(!Auth::guest())
                                    @if(Auth::user()->tip=='ADMIN')
                                        <a href="#" class="btn btn-primary editProdus" data-id="{{$produ->id_produs}}">Edit</a>
                                        <a href="{{url('deleteproduct/'.$produ->id_produs)}}"
                                           class="btn btn-danger"><span class="glyphicon glyphicon-remove">Delete</span></a>
                                    @else
                                        <a href="{{url('addcart/'.$produ->id_produs)}}" class="btn btn-success"><span
                                                    class="glyphicon glyphicon"></span>Cumpara</a>
                                        <a href="#" class="btn btn-primary detaliiProdus"
                                           data-id="{{$produ->id_produs}}">Detalii</a>
                                    @endif
                                @else     <a href="#" class="btn btn-primary detaliiProdus"
                                             data-id="{{$produ->id_produs}}">Detalii</a>
                                <a href="{{url('addcart/'.$produ->id_produs)}}" class="btn btn-success"><span
                                            class="glyphicon glyphicon"></span>Cumpara</a>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>
        {{$produs->links()}}
    </div><br><br>



    <footer class="container-fluid text-center">
        <form class="form-inline" role="search" action="{{url('home/searchredirect')}}">
            <input type="text" class="form-control" size=50 name='search' placeholder="Search...">
            <button type="submit" class="btn btn-danger">Search</button>
            <p>We love sports !</p>
            <p>TehInt.Sports Copyright</p>
        </form>
    </footer>
    <div id="modalEditProdus" class="modal fade" role="dialog"></div>
    <div id="modalDetaliiProdus" class="modal fade" role="dialog"></div>
@endsection

