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

                </section>
            </div>

            <x-footer />

        </div>
    </div>


    @livewireScripts
</body>

</html>
