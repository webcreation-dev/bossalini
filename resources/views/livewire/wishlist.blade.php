<section class="lg:pt-11 pt-[6px]">

    @if (!$products->isEmpty())

    <div class="flex-none lg:flex items-center justify-center lg:space-x-5 lg:space-y-0 space-y-2">
        <div class="flex w-full grid md:grid-cols-2 lg:grid-cols-4 grid-cols-2 gap-x-4 lg:gap-x-[20px] gap-y-10">

        @foreach ($products as $product)

        <div class="">
            <div class="relative mb-3">
            <div class="absolute flex flex-col top-0 right-0 p-3">
                <button wire:click="wishlist({{ $product->id }})"
                class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1"><img
                src="{{ asset('files/x.7e1a15a2.svg') }}" height="18"></button>

            </div>
                <a href="{{ route('single_product', ['product_id' => $product->id]) }}">
                <img class="w-full" src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}"
                alt="Product title">
            </a>
            </div>
            <div class="flex-auto justify-evenly">
            <p class="text-xs font-bold text-center">{{ $product->name }}</p>
            <p class="antialiased text-xs text-center mt-0.5">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif {{ $product->original_price }}</p>
            </div>

            @if ($product->quantity == 0)

            <div class="text-center">
                <button
                class="mt-8 text-center px-8 w-full antialised py-3 text-black text-[13px]" style="background-color: #A8A8A9 !important;"> SOLD OUT
                </button>
            </div>

            @else

                @if (App\Models\Product::getStatusCart($product->id) == false)
                <div class="text-center">
                    <button wire:click="addToCart({{ $product->id }})"
                    class="mt-8 text-center px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> ADD TO CART
                </button>
                </div>

                @else

                <div class="py-[14px] px-[14px] bg-answer">
                    {{-- <p class="pb-[14px] text-xs text-white"><span class="font-bold">{{ $product->name }}</span><span class="">was added to the cart!</span></p> --}}
                    <a
                    href="https://bossalini.funcodes.bj/overview"
                    class="w-auto text-xs border border-1 hover:text-answer hover:bg-white f-700 flex text-white py-3.5 text-center justify-center items-center">
                    GO TO CART </a>
                </div>
                @endif
            @endif
        </div>



        @endforeach

        </div>
    </div>

    @else

    <br>
    <br>

    <div class="flex flex-col items-center">
      <p class="text-center font-bold text-base"> LOVE IT? ADD TO MY WISHLIST </p>
      <p class="text-center text-[13px] mt-10"> My Wishlist allows you to keep track of all of your favorites
        and shopping activity whether you're on your computer, phone, or tablet. You won't have to waste time
        searching all over again for that item you loved on your phone the other day - it's all here in one
        place! </p>
        <button href="#"
        class="mt-8 text-center px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> CONTINUE SHOPPING
      </button>
    </div>

    @endif
  </section>

