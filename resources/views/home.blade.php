@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-extension">
                <div class="card-header card-header-extension">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-extension2">
                <div class="card-header card-header-extension">Companions</div>
                <div class="card-body">
                    <div class="row">
                        <div class="card card-extension2">
                            <div class="card-header card-header-extension">Pig</div>
                            <div class="card-body">
                                <img for="barbuddy" src='{{asset("images\buddy1.png")}}'>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div for="barbuddy" class="col-2"><a for="barbuddy" href=""><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></a></div>
                        <div for="barbuddy" class="col-2"><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></div>
                        <div for="barbuddy" class="col-2"><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></div>
                        <div for="barbuddy" class="col-2"><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></div>
                    </div>
                    <div class="row">
                        <div for="barbuddy" class="col-2"><a for="barbuddy" href=""><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></a></div>
                        <div for="barbuddy" class="col-2"><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></div>
                        <div for="barbuddy" class="col-2"><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></div>
                        <div for="barbuddy" class="col-2"><img for="barbuddy" src='{{asset("images\buddy1.png")}}'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
