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
                        <div class="lg:hidden pr-10"><button id="show-modal"><img
                                    src="{{ asset('files/menu.1acfa22b.svg') }}" height="18"></button><span>
                                <!---->
                            </span></div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!----><a class="mx-auto"><img src="{{ asset('files/logo.e4b8d2f2.svg') }}" height="38"></a>
                        <div class="flex space-x-5 items-end"><a class="mx-auto"><img
                                    src="{{ asset('files/profil.c74a5317.svg') }}" height="18"></a><a
                                class="mx-auto"><img src="{{ asset('files/cart.95d40601.svg') }}" height="18"></a>
                        </div>
                    </div>
                </div>
            </div>

            <x-nav />



            <div class="lg:mx-9 mx-4 justify-center z-0 top-0 left-0 right-0">
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
                                                type="text" placeholder="NAME" aria-label="Full name"></div>
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


    @livewireScripts
</body>

</html>
