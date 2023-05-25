@extends('layouts.master')

@section('content')
          <section class="container max-w-screen-2xl lg:mt-40 mt-56">
            <div class="flex-none lg:flex items-center justify-center lg:space-x-5 lg:space-y-0 space-y-2">
              <div class="flex w-full grid md:grid-cols-2 xl:grid-cols-3 grid-cols-1 md:gap-x-4 gap-y-[26px]">
                <div class="">
                  <div class="relative mb-3">
                    <div class="absolute flex flex-col top-0 right-0 p-3">
                      <button class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                      </button>
                    </div>
                    <img class="object-cover lg:w-full lg:h-[640px] md:w-full md:h-[716px] min-w-[343px] min-h-[517px]" src=" {{asset('files/slider_home01.6ec5af8b.jpg')}}" alt="Product title">
                  </div>
                  <div class="flex-auto justify-evenly">
                    <p class="text-xs font-bold">KEEP*IT*FLY ESSENTIALS COLLECTION</p>
                    <p class="antialiased text-xs mt-0.5">VIEW NOW</p>
                  </div>
                </div>
                <div class="">
                  <div class="relative mb-3">
                    <div class="absolute flex flex-col top-0 right-0 p-3">
                      <button class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                      </button>
                    </div>
                    <img class="object-cover lg:w-full lg:h-[640px] md:w-full md:h-[716px] min-w-[343px] min-h-[517px]" src="{{asset('files/slider_home01-2.6afd85d3.jpg')}}" alt="Product title">
                  </div>
                  <div class="flex-auto justify-evenly">
                    <p class="text-xs font-bold">KEEP*IT*FLY ESSENTIALS COLLECTION</p>
                    <p class="antialiased text-xs mt-0.5">VIEW NOW</p>
                  </div>
                </div>
                <div class="">
                  <div class="relative mb-3">
                    <div class="absolute flex flex-col top-0 right-0 p-3">
                      <button class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                      </button>
                    </div>
                    <img class="object-cover lg:w-full lg:h-[640px] md:w-full md:h-[716px] min-w-[343px] min-h-[517px]" src="{{asset('files/slider_home01-1.7028721b.jpg')}}" alt="Product title">
                  </div>
                  <div class="flex-auto justify-evenly">
                    <p class="text-xs font-bold">KEEP*IT*FLY ESSENTIALS COLLECTION</p>
                    <p class="antialiased text-xs mt-0.5">VIEW NOW</p>
                  </div>
                </div>
                <div class="">
                  <div class="relative mb-3">
                    <div class="absolute flex flex-col top-0 right-0 p-3">
                      <button class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                      </button>
                    </div>
                    <div class="">
                      <img class="object-cover lg:w-full lg:h-[640px] md:w-full md:h-[716px] min-w-[343px] min-h-[517px]" src="{{asset('files/slider_home01-3.7968701f.jpg')}}" alt="Product title">
                    </div>
                  </div>
                  <div class="flex-auto justify-evenly">
                    <p class="text-xs font-bold">KEEP*IT*FLY ESSENTIALS COLLECTION</p>
                    <p class="antialiased text-xs mt-0.5">VIEW NOW</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-3">
              <p style="padding-top:82px;" class="text-sm font-bold text-center f-700 pb-5">YOU MIGHT ALSO LIKE</p>
              <div class="flex items-center justify-center space-x-5">
                <div class="grid md:grid-cols-4 grid-cols-2 gap-3 flex-auto">
                  <div class="">
                    <div class="relative mb-3">
                      <div class="absolute flex flex-col top-0 right-0 p-3">
                        <button class="transition ease-in duration-300 w-8 h-8 text-center p-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                          </svg>
                        </button>
                      </div>
                      <img class="transition ease-in duration-300 hover:bg-gray-900" src="{{asset('files/slider_home01-1.70ad19e6.jpg')}}" alt="Product title">
                    </div>
                    <div class="flex-auto text-center justify-evenly">
                      <p class="pt-3 text-xs text f-700"> FLY NYLON CAP / BUTTERCREAM </p>
                      <p class="antialiased text-xs"> € 68,00 </p>
                    </div>
                  </div>
                  <div class="">
                    <div class="relative mb-3">
                      <div class="absolute flex flex-col top-0 right-0 p-3">
                        <button class="transition ease-in duration-300 w-8 h-8 text-center p-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                          </svg>
                        </button>
                      </div>
                      <img class="" src="{{asset('files/slider_home01.3c0c889a.jpg')}}" alt="Product title">
                    </div>
                    <div class="flex-auto text-center justify-evenly">
                      <p class="pt-3 text-xs f-700"> FLY NYLON CAP / BUTTERCREAM </p>
                      <p class="antialiased text-xs"> € 68,00 </p>
                    </div>
                  </div>
                  <div class="">
                    <div class="relative mb-3">
                      <div class="absolute flex flex-col top-0 right-0 p-3">
                        <button class="transition ease-in duration-300 w-8 h-8 text-center p-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                          </svg>
                        </button>
                      </div>
                      <img class="" src="{{asset('files/slider_home01-3.7235d6ee.jpg')}}" alt="Product title">
                    </div>
                    <div class="flex-auto text-center justify-evenly">
                      <p class="pt-3 text-xs f-700"> FLY NYLON CAP / BUTTERCREAM </p>
                      <p class="antialiased text-xs"> € 68,00 </p>
                    </div>
                  </div>
                  <div class="">
                    <div class="relative mb-3">
                      <div class="absolute flex flex-col top-0 right-0 p-3">
                        <button class="transition ease-in duration-300 w-8 h-8 text-center p-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                          </svg>
                        </button>
                      </div>
                      <img class="" src="{{asset('files/slider_home01-2.83a17b30.jpg')}}" alt="Product title">
                    </div>
                    <div class="flex-auto text-center justify-evenly">
                      <p class="pt-3 text-xs f-700"> FLY NYLON CAP / BUTTERCREAM </p>
                      <p class="antialiased text-xs"> € 68,00 </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <section class="lg:pt-20 pt-14 section7">
                <div class="justify-center text-center">
                    <p class="antialiased lg:text-sm text-xs">SHOP INSTAGRAM</p>
                    <p class="lg:mx-5.5 mt-4 pb-5 md:text-sm text-xs font-bold"> TAG YOUR POST WITH
                        @BOSSALINIWORLD AND
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
                        <div class="product"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home1.0d99ea0b.jpg') }}" alt="Product title">
                        </div>
                        <div class="product"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}" alt="Product title">
                        </div>
                        <div class="product"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home03.8407ddd7.png') }}" alt="Product title">
                        </div>
                        <div class="product"><img
                                class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                                src="{{ asset('files/IGpost_home05.cf86fc3b.png') }}" alt="Product title">
                        </div>
                    </div>
                    <div class="lg:hidden flex items-center justify-center space-x-4">
                        <div><img class="" src="{{ asset('files/IGpost_home02.d1ca89ee.png') }}"
                                alt="Product title"></div>
                        <div><img class="" src="{{ asset('files/IGpost_home03.8407ddd7.png') }}"
                                alt="Product title"></div>
                    </div>
                    <div class="pt-7 flex justify-between items-center"><button class="span"><svg
                                width="43" height="43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#000" d="M42.5 42.5H.5V.5h42z"></path>
                                <path
                                    d="M25 27.538 23.583 29l-7.004-7.218 7.004-7.218L25 16.026l-5.583 5.756L25 27.538Z"
                                    fill="#000"></path>
                            </svg></button>
                        <div><button class="text-xs f-700 bg-black py-4 px-9 text-white"> VIEW MORE </button>
                        </div><button class="span"><svg width="43" height="43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#000" d="M.5.5h42v42H.5z"></path>
                                <path
                                    d="M18 15.462 19.417 14l7.004 7.218-7.004 7.218L18 26.974l5.583-5.756L18 15.462Z"
                                    fill="#000">
                                </path>
                            </svg></button>
                    </div>
                </div>
            </section>

          </section>

@endsection
