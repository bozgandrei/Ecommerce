@extends('master')

@section('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Fotbal</h1>
            <p>"A spune ca acesti oameni isi dau banii doar pentru a urmarii 22 de mercenari cum lovesc o minge este ca si cum ai zice ca o vioara este doar un lemn
            sau Hamlet nu este decat o incropire din cerneala si hartie"</p>
            <p>J.B.Priestley</p>
        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='http://localhost/Ecommerce/public/'>Back</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Acasa</a></li>
                    <li><a href="#">Produse</a></li>
                    <li><a href="#">Oferte</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href='login'><span class="glyphicon glyphicon-user"></span>Contul tau</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row"><a href='#'>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Echipament de joc</div>
                    <div class="panel-body"><img src="http://localhost/Ecommerce/resources/img/football/echipament.jpg" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">Oferta! 5+1 gratis</div>
                </div>
            </div></a>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">Echipament de antrenament</div>
                    <div class="panel-body"><img src="http://localhost/Ecommerce/resources/img/football/antrenament.jpg" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">Oferta! 5+1 gratis</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">Echipament de prezentare</div>
                    <div class="panel-body"><img src="http://localhost/Ecommerce/resources/img/football/prezentare.jpg" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">Oferta! 5+1 gratis</div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Echipament de arbitru</div>
                    <div class="panel-body"><img src="http://localhost/Ecommerce/resources/img/football/arbitru.jpg" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">Oferta! 5+1 gratis</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Acecesorii si mingi</div>
                    <div class="panel-body"><img src="http://localhost/Ecommerce/resources/img/football/mingi.jpg" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"></div>
                    <div class="panel-footer">Oferta! 5+1 gratis</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">LifeStyle</div>
                    <div class="panel-body"><img src="http://localhost/Ecommerce/resources/img/football/lifestyle.jpg" class="img-responsive" style="width:100%" alt="Image" width="50" height="70"s></div>
                    <div class="panel-footer">Oferta! 5+1 gratis</div>
                </div>
            </div>
        </div>
    </div><br><br>

    <footer class="container-fluid text-center">
        <p>TehInt.Sports Copyright</p>

    </footer>

@stop

