@extends('layouts.master')

@section('content')

<section class="hidden lg:flex items-center justify-center">
    <div class="relative text-center"><img class="w-screen bg-cover md:block hidden"
        src="{{asset('files/slide_fine.b2a895d1.png')}}" alt="Product title">
      <div class="absolute top-1/2 w-full text-white text-sm">
        <p></p>
        <p class="fi-700">KEEP*IT*FLY</p>
        <p class="antialiased">ESSENTIALS COLLECTION</p>
        <p class="antialiased pt-6">SHOP NOW</p>
      </div>
    </div>
  </section>
  <section class="w-full lg:hidden pt-2.5">
    <div class="pt-40 flex items-center justify-center">
      <div class="mt-2 relative"><img class="w-full" src="{{asset('files/format.bad97007.png')}}"
          alt="Product title">
        <div class="absolute top-1/2 w-full text-white text-center">
          <p class="fi-700">KEEP*IT*FLY</p>
          <p class="antialiased">ESSENTIALS COLLECTION</p>
          <p class="antialiased pt-6">SHOP NOW</p>
        </div>
      </div>
    </div>
  </section>
  <section class="text-center justify-center items-center flex flex-col pt-11">
    <p class="text-[11px] text-center pb-4">COLLECTION</p>
    <p class="text-[13px] text-center pb-5 font-bold"> BOSSALINI KEEP*IT*FLY ESSENTIALS </p>
    <p class="text-[13px] max-w-[400px]"> Inspirée du style oversize caractéristique de Billie Eilish, notre
      collection est composée de sweats à capuche, de pantalons et de tee-shirts ton sur ton assortis,
      confectionnés en tissu Fleece en coton épais. Tous les modèles offrent une coupe confortable et sont ornés
      d'un motif avec la signature de l'artiste. </p>
  </section>
  <section class="pt-24 lg:space-y-11 md:space-y-[101px] space-y-11">
    <div class="justify-center">
      <div class="lg:flex lg:items-center lg:w-auto lg:justify-between">
        <div class="object-cover w-auto md:grid lg:grid-cols-5 xl:grid-cols-3 lg:gap-9 xl:gap-[70px]">
          <div class="xl:col-span-2 lg:col-span-3">
            <div class="grid xl:grid-cols-2 gap-2 flex-auto">
              <div><img class="w-full min-h-[326px]" src="{{asset('files/slider_home01.aea185d6.png')}}"
                  alt="Product title"></div>
              <div class="xl:block hidden"><img class="w-full min-h-[326px]"
                  src="{{asset('files/slider_home01-2.a3f63785.png')}}" alt="Product title"></div>
            </div>
          </div>
          <div
            class="xl:col-span-1 lg:col-span-2 flex flex-col justify-center items-center lg:pt-0 md:pt-[70px] pt-11">
            <div class="md:w-[368px]">
              <div class="flex-auto justify-evenly">
                <p class="text-center md:pt-0 text-[10px] f-700"> KEEP*IT*FLY ESSENTIALS </p>
              </div>
              <div class="pt-4 flex-auto justify-center">
                <p class="text-center font-bold md:pt-0 text-[13px] f-700"> BOSSALINI FLY HOODIE </p>
                <p class="pt-2.5 text-center antialiased font-medium text-xs"> CHF 112.00 </p>
              </div>
              <div class="text-center text-[13px] pt-7"> L'inscription « Billie Eilish » en silicone est
                imprimée sur un tissu en coton brossé et épais couleur champignon qui offre chaleur, douceur, et
                des sensations exceptionnelles. La poche kangourou sur le devant permet de garder les mains au
                chaud et offre un grand espace de rangement. </div>
              <div class="md:pt-[69px] pt-11">
                <div class="pt-4">
                  <div class="grid grid-cols-3 gap-[19px] flex-auto"><button
                      class="active text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>xs</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>s</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>M</p>
                    </button><button class="text-xs focus:bg-black text-center py-3.5 w-full border">
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
              <div class="pt-4"><a href="https://bossalini.funcodes.bj/overview"
                  class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                  ADD TO CART </a></div>
              <div class="pt-[19px]">
                <div class="py-[14px] px-[14px] bg-answer">
                  <p class="pb-[14px] text-xs text-white"><span class="font-bold">KEEP*IT*FLY ESSENTIALS / FLY
                      HOODIE - BLACK</span><span class="">was added to the cart!</span></p><a
                    href="https://bossalini.funcodes.bj/overview"
                    class="w-auto text-xs border border-1 hover:text-answer hover:bg-white f-700 flex text-white py-3.5 text-center justify-center items-center">
                    GO TO CART </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="justify-center">
      <div class="lg:flex lg:items-center lg:w-auto lg:justify-between">
        <div class="object-cover w-auto md:grid lg:grid-cols-5 xl:grid-cols-3 lg:gap-9 xl:gap-[70px]">
          <div class="xl:col-span-2 lg:col-span-3">
            <div class="grid xl:grid-cols-2 gap-2 flex-auto">
              <div><img class="w-full min-h-[326px]" src="{{asset('files/slider_home01.aea185d6.png')}}"
                  alt="Product title"></div>
              <div class="xl:block hidden"><img class="w-full min-h-[326px]"
                  src="{{asset('files/slider_home01-2.a3f63785.png')}}" alt="Product title"></div>
            </div>
          </div>
          <div
            class="xl:col-span-1 lg:col-span-2 flex flex-col justify-center items-center lg:pt-0 md:pt-[70px] pt-11">
            <div class="md:w-[368px]">
              <div class="flex-auto justify-evenly">
                <p class="text-center md:pt-0 text-[10px] f-700"> KEEP*IT*FLY ESSENTIALS </p>
              </div>
              <div class="pt-4 flex-auto justify-center">
                <p class="text-center font-bold md:pt-0 text-[13px] f-700"> BOSSALINI FLY HOODIE </p>
                <p class="pt-2.5 text-center antialiased font-medium text-xs"> CHF 112.00 </p>
              </div>
              <div class="text-center text-[13px] pt-7"> L'inscription « Billie Eilish » en silicone est
                imprimée sur un tissu en coton brossé et épais couleur champignon qui offre chaleur, douceur, et
                des sensations exceptionnelles. La poche kangourou sur le devant permet de garder les mains au
                chaud et offre un grand espace de rangement. </div>
              <div class="md:pt-[69px] pt-11">
                <div class="pt-4">
                  <div class="grid grid-cols-3 gap-[19px] flex-auto"><button
                      class="active text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>xs</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>s</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>M</p>
                    </button><button class="text-xs focus:bg-black text-center py-3.5 w-full border">
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
              <div class="pt-4"><a href="https://bossalini.funcodes.bj/overview"
                  class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                  ADD TO CART </a></div>
              <div class="pt-[19px]">
                <div class="py-[14px] px-[14px] bg-answer">
                  <p class="pb-[14px] text-xs text-white"><span class="font-bold">KEEP*IT*FLY ESSENTIALS / FLY
                      HOODIE - BLACK</span><span class="">was added to the cart!</span></p><a
                    href="https://bossalini.funcodes.bj/overview"
                    class="w-auto text-xs border border-1 hover:text-answer hover:bg-white f-700 flex text-white py-3.5 text-center justify-center items-center">
                    GO TO CART </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="justify-center">
      <div class="lg:flex lg:items-center lg:w-auto lg:justify-between">
        <div class="object-cover w-auto md:grid lg:grid-cols-5 xl:grid-cols-3 lg:gap-9 xl:gap-[70px]">
          <div class="xl:col-span-2 lg:col-span-3">
            <div class="grid xl:grid-cols-2 gap-2 flex-auto">
              <div><img class="w-full min-h-[326px]" src="{{asset('files/slider_home01.aea185d6.png')}}"
                  alt="Product title"></div>
              <div class="xl:block hidden"><img class="w-full min-h-[326px]"
                  src="{{asset('files/slider_home01-2.a3f63785.png')}}" alt="Product title"></div>
            </div>
          </div>
          <div
            class="xl:col-span-1 lg:col-span-2 flex flex-col justify-center items-center lg:pt-0 md:pt-[70px] pt-11">
            <div class="md:w-[368px]">
              <div class="flex-auto justify-evenly">
                <p class="text-center md:pt-0 text-[10px] f-700"> KEEP*IT*FLY ESSENTIALS </p>
              </div>
              <div class="pt-4 flex-auto justify-center">
                <p class="text-center font-bold md:pt-0 text-[13px] f-700"> BOSSALINI FLY HOODIE </p>
                <p class="pt-2.5 text-center antialiased font-medium text-xs"> CHF 112.00 </p>
              </div>
              <div class="text-center text-[13px] pt-7"> L'inscription « Billie Eilish » en silicone est
                imprimée sur un tissu en coton brossé et épais couleur champignon qui offre chaleur, douceur, et
                des sensations exceptionnelles. La poche kangourou sur le devant permet de garder les mains au
                chaud et offre un grand espace de rangement. </div>
              <div class="md:pt-[69px] pt-11">
                <div class="pt-4">
                  <div class="grid grid-cols-3 gap-[19px] flex-auto"><button
                      class="active text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>xs</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>s</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>M</p>
                    </button><button class="text-xs focus:bg-black text-center py-3.5 w-full border">
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
              <div class="pt-4"><a href="https://bossalini.funcodes.bj/overview"
                  class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                  ADD TO CART </a></div>
              <div class="pt-[19px]">
                <div class="py-[14px] px-[14px] bg-answer">
                  <p class="pb-[14px] text-xs text-white"><span class="font-bold">KEEP*IT*FLY ESSENTIALS / FLY
                      HOODIE - BLACK</span><span class="">was added to the cart!</span></p><a
                    href="https://bossalini.funcodes.bj/overview"
                    class="w-auto text-xs border border-1 hover:text-answer hover:bg-white f-700 flex text-white py-3.5 text-center justify-center items-center">
                    GO TO CART </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="justify-center">
      <div class="lg:flex lg:items-center lg:w-auto lg:justify-between">
        <div class="object-cover w-auto md:grid lg:grid-cols-5 xl:grid-cols-3 lg:gap-9 xl:gap-[70px]">
          <div class="xl:col-span-2 lg:col-span-3">
            <div class="grid xl:grid-cols-2 gap-2 flex-auto">
              <div><img class="w-full min-h-[326px]" src="{{asset('files/slider_home01.aea185d6.png')}}"
                  alt="Product title"></div>
              <div class="xl:block hidden"><img class="w-full min-h-[326px]"
                  src="{{asset('files/slider_home01-2.a3f63785.png')}}" alt="Product title"></div>
            </div>
          </div>
          <div
            class="xl:col-span-1 lg:col-span-2 flex flex-col justify-center items-center lg:pt-0 md:pt-[70px] pt-11">
            <div class="md:w-[368px]">
              <div class="flex-auto justify-evenly">
                <p class="text-center md:pt-0 text-[10px] f-700"> KEEP*IT*FLY ESSENTIALS </p>
              </div>
              <div class="pt-4 flex-auto justify-center">
                <p class="text-center font-bold md:pt-0 text-[13px] f-700"> BOSSALINI FLY HOODIE </p>
                <p class="pt-2.5 text-center antialiased font-medium text-xs"> CHF 112.00 </p>
              </div>
              <div class="text-center text-[13px] pt-7"> L'inscription « Billie Eilish » en silicone est
                imprimée sur un tissu en coton brossé et épais couleur champignon qui offre chaleur, douceur, et
                des sensations exceptionnelles. La poche kangourou sur le devant permet de garder les mains au
                chaud et offre un grand espace de rangement. </div>
              <div class="md:pt-[69px] pt-11">
                <div class="pt-4">
                  <div class="grid grid-cols-3 gap-[19px] flex-auto"><button
                      class="active text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>xs</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>s</p>
                    </button><button
                      class="text-xs focus:text-white focus:bg-black text-center py-3.5 w-full border">
                      <p>M</p>
                    </button><button class="text-xs focus:bg-black text-center py-3.5 w-full border">
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
              <div class="pt-4"><a href="https://bossalini.funcodes.bj/overview"
                  class="w-auto text-xs border border-1 hover:bg-black f-700 flex hover:text-white py-3.5 text-center justify-center items-center">
                  ADD TO CART </a></div>
              <div class="pt-[19px]">
                <div class="py-[14px] px-[14px] bg-answer">
                  <p class="pb-[14px] text-xs text-white"><span class="font-bold">KEEP*IT*FLY ESSENTIALS / FLY
                      HOODIE - BLACK</span><span class="">was added to the cart!</span></p><a
                    href="https://bossalini.funcodes.bj/overview"
                    class="w-auto text-xs border border-1 hover:text-answer hover:bg-white f-700 flex text-white py-3.5 text-center justify-center items-center">
                    GO TO CART </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="lg:pt-20 pt-14">
    <div class="justify-center text-center">
      <p class="antialiased lg:text-sm text-xs">SHOP INSTAGRAM</p>
      <p class="lg:mx-5.5 mt-4 pb-5 md:text-sm text-xs font-bold"> TAG YOUR POST WITH @BOSSALINIWORLD AND
        #KEEPITFLY TO BE FEATURED </p>
    </div>
    <section class="carousel" dir="ltr" aria-label="Gallery" tabindex="0">
      <div class="carousel__viewport">
        <ol class="carousel__track"
          style="transform: translateX(0px); transition: all 0ms ease 0s; width: 100%;">
          <li class="carousel__slide carousel__slide--visible carousel__slide--active" aria-hidden="false"
            style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home1.0d99ea0b.jpg')}}"></div>
          </li>
          <li class="carousel__slide carousel__slide--visible carousel__slide--next" aria-hidden="false"
            style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home02.d1ca89ee.png')}}"></div>
          </li>
          <li class="carousel__slide carousel__slide--visible" aria-hidden="false" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home03.8407ddd7.png')}}"></div>
          </li>
          <li class="carousel__slide carousel__slide--visible" aria-hidden="false" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home05.cf86fc3b.png')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home1.0d99ea0b.jpg')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home02.d1ca89ee.png')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home03.8407ddd7.png')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home05.cf86fc3b.png')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home1.0d99ea0b.jpg')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home02.d1ca89ee.png')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home03.8407ddd7.png')}}"></div>
          </li>
          <li class="carousel__slide" aria-hidden="true" style="width: 319.25px;">
            <div
              v-model="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
              class="carousel__item"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
                src="{{asset('files/IGpost_home05.cf86fc3b.png')}}"></div>
          </li>
        </ol>
      </div>
      <div class="carousel__liveregion carousel__sr-only" aria-live="polite" aria-atomic="true">Item 1 of 12
      </div>
    </section>
    <div class="pt-7 flex justify-between items-center"><button class="span"><svg width="43" height="43"
          fill="none" xmlns="http://www.w3.org/2000/svg">
          <path stroke="#000" d="M42.5 42.5H.5V.5h42z"></path>
          <path d="M25 27.538 23.583 29l-7.004-7.218 7.004-7.218L25 16.026l-5.583 5.756L25 27.538Z" fill="#000">
          </path>
        </svg></button>
      <div><button class="text-xs f-700 bg-black py-4 px-9 text-white"> VIEW MORE </button></div><button
        class="span"><svg width="43" height="43" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path stroke="#000" d="M.5.5h42v42H.5z"></path>
          <path d="M18 15.462 19.417 14l7.004 7.218-7.004 7.218L18 26.974l5.583-5.756L18 15.462Z" fill="#000">
          </path>
        </svg></button>
    </div>
    <div class="hidden">
      <div class="lg:flex hidden items-center justify-center space-x-3">
        <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
            src="{{asset('files/IGpost_home1.0d99ea0b.jpg')}}" alt="Product title"></div>
        <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
            src="{{asset('files/IGpost_home02.d1ca89ee.png')}}" alt="Product title"></div>
        <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
            src="{{asset('files/IGpost_home03.8407ddd7.png')}}" alt="Product title"></div>
        <div class="product"><img class="object-cover md:w-screen lg:h-[23vw] md:h-[48.5vw] h-[44vw]"
            src="{{asset('files/IGpost_home05.cf86fc3b.png')}}" alt="Product title"></div>
      </div>
      <div class="lg:hidden flex items-center justify-center space-x-4">
        <div><img class="" src="{{asset('files/IGpost_home02.d1ca89ee.png')}}" alt="Product title"></div>
        <div><img class="" src="{{asset('files/IGpost_home03.8407ddd7.png')}}" alt="Product title"></div>
      </div>
      <div class="pt-7 flex justify-between items-center"><button class="span"><svg width="43" height="43"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path stroke="#000" d="M42.5 42.5H.5V.5h42z"></path>
            <path d="M25 27.538 23.583 29l-7.004-7.218 7.004-7.218L25 16.026l-5.583 5.756L25 27.538Z"
              fill="#000"></path>
          </svg></button>
        <div><button class="text-xs f-700 bg-black py-4 px-9 text-white"> VIEW MORE </button></div><button
          class="span"><svg width="43" height="43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path stroke="#000" d="M.5.5h42v42H.5z"></path>
            <path d="M18 15.462 19.417 14l7.004 7.218-7.004 7.218L18 26.974l5.583-5.756L18 15.462Z" fill="#000">
            </path>
          </svg></button>
      </div>
    </div>
  </section>

@endsection
