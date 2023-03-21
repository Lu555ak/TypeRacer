<script src="{{ asset('js/home.js')}}"></script>

@extends('layouts.app')

@section('content')
<div class="container" onload="loadBuddy()">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-extension2">
                <div class="card-header card-header-extension">Last WPM</div>
                <div id="wpmtext" class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-extension2">
                <div class="card-header card-header-extension">Companions</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div id="1" class="card card-extension3" onclick="selectBuddy(1)">
                                <div class="card-header card-header-extension2">Kaida</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy1.png")}}'>
                                </div>
                            </div>
                            <div id="2" class="card card-extension3" onclick="selectBuddy(2)">
                                <div class="card-header card-header-extension2">Banjo</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy2.png")}}'>
                                </div>
                            </div>
                            <div id="3" class="card card-extension3" onclick="selectBuddy(3)">
                                <div class="card-header card-header-extension2">Aurora</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy3.png")}}'>
                                </div>
                            </div>
                            <div id="4" class="card card-extension3" onclick="selectBuddy(4)">
                                <div class="card-header card-header-extension2">Nanuk</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy4.png")}}'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="5" class="card card-extension3" onclick="selectBuddy(5)">
                                <div class="card-header card-header-extension2">Bao</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy5.png")}}'>
                                </div>
                            </div>
                            <div id="6" class="card card-extension3" onclick="selectBuddy(6)">
                                <div class="card-header card-header-extension2">Wooly</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy6.png")}}'>
                                </div>
                            </div>
                            <div id="7" class="card card-extension3" onclick="selectBuddy(7)">
                                <div class="card-header card-header-extension2">Meri</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy7.png")}}'>
                                </div>
                            </div>
                            <div id="8" class="card card-extension3" onclick="selectBuddy(8)">
                                <div class="card-header card-header-extension2">Aslan</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy8.png")}}'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="9" class="card card-extension3" onclick="selectBuddy(9)">
                                <div class="card-header card-header-extension2">Luna</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy9.png")}}'>
                                </div>
                            </div>
                            <div id="10" class="card card-extension3" onclick="selectBuddy(10)">
                                <div class="card-header card-header-extension2">Sunny</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy10.png")}}'>
                                </div>
                            </div>
                            <div id="11" class="card card-extension3" onclick="selectBuddy(11)">
                                <div class="card-header card-header-extension2">Hopper</div>
                                <div class="card-body">
                                    <img for="barbuddy" src='{{asset("images\buddy11.png")}}'>
                                </div>
                            </div>
                            <div id="12" class="card card-extension3" onclick="selectBuddy(12)">
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
