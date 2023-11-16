@extends('base')

@section('title', 'Home page')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard
                <div class="float-right">
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Liste des utilisateurs</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Prénom</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($users as $user) --}}
                                            </tbody>
                                        </table>
                                    </div>
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