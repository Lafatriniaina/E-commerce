<div class="mb-2 mt-5">
    <div class="d-flex justify-content-between mb-3">
      <h3>Catégories: Electroniques</h3>
        <button class="other-products fw-bold d-none d-md-block rounded border-0 px-5" href="#!">
            Voir plus
            <svg class="svg-inline--fa fa-chevron-right fs--1 ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                <path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path>
            </svg>  
        </button>
    </div>

    <div class="categories-lists container-fluid position-relative">
        <div class="d-flex overflow-x-auto" style="height: 350px;">

            <button id="leftArrow" class="position-absolute border-0 ms-5" style="width: 40px; height: 40px; border-radius: 50%; top: 45%; left: 0; display: block; transition: all 0.5s ease;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>

            @foreach ($electronicsProducts as $product)
                <div class="col-lg-2 col-md-4 col-sm-2 mx-2 border border-1 rounded-3 border-grey" role="button" onclick="window.location.href='{{ route('description', ['name' => $product->name, 'categories' => $product->categories, 'prices' => $product->prices, 'quantities' => $product->quantities, 'contents' => $product->contents, 'image' => $product->image]) }}';">
                    <img class="h-50 m-2 rounded" src="{{ asset($product->image) }}" alt="First image" style="width: 92%;">
                    <p class="mt-3 mx-4 fw-bold">{{ $product->name }}</p>
                    <div class="d-flex justify-content-around">
                        <p class="price text-success font-weight-bold">{{ $product->prices }}$</p>
                        <p class="price text-primary font-weight-bold">{{ $product->quantities }} pièces</p>
                    </div>
                    <div class="mt-2 d-flex justify-content-around">
                        <div class="Adding-to-pannier">
                            @include('layouts.HiddenForm.HiddenForm')
                        </div>
                        <div class="position-relative p-3 d-flex align-items-center justify-content-center" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="feather feather-heart text-dark text-700" style="height:30px;width:30px;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>    
                        </div>                     
                    </div>
                </div>
            @endforeach

            <button id="rightArrow" class="position-absolute border-0 me-5" style="width: 40px; height: 40px; border-radius: 50%; top: 45%; right: 0; display: block; transition: all 0.5s ease;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>                
             </button>
        </div>
    </div>

</div>