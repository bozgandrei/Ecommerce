@extends('master')

@section('nav')


@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h2 style="color: #0057B8">TehInt.Sports</h2>

    <form class="form-horizontal" role="form "method="POST" action="{{url('login')}}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label  style="color: #0057B8" class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username"placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label  style="color: #0057B8" class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label  style="color: #0057B8"><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn-lg btn-info">Login</button>
            </div>
        </div>

    </form>
    <a href="register">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn-lg btn-info">Register</button>
        </div>
    </div></a>

@stop