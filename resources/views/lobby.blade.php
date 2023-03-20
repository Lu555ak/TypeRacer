@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">LOBBY</div> 
            </div>
            <a class="nav-link" href="{{ route('game') }}">{{ __('Play') }}</a>
        </div>
    </div>
</div>
@endsection
