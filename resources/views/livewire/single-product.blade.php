@php
    $firstSize = 0;
    $firstColor = 0;
@endphp

{{-- <div class="mobile-only" style="padding: 65px;" ></div> --}}

    <div>
        <section class=" lg:space-y-11 md:space-y-[101px] space-y-11">
            <div class="justify-center">
                <div class="lg:flex lg:items-center lg:w-auto lg:justify-between">
                    <div class="object-cover w-auto md:grid lg:grid-cols-5 xl:grid-cols-3 lg:gap-9 xl:gap-[70px]">



                        <div class="xl:col-span-2 lg:col-span-3 zoom_image_product hide">
                            <div class="relative mb-3">
                                <div class="absolute flex flex-col top-0 right-0 p-3">
                                    <button
                                    class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1 close_zoom_project"><img
                                    src="{{ asset('files/x.7e1a15a2.svg') }}" height="18"></button>
                                </div>
                                <a href="#">
                                    <img class="w-full zoom_src" src=""
                                    alt="Product title">
                                </a>
                            </div>
                        </div>

                        <div class="xl:col-span-2 lg:col-span-3 product_images">
                            <div class="grid xl:grid-cols-2 gap-2 flex-auto">
                                @foreach ($images as $image)
                                    <div>
                                        <img class="w-full min-h-[326px] product_image" src="{{ asset('files/' . $image->image . '') }}"
                                            alt="Product title">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @foreach ($products as $product)
                            <div class="xl:col-span-1 lg:col-span-2 flex flex-col items-center lg:pt-0 md:pt-[70px] pt-11">
                                <div class="w-full">
                                    <div class="flex-auto justify-evenly">
                                        <p class="space-x-1 pb-[26px] md:pt-0 pt-[19px] text-[10px] f-700">
                                          <span class="uppercase">
                                            <a href="https://bossalini.funcodes.bj/">HOME</a>
                                          </span>
                                          <span>/</span>
                                          <span class="uppercase">
                                            <a href="https://bossalini.funcodes.bj/product/bossalini-fly-cap-black">{{ $product->name }}</a>
                                          </span>
                                          <span>/</span>
                                        </p>
                                      </div>
                                    <div class="flex-auto justify-evenly">
                                        <p class="font-bold md:pt-0 text-[13px] f-700">{{ $product->name }}</p>
                                        <p class="antialiased text-xs">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif   {{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }}</p>
                                      </div>


                                    @if ($colors != null)
                                        <div class="pt-7">
                                            <p class="antialiased text-xs">SELECT COLOUR</p>
                                            <div class="col-span-2 pt-4">
                                            <div class="grid grid-cols-5 gap-3 flex-auto">
                                                @foreach ($colors as $color)

                                                    <div
                                                        @if(checkStockColorProduct($product->id, $color->code ))
                                                        style="opacity: 0.5; border: 1px solid red; pointer-events: none;"
                                                        @endif
                                                        class="hover:border-black hover:border hover:border-2
                                                        @if (getColorSelectProduct($product->id, $color->code) ) border-2 @endif
                                                        {{-- @if ($loop->first) @if(getColorDefaultProduct($product->id, $color->code)) border-2 @endif @endif --}}

                                                        @if (!checkStockColorProduct($product->id, $color->code ))
                                                            @if ($firstColor == 0)
                                                                @if(getColorDefaultProduct($product->id, $color->code)) border-2 @endif
                                                                <?php $firstColor++; ?>
                                                            @endif
                                                        @endif

                                                        ">
                                                        <a
                                                        wire:click="saveColorProduct('{{$color->code}}', {{$product->id}})" href="#"
                                                        >
                                                            <div style="width: 100%; height: 100%; background-color: <?php echo $color->code ?> ;" > </div>
                                                            <img class="" style="opacity: 0;" src="{{asset('files/slider_home01.c824a1f9.jpg')}}" alt="Product title">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            </div>
                                        </div>
                                    @endif


                                    @if ($sizes  != null)
                                        <div class="md:pt-[1px] pt-4">
                                            <div>
                                                <p class="mb-1 antialiased text-xs">SELECT SIZE</p>
                                                <div class="grid grid-cols-3 gap-[19px] flex-auto">

                                                    @foreach ($sizes as $size)
                                                    <a
                                                    @if(checkStockSizeProduct($product->id, $size->id))
                                                    wire:click="saveSizeProduct('{{$size->name}}', {{$product->id}})"
                                                    @else
                                                    href="#"
                                                    @endif

                                                    >
                                                        <button
                                                        @if(!checkStockSizeProduct($product->id, $size->id)) style="opacity: 0.5;" @endif
                                                            class="text-xs text-center py-3.5 w-full border focus:text-white focus:bg-black
                                                            @if (getSizeSelectProduct($product->id, $size->name)) text-white bg-black @endif
                                                            {{-- @if ($loop->first) @if(getSizeDefaultProduct($product->id, $size->name)) text-white bg-black @endif @endif --}}

                                                            @if (checkStockSizeProduct($product->id, $size->id))
                                                                @if ($firstSize == 0)
                                                                    @if(getSizeDefaultProduct($product->id, $size->name)) text-white bg-black @endif
                                                                    <?php $firstSize++; ?>
                                                                @endif
                                                            @endif

                                                            ">
                                                            <p>{{$size->name}}</p>
                                                        </button>
                                                    </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (checkStockProduct($product->id))

                                        @if (App\Models\Product::getStatusCart($product->id) == false)
                                            @if (getButtonAddCart($product->id))
                                            <div class="pt-4">
                                                <a  wire:click="addProductToCart({{$product->id}})" href="#"
                                                    class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                                                    ADD TO CART
                                                </a>
                                            </div>
                                            @endif
                                        @else
                                            @if (getButtonAddCart($product->id) == false )
                                                <div class="pt-[19px]">
                                                    <div class="py-[14px] px-[14px] bg-answer">
                                                        <a
                                                        href="{{route('add_cart')}}"
                                                        class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                                                        GO TO CART </a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @else

                                    <div class="text-center">
                                        <button style="opacity: 0.4;"
                                        class="mt-8 text-center px-8 w-full sold_out_product antialised py-3 border border-1 text-black text-[13px]" style="background-color: white !important;"> SOLD OUT
                                        </button>
                                    </div>

                                    <div class="pt-4 pb-4 w-full">
                                        <a  href="#"
                                            class="w-auto text-xs border open_form_notify border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                                            NOTIFY ME WHEN IS AVAILABLE
                                        </a>
                                    </div>

                                    <form method="POST" action="" class="hide form_notify">
                                            <div syle="border-color:#D8D8D8 " class="flex items-center border-b pb-3.5">
                                                <input
                                                    class="antialiased text-sm appearance-none bg-transparent border-none w-full text-black placeholder-black leading-tight focus:outline-none"
                                                    type="text" placeholder="Email" aria-label="Full name">
                                            </div>
                                            <div class="pt-5"><button
                                                    class="antialiased w-full close_form_notify text-xs border-black border-solid border hover:bg-black hover:text-white py-4 px-11 lg:text-black">
                                                    NOTIFY ME </button></div>
                                    </form>

                                    @endif


                                    <div class="pt-4 flex-auto justify-center">

                                        <div class="w-full">
                                            <div class="relative border-t border-tiret2">
                                              <button type="button" class="w-full py-3 text-left">
                                                <div class="flex items-center justify-between">
                                                  <span class="text-xs"> PRODUCT DESCRIPTION </span>
                                                  <!---->
                                                  <svg class="open_modal_description" xmlns="http://www.w3.org/2000/svg" width="10" height="15" fill="none">
                                                    <path stroke="#000" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.3" d="m1.363 1 7 6.5-7 6.5"></path>
                                                  </svg>
                                                  <svg class="close_modal_description hide" xmlns="http://www.w3.org/2000/svg" width="16" height="9" fill="none">
                                                    <path stroke="#000" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.3" d="m14.363 1-6.5 7-6.5-7"></path>
                                                  </svg>
                                                </div>
                                              </button>

                                              <div class="product_description hide">
                                                <div class="mb-4 text-xs">
                                                    {{ $product->description }}
                                                </div>
                                              </div>

                                            </div>
                                            <div class="relative border-t border-tiret2">
                                              <button type="button" class="w-full py-3 text-left">
                                                <div class="flex items-center justify-between">
                                                  <span class="text-xs"> PRODUCT SIZING </span>

                                                  <svg class="open_modal_size" xmlns="http://www.w3.org/2000/svg" width="10" height="15" fill="none">
                                                    <path stroke="#000" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.3" d="m1.363 1 7 6.5-7 6.5"></path>
                                                  </svg>
                                                  <svg class="close_modal_size hide" xmlns="http://www.w3.org/2000/svg" width="16" height="9" fill="none">
                                                    <path stroke="#000" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.3" d="m14.363 1-6.5 7-6.5-7"></path>
                                                  </svg>
                                                  <!---->
                                                </div>
                                              </button>

                                              <div class="product_size hide">
                                                <div class="mb-4 text-xs ">
                                                    {{ $product->description }}
                                                </div>
                                              </div>
                                              <!---->
                                            </div>
                                            <div class="relative border-b border-t border-tiret2">
                                              <button type="button" class="w-full py-3 text-left">
                                                <div class="flex items-center justify-between">
                                                  <span class="text-xs"> BODY MEASUREMENTS </span>

                                                  <svg class="open_modal_delivery" xmlns="http://www.w3.org/2000/svg" width="10" height="15" fill="none">
                                                    <path stroke="#000" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.3" d="m1.363 1 7 6.5-7 6.5"></path>
                                                  </svg>
                                                  <svg class="close_modal_delivery hide" xmlns="http://www.w3.org/2000/svg" width="16" height="9" fill="none">
                                                    <path stroke="#000" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.3" d="m14.363 1-6.5 7-6.5-7"></path>
                                                  </svg>

                                                  <!---->
                                                </div>
                                              </button>

                                              <div class="product_delivery hide">
                                                <div class="mb-4 text-xs">
                                                    {{ $product->description }}
                                                </div>
                                              </div>
                                              <!---->
                                            </div>
                                          </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
                                    class="transition ease-in duration-300 w-8 h-8 text-center p-1" ><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="{{App\Models\Product::getStatusWishlist($product->id)}}"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg></button></div>
                                    <a href="{{ route('single_product', ['product_id' => $product->id]) }}">
                                    <img class="transition ease-in duration-300 hover:bg-gray-900"
                                src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}"
                                alt="Product title">
                            </a>
                        </div>
                        <div class="flex-auto text-center justify-evenly">
                            <p class="pt-3 text-xs text f-700"> {{ $product->name }} </p>
                            <p class="antialiased text-xs">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif   {{ getConvertRatePrice( Auth::check() ? getUserRateCurrency() : getRateCurrency(), getPriceProduct($product->id) ) }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <section class="lg:pt-20 pt-14">
        <div class="justify-scenter text-center">
            <p class="antialiased lg:text-sm text-xs">SHOP INSTAGRAM</p>
            <p class="lg:mx-5.5 mt-4 pb-5 md:text-sm text-xs font-bold"> TAG YOUR POST WITH @BOSSALINIWORLD AND
                #KEEPITFLY TO BE FEATURED </p>
        </div>
        <section class="carousel" dir="ltr" aria-label="Gallery" tabindex="0">
            <div class="carousel__viewport ">

                <ol class="carousel__track owl-carousel"
                    style=" transform: translateX(0px); transition: all 0ms ease 0s; width: 100%;">

                    <li class="carousel__slide item carousel__slide--visible carousel__slide--active"
                        aria-hidden="false" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home1.0d99ea0b.jpg') }}"></div>
                    </li>
                    <li class="carousel__slide item carousel__slide--visible carousel__slide--next"
                        aria-hidden="false" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}"></div>
                    </li>
                    <li class="carousel__slide item carousel__slide--visible" aria-hidden="false"
                        style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home03.8407ddd7.png') }}"></div>
                    </li>
                    <li class="carousel__slide item carousel__slide--visible" aria-hidden="false"
                        style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home05.cf86fc3b.png') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home1.0d99ea0b.jpg') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home03.8407ddd7.png') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home05.cf86fc3b.png') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home1.0d99ea0b.jpg') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home03.8407ddd7.png') }}"></div>
                    </li>
                    <li class="carousel__slide item" aria-hidden="true" style="width: 319.25px;">
                        <div v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                            class="carousel__item"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home05.cf86fc3b.png') }}"></div>
                    </li>
                </ol>
            </div>
            <div class="carousel__liveregion carousel__sr-only" aria-live="polite"
                aria-atomic="true">Item 1 of 12
            </div>
        </section>
        <div class="pt-7 flex justify-between items-center"><button class="span customPreviousBtn"><svg
                    width="43" height="43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#000" d="M42.5 42.5H.5V.5h42z"></path>
                    <path
                        d="M25 27.538 23.583 29l-7.004-7.218 7.004-7.218L25 16.026l-5.583 5.756L25 27.538Z"
                        fill="#000">
                    </path>
                </svg></button>
            <div><button class="text-xs f-700 bg-black py-4 px-9 text-white"> VIEW MORE </button></div>
            <button class="span customNextBtn "><svg width="43" height="43" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#000" d="M.5.5h42v42H.5z"></path>
                    <path
                        d="M18 15.462 19.417 14l7.004 7.218-7.004 7.218L18 26.974l5.583-5.756L18 15.462Z"
                        fill="#000">
                    </path>
                </svg></button>
        </div>
        <div class="hidden">
            <div class="lg:flex hidden items-center justify-center space-x-3">
                <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                        src="{{ asset('files/IGpost_home1.0d99ea0b.jpg') }}" alt="Product title"></div>
                <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                        src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}" alt="Product title"></div>
                <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                        src="{{ asset('files/IGpost_home03.8407ddd7.png') }}" alt="Product title"></div>
                <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                        src="{{ asset('files/IGpost_home05.cf86fc3b.png') }}" alt="Product title"></div>
            </div>
            <div class="lg:hidden flex items-center justify-center space-x-4">
                <div><img class="" src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}" alt="Product title">
                </div>
                <div><img class="" src="{{ asset('files/IGpost_home03.8407ddd7.png') }}" alt="Product title">
                </div>
            </div>
            <div class="pt-7 flex justify-between items-center"><button class="span"><svg width="43"
                        height="43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#000" d="M42.5 42.5H.5V.5h42z"></path>
                        <path d="M25 27.538 23.583 29l-7.004-7.218 7.004-7.218L25 16.026l-5.583 5.756L25 27.538Z"
                            fill="#000"></path>
                    </svg></button>
                <div><button class="text-xs f-700 bg-black py-4 px-9 text-white"> VIEW MORE </button></div><button
                    class="span"><svg width="43" height="43" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke="#000" d="M.5.5h42v42H.5z"></path>
                        <path d="M18 15.462 19.417 14l7.004 7.218-7.004 7.218L18 26.974l5.583-5.756L18 15.462Z"
                            fill="#000">
                        </path>
                    </svg></button>
            </div>
        </div>
    </section>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    window.addEventListener("mobile_menu", event=>{
        if ($(window).width() > 767.98) {
            $(".nav_menu_mobile").css("margin-bottom", "0px");
        } else {
            $(".nav_menu_mobile").css("margin-bottom", "180px");
        }
    });
</script>
