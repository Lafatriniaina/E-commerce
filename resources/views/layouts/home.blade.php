@extends('layouts.base')

@section('title', 'Home page')

@section('content')

    @extends('fragments.NavBar')


    <div class="conatainer-fluid justify-content-between d-flex mt-5 images">
        <div id="imageCarousel" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/cuisiniers/slide-1.jpg') }}" alt="First image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/electronics/slide-2.jpg') }}" alt="Second image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="w-50 ms-2">
            <img class="h-70 w-100 ms-1 rounded" src="{{ asset('images/chaussures/6 (1).png') }}" alt="First image">
            <div class="d-flex position-relative mt-2 ms-1">
                <div class="d-flex position-relative mt-1">
                    <div class="position-relative w-50 h-100">
                        <img class="h-100 me-1 rounded w-100" src="{{ asset('images/electronics/casque.png') }}" alt="First image">
                        <div class="position-absolute top-0 m-2">
                            <h3 class="fw-bold">Casque </h3>
                            <p class="">première image</p>                            
                            <button class="bg-default rounded border-0 p-2">Plus de produit</button>
                        </div>
                    </div>
                    <div class="position-relative w-50">
                        <img class="h-100 ms-1 rounded w-100" src="{{ asset('images/electronics/casque.png') }}" alt="Second image">
                        <div class="position-absolute top-0 m-2">
                            <h3 class="fw-bold">Casque </h3>
                            <p class="">deuxième image</p>                            
                            <button class="bg-default rounded border-0 p-2">Plus de produit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.Categories.Populars')

    @include('layouts.Categories.Best_Deals')

    @include('layouts.Categories.Dress')

@endsection

@section('footer')
   @include('fragments.Footer')
@endsection
