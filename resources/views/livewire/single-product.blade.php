

    <div>
        <section class=" lg:space-y-11 md:space-y-[101px] space-y-11">
            <div class="justify-center">
                <div class="lg:flex lg:items-center lg:w-auto lg:justify-between">
                    <div class="object-cover w-auto md:grid lg:grid-cols-5 xl:grid-cols-3 lg:gap-9 xl:gap-[70px]">



                        <div class="xl:col-span-2 lg:col-span-3">
                            <div class="grid xl:grid-cols-2 gap-2 flex-auto">
                                @foreach ($images as $image)
                                    <div>
                                        <img class="w-full min-h-[326px]" src="{{ asset('files/' . $image->image . '') }}"
                                            alt="Product title">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        @foreach ($products as $product)
                            <div class="xl:col-span-1 lg:col-span-2 flex flex-col items-center lg:pt-0 md:pt-[70px] pt-11">
                                <div class="md:w-[368px]">

                                    <div class="pt-4 flex-auto justify-center">
                                        <p class="text-left font-bold md:pt-0 text-[13px] f-700"> {{ $product->name }} </p>
                                        <p class="pt-2.5 text-left antialiased font-medium text-xs"></p>
                                    </div>
                                    <br>

                                    <div class="md:pt-[1px] pt-4">
                                        <div>
                                            <p class="mb-1">SELECT SIZE</p>
                                            <div class="grid grid-cols-3 gap-[19px] flex-auto"><button
                                                    class="active text-xs focus:text-black text-white focus:bg-white bg-black text-center py-3.5 w-full border">
                                                    <p>xs</p>
                                                </button><button
                                                    class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                                                    <p>s</p>
                                                </button><button
                                                    class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                                                    <p>M</p>
                                                </button><button
                                                    class="text-xs focus:bg-black text-center py-3.5 w-full border">
                                                    <p>L</p>
                                                </button><button
                                                    class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                                                    <p>XL</p>
                                                </button><button
                                                    class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                                                    <p>XXL</p>
                                                </button></div>
                                        </div>
                                    </div>

                                    @if (App\Models\Product::getStatusCart($product->id) == false)
                                    <div class="pt-4">
                                        <a  href="#"
                                            wire:click="addToCart({{ $product->id }})" class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                                            ADD TO CART
                                         </a>
                                        </div>
                                    @else
                                        <div class="pt-[19px]">
                                            <div class="py-[14px] px-[14px] bg-answer">
                                                <a
                                                href="https://bossalini.funcodes.bj/overview"
                                                class="w-auto text-xs border border-1 hover:text-answer hover:bg-white f-700 flex text-white py-3.5 text-center justify-center items-center">
                                                GO TO CART </a>
                                            </div>
                                            </div>
                                    @endif

                                    <hr
                                        style="background-color: #cccccc; height: 2px; border: none;
                                        margin: 30px 0;" />


                                    <div class="pt-4 flex-auto justify-center">
                                        <p class="text-left font-bold md:pt-0 text-[13px] f-700"> PRODUCT DESCRIPTION </p>
                                        <p class="pt-2.5 text-left antialiased font-medium text-xs">{{ $product->description }}
                                        </p>

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
                            <p class="antialiased text-xs">@if (Auth::check()) {{getUserCurrency()}} @else {{getCodeCurrency()}} @endif {{ $product->original_price }}</p>
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
