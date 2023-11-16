@extends('base')

@section('title', 'Register')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form method="POST" action="{{ route('register') }}" class="my-custom-form p-4 border rounded bg-light" style="width: 70%; margin: 0 auto;">
            @csrf

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="col-lg-6 col-md-12">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="col-lg-6 col-md-12">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                </div>

                <div class="col-lg-6 col-md-12">
                    <label for="city" class="form-label">City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                </div>
            </div>

            <div class="col-12 m-2">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
@endsection
