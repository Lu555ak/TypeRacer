@extends('layouts.app')
<div id="t" style="display: none;">{{$text}}</div>
<script src="{{ asset('js/game.js')}}"></script>

@section('content')
<div class="container" on>
    <div class="row justify-content-center">
        <div class="card card-extension6">
            <div class="card-header card-header-extension2">GAME</div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="bar-buddy-box card">
                            <div id="bar"></div>
                            <img id="bar-buddy" src='{{asset("images\corgi.png")}}'>
                        </div>    
                    </div>
                </div>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div id="type-text">Start typing to start the game... <div>       
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-extension4">
                            <textarea id="type-input" value="" type="text" onkeyup="keyPressed()" cols="30" rows="5"></textarea>        
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card card-extension5">
                        <div class="card-header card-header-extension2">Timer and WPM</div>
                        <div class="card-body">
                            <div id='timer'> </div>
                            <div id='wpm'> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection
