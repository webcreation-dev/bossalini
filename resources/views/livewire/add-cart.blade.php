<div class="lg:mx-9 mx-4 justify-center z-0 top-0 left-0 right-0">
    <section class="container max-w-screen-2xl" style="margin-top: 156px;">
      <section class="md:pt-0 pt-[76px]">
        <div class="justify-center text-center">
          <p class="mt-4 mb-[22px] text-sm font-bold">YOUR CART</p>
        </div>
      </section>
      <section class="">
        <div class="w-full grid grid-cols-2">
          <div>
            <p class="text-[13px] font-bold">PRODUCT</p>
          </div>
          <div class="w-full grid grid-cols-3 text-center">
            <p class="text-[13px]  font-bold flex" style="margin:auto;">PRICE</p>
            <p class="text-[13px] font-bold flex justify-end" style="margin:auto;">QUANTITY</p>
            <p class="text-[13px] font-bold flex justify-end" >TOTAL</p>
          </div>
        </div>

        @if (!$products->isEmpty())
        <div class="pt-8 border-b"></div>

        @foreach ($products as $product)
        <br>
        <div class="w-full grid grid-cols-2">

            <div class="w-full grid grid-cols-3">
                <div>
                    <p class="font-bold " >
                        <img style="display: block;
                        text-align:right " src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}" alt="" width="90" height="90">
                    </p>
                </div>
                <div class="flex-auto justify-left" style="position: relative;">
                    <p class="text-left font-bold md:pt-0 text-[13px] f-700"> {{$product->name}} </p>
                    <p class="pt-2.5 text-left antialiased font-medium text-xs" > M/ BLACK CHF
                        {{$product->original_price}} </p>
                    <p class="text-[13px]" style="text-decoration: underline; position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    text-align: center;
                    display: flex;
                    align-items: center;" > <button wire:click="remove({{ $product->id }})" >REMOVE</button> </p>
                </div>
            </div>

            <div class="w-full grid grid-cols-3" style="justify-content: center; align-items: center; ">
              <p class="text-[13px] font-bold flex justify-center text-center ">{{$product->original_price}},00  </p>
              <p style="padding: 25px;" class="text-[13px] font-bold flex justify-end border justify-center border-black w-full">1</p>
              <p class="text-[13px] font-bold flex justify-end">{{$product->original_price}},00</p>

            </div>
        </div>
        @endforeach

        @else

         <div class="pt-8 border-b"></div>
        <br>
        <p class="cart-empty-text has-text-centered"> Add some items to the cart ! </p>
        @endif

        @if (!$products->isEmpty())
        <div class="items-center flex flex-col md:pt-9 pt-7 w-full grid md:grid-cols-2">
          <div class="w-full space-x-11 flex"></div>_
          <div class="items-center w-full grid grid-cols-3">

          </div>

          <div class="items-center w-full grid grid-cols-3">
            <p class="text-[13px] font-bold flex justify-end"></p>
            <p class="text-[13px] font-bold flex md:justify-end" style="font-weight : bold">SUBTOTAL</p>
            <p class="text-xs flex justify-end">CHF {{ $total }}</p>
          </div>
        </div>
        @endif


        @if (!$products->isEmpty())
        <div class="text-xs md:pt-9 pt-7 justify-end flex"> Shipping calculated at chekout </div>
        @endif

        <div class="items-center gap-4 flex flex-col md:pt-9 pt-7 w-full grid grid-cols-2">
          <div class="flex items-center">
            <div class="border justify-center border-black w-full py-5 flex">
              <p class="text-[11px] text-center flex justify-end"> CONTINUE SHOPPING </p>
            </div>
          </div>
          @if (!$products->isEmpty())
          <div class="flex items-center">
            <div class="border justify-center bg-black border-black w-full py-5 flex">
              <p class="text-[11px] text-white text-center flex justify-end"> PROCEED TO CHECKOUT </p>
            </div>
          </div>
        @endif
        </div>
      </section>




      <div class="col-span-3">
        <p style="padding-top:82px;" class="text-sm text-center f-700 pb-5"> YOU MIGHT ALSO LIKE </p>
        <div class="flex items-center justify-center space-x-5">
          <div class="grid md:grid-cols-4 grid-cols-2 gap-3 flex-auto">

            @foreach ($upsells_products as $product)

            <div class="">
              <div class="relative mb-3">
                <div class="absolute flex flex-col top-0 right-0 p-3">
                    <button wire:click="wishlist({{ $product->id }})"
                    class="transition ease-in duration-300 w-8 h-8 text-center p-1"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="{{App\Models\Product::getStatusWishlist($product->id)  }}" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg></button></div>
                    <a href="{{ route('single_product', ['product_id' => $product->id]) }}">
                    <img class="transition ease-in duration-300 hover:bg-gray-900"
                  src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}" alt="Product title">
                </a>
              </div>
              <div class="flex-auto text-center justify-evenly">
                <p class="pt-3 text-xs text f-700"> {{ $product->name }} </p>
                <p class="antialiased text-xs">€ {{ $product->original_price }}</p>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </div>
