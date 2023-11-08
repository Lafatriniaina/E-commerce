@extends('layouts.base')

@section('title', 'Register')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form method="POST" action="{{ route('register') }}" class="my-custom-form p-4 border rounded bg-light" style="width: 40%;">
        @csrf
        <div class="col-12">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="col-12">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    </form>
</div>

@endsection
