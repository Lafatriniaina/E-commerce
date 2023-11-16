@extends('layouts.base')

@section('title', 'Login')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form method="POST" action="{{ route('auth.login') }}" class="my-custom-form p-4 border rounded bg-light" style="width: 40%;">
        @csrf
        <div class="col-12">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="col-12">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="col-12 m-2">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        <div class="create-account d-flex flex-column justify-content-center">
            <p>ou</p>
            <a>Créer un compte</a>
        </div>
    </form>
</div>

@endsection
