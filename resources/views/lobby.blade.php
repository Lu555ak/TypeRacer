
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-extension">
                <div class="card-header card-header-extension">{{ __('LOBBY') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('game') }}">
                    @csrf
                        <label class="col-md-3 col-form-label">Difficulty: </label>
                        <select name="difficulty" class="form-select" aria-label="Difficulty">
                            <option value="Easy" selected>Easy</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
                        </select>
                        <br>
                        <label class="col-md-3 col-form-label">Length: </label>
                        <select name="length"  class="form-select" aria-label="Length">
                            <option value="Short" selected>Short</option>
                            <option value="Medium">Medium</option>
                            <option value="Long">Long</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Play') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
