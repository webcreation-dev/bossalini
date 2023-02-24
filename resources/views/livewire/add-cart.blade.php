
<section class="container max-w-screen-2xl" style="margin-top: 156px;">
    <section class="md:pt-0 pt-[76px] ">
        <div class="justify-center text-center desktop-only">
            <p class="mt-4 mb-[22px] text-sm font-bold">YOUR CART</p>
        </div>
    </section>

    <section>


        {{-- Entete  Desktop--}}
        <div class="w-full grid grid-cols-2 desktop-only ">
            <div>
                <p class="text-[13px] font-bold">PRODUCT</p>
            </div>
            <div class="w-full grid grid-cols-3 text-center">
                <p class="text-[13px]  font-bold flex" style="margin:auto;">PRICE</p>
                <p class="text-[13px] font-bold flex justify-end" style="margin:auto;">QUANTITY</p>
                <p class="text-[13px] font-bold flex justify-end">TOTAL</p>
            </div>
        </div>

        {{-- Entete  Mobile--}}
        <div class="w-full grid grid-cols-2 mobile-only hide">
            <div>
                <p class="text-[13px] font-bold">PRODUCT</p>
            </div>
            <div class="w-full grid grid-cols-3 d-flex justify-end text-center">
                <p class="text-[13px] font-bold flex">TOTAL</p>
            </div>
        </div>
        <div class="pt-8 border-b"></div>

        @if (!$products->isEmpty())

            <form method="post" id="get-data-cart-desktop" class="desktop-only" action="{{ route('get_data_cart') }}">
                @csrf
                @foreach ($products as $product)
                    <br>
                    {{-- Contenu Desktop--}}
                    <input type="hidden" name="products[{{ $product->id }}][id]" value="{{ $product->id }}">
                    <div class="w-full grid grid-cols-2 desktop-only">

                        <div class="w-full grid grid-cols-3">
                            <div>
                                <p class="font-bold ">
                                    <img style="display: block;text-align:right;"
                                        src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}"
                                        alt="" width="90" height="90">
                                </p>
                            </div>

                            <div class="flex-auto justify-left" style="position: relative;">
                                <p class="text-left font-bold md:pt-0 text-[13px] f-700" style="margin-bottom: auto;">
                                    {{$product->name}} </p>

                                <p class="pt-2.5 text-left antialiased font-medium text-xs"> M/ BLACK @if (Auth::check())
                                    {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif
                                    {{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }}

                                </p>


                                <p class="text-[13px]"
                                    style="text-decoration: underline; position: absolute; bottom: 0; left: 0; right: 0; text-align: center; display: flex; align-items: center;">
                                    <a wire:click="removeItemProduct({{$product->id}})" href="#" style="text-decoration: none !important;">
                                        REMOVE
                                        </a>
                                </p>
                            </div>

                        </div>

                        <div class="w-full grid grid-cols-3 box-cart" style="justify-content: center; align-items: center; ">

                            <p class="text-[13px] font-bold flex justify-center text-center article ">
                                <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif</span>

                                <span class="item_price"> {{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }} </span>

                            </p>

                            <input type="number" value="1" min="0" max="{{checkStockCartItems($product->id)}}" name="products[{{ $product->id }}][quantity]"
                                class="w-full input-quantity text-center text-[13px] font-bold border-black border"
                                style="height: 50%; width: 50%;">

                            <p class="text-[13px] font-bold flex justify-end">
                                <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif</span>
                                <span class="total_price">45</span>
                            </p>

                        </div>
                    </div>
                    <div class="pt-8 border-b desktop-only"></div>
                @endforeach
            </form>

            <form method="post" id="get-data-cart-mobile" action="{{ route('get_data_cart') }}">
                @csrf
                @foreach ($products as $product)
                    {{-- Contenu Mobile --}}
                    <br>

                        <input type="hidden" name="products[{{ $product->id }}][id]" value="{{ $product->id }}">
                        <div class="container mobile-only hide">
                            <div class="row">
                                <div class="col d-flex" style="flex-direction: column; justify-content : space-between ">

                                    <p class="font-bold ">
                                        <img style="display: block; text-align:left; "
                                            src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}"
                                            alt="" width="90" height="90">
                                    </p>
                                    <button type="button" ><a wire:click="removeItemProduct({{$product->id}})" href="#" style="text-decoration: none !important;">
                                        REMOVE
                                        </a></button>
                                    {{-- <button wire:click="remove({{ $product->id }})" class="remove-price" style="text-align: left;">REMOVE</button> --}}

                                </div>

                                <div class="col d-flex cart-box" style="flex-direction: column; justify-content : space-between; ">

                                    <div class="box-price">
                                        <p class="text-left font-bold md:pt-0 text-[13px] f-700 align-self-start"
                                            style="margin-bottom: auto; "> BOSSALINI FLY HOODIE - BLACK </p>
                                        <p class="text-left col  md:pt-0 text-[13px] f-700"
                                            style="margin-bottom: auto; align-self-center">
                                            <span>M / @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif </span>
                                                <span class="item_price">{{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }}</span> </p>
                                    </div>

                                    <input type="number" min="0" max="{{checkStockCartItems($product->id)}}" name="products[{{ $product->id }}][quantity]"
                                        class="w-full input-quantity hidden input-price text-center text-[13px] font-bold border-black border" :
                                        style="height: 25%; width: 25%;" value="1">
                                </div>

                                <div class="col d-flex text-end cart-total"
                                    style="flex-direction: column; justify-content : space-between; text-align:end; ">

                                    <p class="text-end col  md:pt-0 text-[13px] f-700" style="margin-bottom: auto; align-self-end">
                                        <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif</span>
                                        <span class="total-price">112</span> </p>


                                    <button type="button"
                                        class="mt-8 text-center px-8 w-auto edit-price antialised py-3 bg-black text-white text-[13px]">
                                        EDIT
                                    </button>
                                    <br>

                                    <button type="button"
                                        class="mt-8 text-center px-8 w-auto hidden update-price antialised py-3 bg-black text-white text-[13px]">
                                        UPDATE
                                    </button>
                                    <br>

                                    <button type="button"
                                        class="text-center px-8 w-auto hidden cancel-price antialised border py-3 bg-white text-black text-[13px]">
                                        CANCEL
                                    </button>

                                </div>
                            </div>
                        </div>

                    <div class="pt-8 border-b mobile-only hide"></div>
                @endforeach
                {{-- <button type="submit">Envoyer</button> --}}
            </form>



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
                    <p class="text-xs flex  justify-end">
                        <span>@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif</span>
                        <span class="subtotal">45</span>
                    </p>
                </div>
            </div>
        @endif

        @if (!$products->isEmpty())
            <div class="text-xs md:pt-9 pt-7 justify-end flex"> Shipping calculated at chekout </div>
        @endif

        {{-- Submit Desktop --}}
        <div class="items-center desktop-only gap-4 flex flex-col md:pt-9 pt-7 w-full grid grid-cols-2">
            <div class="flex items-center">
                <div class="justify-center border-black w-full flex">
                    <button wire:click="goToShop"
                        class="mt-8 text-center px-8 w-full antialised py-3 bg-black text-white text-[13px]"> CONTINUE
                        SHOPPING
                    </button>
                </div>
            </div>

            @if (!$products->isEmpty())

                <div class="flex items-center">
                        <div class="justify-center border-black w-full flex">
                            <button onclick="document.getElementById('get-data-cart-desktop').submit();"
                                class="mt-8 text-center px-8 w-full antialised py-3 bg-black text-white text-[13px]"> PROCEED TO
                                CHECKOUT
                            </button>
                        </div>
                </div>
            @endif
        </div>


        {{-- Submit Mobile --}}
        <div class="items-center mobile-only hide d-flex  gap-4 flex flex-col md:pt-9 pt-7 w-full grid grid-cols-2">
            <div class="flex items-center">
                <div class="justify-center border-black w-full flex">
                    <button wire:click="goToShop"
                        class="mt-8 text-center px-8 w-full antialised py-3 bg-black text-white text-[13px]"> CONTINUE
                        SHOPPING
                    </button>
                </div>
            </div>

            @if (!$products->isEmpty())

                <div class="flex items-center">
                        <div class="justify-center border-black w-full flex">
                            {{--  --}}
                            <button onclick="document.getElementById('get-data-cart-mobile').submit();"
                                class="mt-8 text-center px-8 w-full antialised py-3 bg-black text-white text-[13px]"> PROCEED TO
                                CHECKOUT
                            </button>
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
                                    xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6"
                                    fill="{{App\Models\Product::getStatusWishlist($product->id)  }}" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg></button>
                        </div>
                        <a href="{{ route('single_product', ['product_id' => $product->id]) }}">
                            <img class="transition ease-in duration-300 hover:bg-gray-900"
                                src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}"
                                alt="Product title">
                        </a>
                    </div>
                    <div class="flex-auto text-center justify-evenly">
                        <p class="pt-3 text-xs text f-700"> {{ $product->name }} </p>
                        <p class="antialiased text-xs"> <span> @if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif </span>  {{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }}</p>

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        window.addEventListener("deleteCartItem", event=>{
            if ($(window).width() > 767.98) {
                $(".mobile-only").addClass("hide");
                $(".desktop-only").removeClass("hide");
            } else {
                $(".mobile-only").removeClass("hide");
                $(".desktop-only").addClass("hide");
            }
        });
    </script>

