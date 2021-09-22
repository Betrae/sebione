@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center my-5 py-5">
    
    <form action="{{ route('login') }}" method="post">
    @if(session('status'))
    <div class="d-flex justify-content-center py-3 mb-5 rounded text-white bg-danger">
        {{ session('status') }}
    </div>
    @endif
        @csrf
        <div class="form-group mb-4">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mb-4">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
</div>
@endsection