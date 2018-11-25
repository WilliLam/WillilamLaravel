@extends('template')

@section('content')

<div class="container" align="center">
    <div class="row infocols" >
        <div class="col-sm-6 col-xs-12 col-sm-push-6">
            <img class='face' src="{{asset("/img/me_360.jpg")}}" alt='My face' title="Definitely not me.">
        </div>
        <div class="col-sm-6 col-xs-12 col-sm-pull-6">
            <p align="left">I'm an undergraduate currently studying Computer Science at the University of Edinburgh.
        My primary interests are AI and games, although I find almost anything interesting. My latest project has been trying to build this website using bootstrap.
            <br><br>
        Outside of programming, I enjoy reading, cooking weird food and lounging in parks all day.
        </p></div>
    </div>
</div>

@endsection
