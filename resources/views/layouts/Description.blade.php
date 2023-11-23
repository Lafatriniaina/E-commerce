@extends('base')

@section('title', 'Description')

@section('content')

        <div class="d-flex description p-5 my-5" style="width: 100vw; height: 80vh;">
            <div class="d-flex" style="width: 50%; height: 500px;">
                <img src="{{ asset('images/chaussures/sandale_en_cuir.jpg') }}" alt="" style="width: auto; height: auto;">
            </div>
            <div class="description-lists overflow-auto">
                <h3>Chaussure sandale Cuire</h3>
                <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Maiores, <br> harum, ipsam illo consequuntur <br> inventore quae libero dolor </p>
                <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Maiores, <br> harum, ipsam illo consequuntur <br> inventore quae libero dolor </p>
                <p class="price text-success font-weight-bold">500 000 Ariary</p>
                <div class="d-flex px-5">
                    <div class="form-outline d-flex mx-2" style="width: 90px; height: 40px;">
                        <button class="decrement btn btn-primary mx-1">-</button>
                        <input type="number" class="quantity form-control" style="width: 40px; height: 40px;" />
                        <button class="increment btn btn-primary mx-1">+</button>
                    </div>
                    <button class="btn btn-primary mx-2 ms-5">Ajouter au pannier</button>
                    <button class="btn btn-success mx-2">Acheter</button>
                </div>
                <div class="border mt-4 rounded">
                    <div class="content">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-primary mx-2" style="width: 30px;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                    </svg>
                                    <h6 class="font-weight-bold">Retrait au magasin</h6>
                                </div>
                                <p class="mx-5">A récuperer aujourd'hui</p>
                            </div>
                            <p class="m-3">gratuit</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mx-2" style="width: 30px;">
                                        <polygon points="1 3 1 22 23 22 23 6 16 6 16 3 1 3"></polygon>
                                        <path d="M1 6h15v6H1V6z"></path>
                                        <path d="M23 13c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2z"></path>
                                        <path d="M16 13c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2z"></path>
                                    </svg>
                                    <h6 class="font-weight-bold">Retrait au magasin</h6>
                                </div>
                                <p class="mx-5">A récuperer aujourd'hui</p>
                            </div>
                            <p class="m-3">gratuit</p>
                        </div>
                        <div class="d-flex justify-content-between"></div>
                    </div>
                </div>
            </div>
        </div>

@endsection