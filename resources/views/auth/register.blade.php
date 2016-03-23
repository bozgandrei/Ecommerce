@extends('master')

{{--@section('nav')--}}


@section('content')
{{--<form method="post" action="{{URL::to('newuser')}}">--}}
<div class="container">
    {!! csrf_field() !!}

    <div class="j" >

        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="name"><span class="label label-primary" >Nume</span></span>
            <input type="text" class="form-control" name="name" placeholder="Nume" aria-describedby="Name">
        </div></div>
    <div class="j2">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="phone"><span class="label label-primary" >Telefon</span></span>
            <input type="text" class="form-control" name="phone" placeholder="Telefon" aria-describedby="Phone">
        </div></div>
    <div class="j3">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="email"><span class="label label-primary" >E-mail</span></span>
            <input type="text" class="form-control" name="email" placeholder="E-mail" aria-describedby="E-mail">
        </div></div>
    <div class="j4">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="username"><span class="label label-primary" >Nume utilizator</span></span>
            <input type="text" class="form-control" name="username" placeholder="Nume utilizator" aria-describedby="User name">
        </div></div>
    <div class="j5">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="password"><span class="label label-primary" >Parola</span></span>
            <input type="password" class="form-control" name="password" placeholder="Parola" aria-describedby="Password">
        </div></div>
    <div class="j6">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="password"><span class="label label-primary" >Adresa</span></span>
            <input type="adress" class="form-control" name="adress" placeholder="Adresa" aria-describedby="Adresa">
        </div></div>
    <div class="j1" >
        <button href="home" type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Adauga</button>
    </div>
    </div>
{{--</form>--}}
@stop