<div class="cart border-right-0 bg-default position-absolute top-0" style="z-index: 1;">
    <div class="title d-flex justify-content-between mx-5 mb-2">
        <h3>Carts</h3>
        <button class="close-cart border-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 40px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div><hr>
    @foreach(session('cart') as $id => $details)
        <div class="d-flex my-3 align-items-center justify-content-around me-4" style="width: 100%;" role="button" >
            <div class="image d-flex align-items-center w-50">
                <img src="{{ asset($details['image']) }}" alt="images" style="width: 100px; height: 100px;">
                <div class="content mx-4">
                    <p class="categories">{{ $details['name'] }}</p>
                    <p class="price">{{ $details['price'] }} $</p>
                </div>
            </div>
            <div class="form-outline d-flex" style="width: 90px; height: 40px;">
                <button class="decrement btn btn-primary mx-1">-</button>
                <input type="number" class="quantity form-control" style="width: 40px; height: 40px; font-size: 20px;" value="{{ $details['quantity'] }}"/>
                <button class="increment btn btn-primary mx-1">+</button>
            </div>
                <svg data-image="{{ $details['image'] }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="delete-product text-danger" style="width: 40px; height: 40px;">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
        </div>
    @endforeach
</div>
    