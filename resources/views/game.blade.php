@extends('layouts.app')
<script src="{{ asset('js/game.js')}}"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="bar"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>Type this!</div>
                <input type="text" onkeypress="keyPressed()">
                
            </div>
        </div>
    </div>
</div>
@endsection
