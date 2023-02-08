

<section class="md:pt-0 pt-[76px]">

    <div class="justify-center text-center">
      <p class="mt-4 mb-[22px] text-sm font-bold"> KEEP*IT*FLY - ALL </p>
    </div>

    <div class="flex-none lg:flex items-center justify-center lg:space-x-5 lg:space-y-0 space-y-2">
      <div class="flex w-full grid md:grid-cols-2 lg:grid-cols-3 grid-cols-2 gap-x-4 lg:gap-x-[20px] gap-y-10">

        @foreach ($products as $product)


        <div class="">
          <div class="relative mb-3">
            <div class="absolute flex flex-col top-0 right-0 p-3">

                <button wire:click="wishlist({{ $product->id }})"
                class="transition ease-in duration-300 hover:text-purple-500 w-8 h-8 text-center p-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="{{App\Models\Product::getStatusWishlist($product->id)  }}" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                  </path>
                </svg>

            </button>
            </div>
            <a href=" {{ route('single_product', ['product_id' => $product->id]) }}">
                <img class="w-full" src="{{ asset('files/' . App\Models\Product::getFirstImageAttribute($product->id) . '') }}" alt="Product title">
            </a>
          </div>
          <div class="flex-auto justify-evenly">
            <p class="text-xs font-bold">{{ $product->name }}</p>
            <p class="antialiased text-xs mt-0.5">€ {{ $product->original_price }}</p>
          </div>
        </div>

        @endforeach

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

