@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-extension2">
                <div class="card-header card-header-extension">The Best Score</div>

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
                    <div class="container">
                        <div class="row">
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Kaida</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy1.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Banjo</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy2.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Aurora</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy3.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Nanuk</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy4.png")}}'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Bao</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy5.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Wooly</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy6.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Meri</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy7.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Aslan</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy8.png")}}'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Luna</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy9.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Sunny</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy10.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Hopper</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy11.png")}}'>
                                </div>
                            </div>
                            <div class="card card-extension3">
                                <div class="card-header card-header-extension2">Tux</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy12.png")}}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
