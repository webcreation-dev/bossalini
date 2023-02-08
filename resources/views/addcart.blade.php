@extends("layouts.master")

@section('content')
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
          <div class="w-full grid grid-cols-3">
            <p class="text-[13px] font-bold flex">PRICE</p>
            <p class="text-[13px] font-bold flex justify-end">QUANTITY</p>
            <p class="text-[13px] font-bold flex justify-end">TOTAL</p>
          </div>
        </div>
        <div class="pt-8 border-b"></div>
        <p class="cart-empty-text has-text-centered"> Add some items to the cart ! </p>
        <div class="pt-8 border-b"></div>
        <div class="items-center flex flex-col md:pt-9 pt-7 w-full grid md:grid-cols-2">
          <div class="w-full space-x-11 flex"></div>_
          <div class="items-center w-full grid grid-cols-3">
            <p class="text-[13px] font-bold flex justify-end"></p>
            <p class="text-[13px] font-bold flex md:justify-end">SUBTOTAL</p>
            <p class="text-xs flex justify-end">CHF 224.00</p>
          </div>
        </div>
        <div class="text-xs md:pt-9 pt-7 justify-end flex"> Shipping calculated at chekout </div>
        <div class="items-center gap-4 flex flex-col md:pt-9 pt-7 w-full grid grid-cols-2">
          <div class="flex items-center">
            <div class="border justify-center border-black w-full py-5 flex">
              <p class="text-[11px] text-center flex justify-end"> CONTINUE SHOPPING </p>
            </div>
          </div>
          <div class="flex items-center">
            <div class="border justify-center bg-black border-black w-full py-5 flex">
              <p class="text-[11px] text-white text-center flex justify-end"> PROCEED TO CHECKOUT </p>
            </div>
          </div>
        </div>
      </section>


      <div class="col-span-3">
        <p style="padding-top:82px;" class="text-sm text-center f-700 pb-5"> YOU MIGHT ALSO LIKE </p>
        <div class="flex items-center justify-center space-x-5">
          <div class="grid md:grid-cols-4 grid-cols-2 gap-3 flex-auto">
            <div class="">
              <div class="relative mb-3">
                <div class="absolute flex flex-col top-0 right-0 p-3"><button
                    class="transition ease-in duration-300 w-8 h-8 text-center p-1"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg></button></div><img class="transition ease-in duration-300 hover:bg-gray-900"
                  src="{{asset('files/slider_home01-1.70ad19e6.jpg')}}" alt="Product title">
              </div>
              <div class="flex-auto text-center justify-evenly">
                <p class="pt-3 text-xs text f-700"> FLY NYLON CAP / BUTTERCREAM </p>
                <p class="antialiased text-xs">€ 68,00</p>
              </div>
            </div>

            <div class="">
              <div class="relative mb-3">
                <div class="absolute flex flex-col top-0 right-0 p-3"><button
                    class="transition ease-in duration-300 w-8 h-8 text-center p-1"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg></button></div><img class="" src="{{asset('files/slider_home01.3c0c889a.jpg')}}"
                  alt="Product title">
              </div>
              <div class="flex-auto text-center justify-evenly">
                <p class="pt-3 text-xs f-700">FLY NYLON CAP / BUTTERCREAM</p>
                <p class="antialiased text-xs">€ 68,00</p>
              </div>
            </div>
            <div class="">
              <div class="relative mb-3">
                <div class="absolute flex flex-col top-0 right-0 p-3"><button
                    class="transition ease-in duration-300 w-8 h-8 text-center p-1"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg></button></div><img class="" src="{{asset('files/slider_home01-3.7235d6ee.jpg')}}"
                  alt="Product title">
              </div>
              <div class="flex-auto text-center justify-evenly">
                <p class="pt-3 text-xs f-700">FLY NYLON CAP / BUTTERCREAM</p>
                <p class="antialiased text-xs">€ 68,00</p>
              </div>
            </div>
            <div class="">
              <div class="relative mb-3">
                <div class="absolute flex flex-col top-0 right-0 p-3"><button
                    class="transition ease-in duration-300 w-8 h-8 text-center p-1"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg></button></div><img class="" src="{{asset('files/slider_home01-2.83a17b30.jpg')}}"
                  alt="Product title">
              </div>
              <div class="flex-auto text-center justify-evenly">
                <p class="pt-3 text-xs f-700">FLY NYLON CAP / BUTTERCREAM</p>
                <p class="antialiased text-xs">€ 68,00</p>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
