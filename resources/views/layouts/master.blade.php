<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="bg-gray-20 font-kanit" style="background-color: #ffffff;" cz-shortcut-listen="true">
    <div id="app" data-v-app="">
        <div id="login">
            <div class="relative bg-white"></div>
            <div class="items-center z-50 fixed top-0 left-0 right-0 bg-white shadow-sm">

                <x-header />


                <div class="mx-[22px] lg:hidden">
                    <div class="flex items-center py-7">
                        <div class="lg:hidden pr-10">
                            <button id="show-modal"><img src="{{ asset('files/menu.1acfa22b.svg') }}"
                                    height="18"></button>

                            <button id="show-modal-close" style="display:none !important"><img
                                    src="{{ asset('files/x.7e1a15a2.svg') }}" height="18"></button>
                        </div>



                        <div id="modal" style=" animation-name: fadeInDown; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center bg-white">
                            <div id="shop-category"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>SHOP BY CATEGORY</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="shop-collection"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>SHOP BY COLLECTION</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="new-drop"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">NEW DROP</a></p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="shop-all"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{route('shop')}}">SHOP ALL</a></p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="keep-it-fly"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>KEEP*IT*FLY</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="gift-card"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">GIFT CARD</a></p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="shop-instagram"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">SHOP INSTAGRAM</a></p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="customer-care"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>CUSTOMER CARE</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="account"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>ACCOUNT</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="wishlist"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>WISHLIST</p>
                                <a href="{{route('wishlists')}}">
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                                </a>
                            </div>
                            <div id="media"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>MEDIA</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="brand"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p>BRAND</p>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div id="uk"
                                class="text-[11px] px-4 py-[9.25px] border-t border-b border-tiret2 flex justify-between">
                                <div class="flex justify-center items-center">
                                        <img class="focus:text-black focus:font-bold extra antialiased text-xs py-2 rounded-md hover:font-bold"
                                            aria-haspopup="true" src=" @if (Auth::check())  {{ asset('files/' .  getUserImageCurrency() . '') }} @else {{ asset('files/' .  getImageCurrency() . '') }} @endif  " height="18">
                                    <p>@if (Auth::check())  {{getUserNameCurrency()}} @else {{getNameCurrency()}} @endif</p>
                                </div>
                                <img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                        </div>

                        <div id="shop-category-modal" style=" animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="shop-category-modal-close"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                                <p>SHOP</p>
                                <p></p>
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p class="font-bold"><a href="#"> CLOTHING</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}"
                                    height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{route('shop')}}">>ALL</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{ route('get_products_by_categories', ['category_id' => 4]) }}">T-SHIRTS</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{ route('get_products_by_categories', ['category_id' => 1]) }}">HOODIES</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">BOTTOMS</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p class="font-bold"><a href="#">ACCESSORIES</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}"
                                    height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{ route('get_products_by_categories', ['category_id' => 3]) }}">HEADWEAR</p><img src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p class="font-bold"><a href="{{route('overview')}}">COLLECTIONS</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}"
                                    height="18">
                            </div>
                            <div
                                class="text-[11px] px-4 py-[9.25px] border-t border-b border-tiret2 flex justify-between">
                                <p><a href="#">KEEP*IT*FLY</a></p><img src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                            </div>
                        </div>

                        <div id="shop-collection-modal" style="animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="shop-collection-modal-close"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                                <p><a href="{{route('overview')}}">COLLECTION</a></p>
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p class="font-bold"><a href="#">KEEP*IT*FLY</p><img src="{{ asset('files/Vector.8dc6065e.svg') }}"
                                    height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{route('overview')}}">OVERVIEW</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{ route('get_products_by_categories', ['category_id' => 4]) }}">T-SHIRTS</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{ route('get_products_by_categories', ['category_id' => 1]) }}">HOODIES</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">BOTTOMS</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div
                                class="text-[11px] px-4 py-[9.25px] border-t border-b border-tiret2 flex justify-between">
                                <p><a href="#">ACCESSORIES</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                        </div>

                        <div id="customer-care-modal" style=" animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="customer-care-modal-close"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                                <p>CUSTOMER CARE</p>
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{route('contact')}}">CONTACT</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">FAQS</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">SHIPPING POLICIES</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">RETURN POLICIES</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div
                                class="text-[11px] px-4 py-[9.25px] border-t border-b border-tiret2 flex justify-between">
                                <p><a href="#">TERMS</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                        </div>

                        <div id="account-modal" style=" animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="account-modal-close"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                                <p>ACCOUNT</p>
                                <p></p>
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{route('login')}}">LOGIN</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div
                                class="text-[11px] px-4 py-[9.25px] border-t border-b border-tiret2 flex justify-between">
                                <p><a href="{{route('register')}}">REGISTER</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                        </div>

                        <div id="media-modal" style=" animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="media-modal-close"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                                <p>MEDIA</p>
                            </div>
                            <div
                                class="text-[11px] px-4 py-[9.25px] border-t border-b border-tiret2 flex justify-between">
                                <p><a href="#">KEEP*IT*FLY ESSENTIALS LOOKBOOK</a></p><img
                                    src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                        </div>

                        <div id="brand-modal" style=" animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="brand-modal-close"
                                class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                                <p>BRAND</p>
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="{{route('about')}}">ABOUT</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                            <div class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between">
                                <p><a href="#">MEDIA</a></p><img src="{{ asset('files/Vector.8dc6065e.svg') }}" height="18">
                            </div>
                        </div>

                        <div id="uk-modal" style=" animation-name: fadeInRight; animation-duration: 0.5s;"
                            class="absolute hidden shadow-lg w-screen h-screen fixed z-50 top-full right-0 flex-reverse block items-center lg:hidden bg-white">
                            <div id="uk-modal-close" class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between"><img
                                    class="rotate-180" src="{{asset('files/Vector.8dc6065e.svg')}}" height="18">
                                <p>SELECT CURRENCY</p>
                                <p></p>
                            </div>
                            <a href="{{ route('change_currency', ['currency' => '€', 'id'=> 1]) }}">
                                <div
                                    class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between items-center">
                                    <img src="{{asset('files/flag-eur.eb1348a4.svg')}}" height="18">
                                    <p>EUROPE / EUR</p>
                                </div>
                            </a>

                            <a href="{{ route('change_currency', ['currency' => 'CHF', 'id'=> 2]) }}">
                                <div
                                    class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between items-center">
                                    <img src="{{asset('files/flag-swz.dc144f59.svg')}}" height="18">
                                    <p>SWITZERLAND / CHF</p>
                                </div>
                            </a>

                            <a href="{{ route('change_currency', ['currency' => '£', 'id'=> 3]) }}">
                                <div
                                    class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between items-center">
                                    <img src="{{asset('files/flag-uk.3248720d.svg')}}" height="18">
                                    <p>UNITED KINGDOM</p>
                                </div>
                            </a>

                            <a href="{{ route('change_currency', ['currency' => '$', 'id'=> 4]) }}">
                                <div
                                    class="text-[11px] px-4 py-[9.25px] border-t border-tiret2 flex justify-between items-center">
                                    <img src="{{asset('files/flag-usa.1c85eb67.svg')}}" height="18">
                                    <p>USA - REST OF THE WORLD / USD</p>
                                </div>
                            </a>
                        </div>


                        <script>
                            const hamburger = document.getElementById("show-modal");
                            const cross = document.getElementById("show-modal-close");
                            const modal = document.getElementById("modal");

                            hamburger.addEventListener("click", function() {
                                hamburger.style.display = "none";
                                cross.style.display = "block";
                                // modal.style.display = "block";
                                modal.classList.remove("hidden");
                                modal.style.animationName = "fadeInDown";
                            });

                            cross.addEventListener("click", function() {
                                hamburger.style.display = "block";
                                cross.style.display = "none";
                                modal.classList.add("hidden");
                                modal.style.animationName = "fadeInUp";
                                setTimeout(function() {
                                    modal.classList.add("hidden");
                                }, 500);
                            });

                            const shop_category = document.getElementById("shop-category");
                            const shop_category_modal = document.getElementById("shop-category-modal");
                            const shop_category_modal_close = document.getElementById("shop-category-modal-close");

                            shop_category.addEventListener("click", function() {
                                shop_category_modal.classList.remove("hidden");
                                shop_category_modal.style.animationName = "fadeInRight";
                            });

                            shop_category_modal_close.addEventListener("click", function() {
                                shop_category_modal.classList.add("hidden");
                                shop_category_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    shop_category_modal.classList.add("hidden");
                                }, 500);
                            });

                            const shop_collection = document.getElementById("shop-collection");
                            const shop_collection_modal = document.getElementById("shop-collection-modal");
                            const shop_collection_modal_close = document.getElementById("shop-collection-modal-close");

                            shop_collection.addEventListener("click", function() {
                                shop_collection_modal.classList.remove("hidden");
                                shop_collection_modal.style.animationName = "fadeInRight";
                            });

                            shop_collection_modal_close.addEventListener("click", function() {
                                shop_collection_modal.classList.add("hidden");
                                shop_collection_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    shop_collection_modal.classList.add("hidden");
                                }, 500);
                            });

                            const customer_care = document.getElementById("customer-care");
                            const customer_care_modal = document.getElementById("customer-care-modal");
                            const customer_care_modal_close = document.getElementById("customer-care-modal-close");

                            customer_care.addEventListener("click", function() {
                                customer_care_modal.classList.remove("hidden");
                                customer_care_modal.style.animationName = "fadeInRight";
                            });

                            customer_care_modal_close.addEventListener("click", function() {
                                customer_care_modal.classList.add("hidden");
                                customer_care_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    customer_care_modal.classList.add("hidden");
                                }, 500);
                            });

                            const account = document.getElementById("account");
                            const account_modal = document.getElementById("account-modal");
                            const account_modal_close = document.getElementById("account-modal-close");

                            account.addEventListener("click", function() {
                                account_modal.classList.remove("hidden");
                                account_modal.style.animationName = "fadeInRight";
                            });

                            account_modal_close.addEventListener("click", function() {
                                account_modal.classList.add("hidden");
                                account_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    account_modal.classList.add("hidden");
                                }, 500);
                            });

                            const media = document.getElementById("media");
                            const media_modal = document.getElementById("media-modal");
                            const media_modal_close = document.getElementById("media-modal-close");

                            media.addEventListener("click", function() {
                                media_modal.classList.remove("hidden");
                                media_modal.style.animationName = "fadeInRight";
                            });

                            media_modal_close.addEventListener("click", function() {
                                media_modal.classList.add("hidden");
                                media_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    media_modal.classList.add("hidden");
                                }, 500);
                            });

                            const brand = document.getElementById("brand");
                            const brand_modal = document.getElementById("brand-modal");
                            const brand_modal_close = document.getElementById("brand-modal-close");

                            brand.addEventListener("click", function() {
                                brand_modal.classList.remove("hidden");
                                brand_modal.style.animationName = "fadeInRight";
                            });

                            brand_modal_close.addEventListener("click", function() {
                                brand_modal.classList.add("hidden");
                                brand_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    brand_modal.classList.add("hidden");
                                }, 500);
                            });

                            const uk = document.getElementById("uk");
                            const uk_modal = document.getElementById("uk-modal");
                            const uk_modal_close = document.getElementById("uk-modal-close");

                            uk.addEventListener("click", function() {
                                uk_modal.classList.remove("hidden");
                                uk_modal.style.animationName = "fadeInRight";
                            });

                            uk_modal_close.addEventListener("click", function() {
                                uk_modal.classList.add("hidden");
                                uk_modal.style.animationName = "fadeInLeft";

                                setTimeout(function() {
                                    uk_modal.classList.add("hidden");
                                }, 500);
                            });
                        </script>
                        <!---->
                        <a class="mx-auto" href="{{route('home')}}">
                            <img src="{{ asset('files/logo.e4b8d2f2.svg') }}" height="38">
                        </a>

                            <div class="flex space-x-5 items-end">
                                @if (Auth::check())
                                    <a class="mx-auto" href="{{route('account')}}">
                                        <img src="{{ asset('files/profil.c74a5317.svg') }}" height="18">
                                    </a>
                                @endif

                                <a href="{{route('wishlists')}}" class="mx-auto">
                                    <img src="{{ asset('files/wish.639c7b91.svg') }}" height="18">
                                </a>

                                <a class="mx-auto" href="{{route('add_cart')}}">
                                    <img src="{{ asset('files/cart.95d40601.svg') }}" height="18">
                                    <span class="cart_qty_mobile">
                                        {{getNumberProductCart()}}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <x-nav />



            <div class=" justify-center @if (isMobile())  @else lg:mx-9 mx-4 z-0 top-0 left-0 right-0 @endif ">
                <section class="container max-w-screen-2xl md:mt-[159px] mt-[50px]">

                    @yield('content')

                    <div class="-mb-[55px]">
                        <section
                            class="lg:container lg:max-w-screen-2xl justify-center pb-10 pt-16 lg:grid lg:grid-cols-2">
                            <div class="py-12 border border-black border-solid justify-center items-center">
                                <div class="flex justify-center items-center"><img
                                        src="{{ asset('files/logo2.d7e5312c.svg') }}" alt=""></div>
                                <div class="pt-4 pb-5 text-center sm:text-xl text-sm">
                                    <p>BOSSALINI MEMBERS CLUB</p>
                                </div>
                                <div class="antialiased text-sm text-center">
                                    <p>Sign up to join the Bossalini </p>
                                    <p>Members Club for exclusive content,</p>
                                    <p>events, promotions and more.</p>
                                </div>
                            </div>
                            <div
                                class="py-12 border-l border-r sm:border-t-0 lg:border-t border-b lg:border-l-0 lg:border-r lg:border-t lg:border-b border-black border-solid justify-center items-center">
                                <form class="">
                                    <div class="justify-center md:px-64 lg:px-32 xl:px-48 px-11 items-center">
                                        <div syle="border-color:#D8D8D8 " class="flex items-center border-b pb-3.5">
                                            <input
                                                class="antialiased text-sm appearance-none bg-transparent border-none w-full text-black placeholder-black leading-tight focus:outline-none"
                                                type="text" placeholder="NAME" aria-label="Full name">
                                        </div>
                                        <div syle="border-color:#D8D8D8 "
                                            class="flex items-center border-b pb-3.5 pt-6"><input
                                                class="antialiased text-sm appearance-none bg-transparent border-none w-full text-black mr-11 placeholder-black leading-tight focus:outline-none"
                                                type="text" placeholder="EMAIL ADRESS" aria-label="Full name">
                                        </div>
                                        <div class="pt-5"><button
                                                class="antialiased w-full text-xs border-black border-solid border hover:bg-black hover:text-white py-4 px-11 lg:text-black">
                                                SIGN UP </button></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </section>
            </div>

            <x-footer />

        </div>
    </div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'></script>
<script>
    $(document).ready(function(){
        var owl = $('.owl-carousel');


        if (window.matchMedia("(max-width: 767px)").matches) {
            owl.owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                items: 1,
            });
        }else {
            owl.owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                items: 4,
            });
        }

        $('.open_form_notify').click(function() {
            $(".open_form_notify").addClass("hide");
            $(".sold_out_product").addClass("hide");
            $(".form_notify").removeClass("hide");
        });

        $('.close_form_notify').click(function() {
            $(".open_form_notify").addClass("hide");
            $(".sold_out_product").addClass("hide");
            $(".form_notify").removeClass("hide");
        });


        // Custom Button
        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        });
        $('.customPreviousBtn').click(function() {
            owl.trigger('prev.owl.carousel');
        });


        if ($(window).width() > 767.98) {
            $(".mobile-only").addClass("hide");
            $(".desktop-only").removeClass("hide");
        }else {
            $(".mobile-only").removeClass("hide");
            $(".desktop-only").addClass("hide");
        }

        $(".cancel-price").click(function(){

            $(this).closest('.mobile-only').find('.remove-price').addClass('hidden');
            $(this).closest('.mobile-only').find('.cancel-price').addClass('hidden');
            $(this).closest('.mobile-only').find('.update-price').addClass('hidden');
            $(this).closest('.mobile-only').find('.input-price').addClass('hidden');
            $(this).closest('.mobile-only').find('.edit-price').removeClass('hidden');
        });

        $(".edit-price").click(function(){

            $(this).closest('.mobile-only').find('.remove-price').removeClass('hidden');
            $(this).closest('.mobile-only').find('.cancel-price').removeClass('hidden');
            $(this).closest('.mobile-only').find('.input-price').removeClass('hidden');
            $(this).closest('.mobile-only').find('.update-price').removeClass('hidden');
            $(this).closest('.mobile-only').find('.edit-price').addClass('hidden');
        });


        $(".update-price").click(function(){
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;

            $('.cart-box').each(function () {
                var count = $(this).closest('.mobile-only').find('.cart-box .input-quantity');
                var price = $(this).closest('.mobile-only').find('.cart-box .box-price .item_price');

                var priceVal = parseFloat(price.html());
                var countVal = parseFloat(count.val());

                sum = (countVal * priceVal);

                if(!(isNaN(sum))) {
                    total = total + sum;
                }
                totalGlobal = total ;
                $(this).closest('.mobile-only').find('.cart-total .total-price').html(sum);
            });
            $('.subtotal').text(totalGlobal);
        });


        $(".input-quantity").change(function() {
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;
            $('.box-cart').each(function () {
                var count = $(this).closest('.desktop-only').find('.box-cart .input-quantity');
                var price = $(this).closest('.desktop-only').find('.box-cart .article .item_price');


                var priceVal = parseFloat(price.html());
                var countVal = parseFloat(count.val());

                sum = (countVal * priceVal);
                if(!(isNaN(sum))) {
                    total = total + sum;
                }
                totalGlobal = total ;
                $(this).closest('.desktop-only').find('.box-cart .total_price').html(sum);
            });
            $('.subtotal').text(totalGlobal);

        }).change();


        $('.open_modal_description').click(function() {
            $(".open_modal_description").addClass("hide");
            $(".close_modal_description").removeClass("hide");
            $(".product_description").removeClass("hide");
            document.querySelector(".product_description").style.animationName = "fadeInRight";
        });

        $('.close_modal_description').click(function() {
            $(".open_modal_description").removeClass("hide");
            $(".close_modal_description").addClass("hide");
            $(".product_description").addClass("hide");
            document.querySelector(".product_description").style.animationName = "fadeOutRight";
        });

        $('.open_modal_size').click(function() {
            $(".open_modal_size").addClass("hide");
            $(".close_modal_size").removeClass("hide");
            $(".product_size").removeClass("hide");
            document.querySelector(".product_size").style.animationName = "fadeInRight";
        });

        $('.close_modal_size').click(function() {
            $(".open_modal_size").removeClass("hide");
            $(".close_modal_size").addClass("hide");
            $(".product_size").addClass("hide");
            document.querySelector(".product_size").style.animationName = "fadeOutRight";
        });

        $('.open_modal_delivery').click(function() {
            $(".open_modal_delivery").addClass("hide");
            $(".close_modal_delivery").removeClass("hide");
            $(".product_delivery").removeClass("hide");
            document.querySelector(".product_delivery").style.animationName = "fadeInRight";
        });

        $('.close_modal_delivery').click(function() {
            $(".open_modal_delivery").removeClass("hide");
            $(".close_modal_delivery").addClass("hide");
            $(".product_delivery").addClass("hide");
            document.querySelector(".product_delivery").style.animationName = "fadeOutRight";
        });


        $('.product_image').click(function() {
            var path = $(this).attr('src');
            $('.zoom_image_product').removeClass("hide");
            $('.product_images').addClass("hide");
            $('.zoom_src').attr('src', path);
        });

        $('.close_zoom_project').click(function() {
            $('.zoom_image_product').addClass("hide");
            $('.product_images').removeClass("hide");
        });




    });
</script>

@livewireScripts
</body>

</html>
