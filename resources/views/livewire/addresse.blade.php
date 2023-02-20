@if($currentPage == ADDRESS)
<section>

    <div class="flex flex-col items-center">
        <p class="text-center font-bold text-base pt-11"> YOUR ADDRESS </p>
        <p class="text-[13px] text-center sm:w-[300px] md:w-full antialiased" style="text-decoration: underline;">
            <a href="{{route('account')}}" > Return to Account details</a>
        </p>


    </div>
    <div class="flex flex-col items-center">

        {{-- <button href="#"
          class="mt-8 text-center px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> ADD NEW ADDRESS
        </button> --}}

        <p class="text-center font-bold text-base pt-11"> DEFAULT </p>

        @if ($default_address->count() == 0)
            <p class="text-center text-[13px] mt-3">
                John Leon <br>
                19 Route de Florissant <br>
                1206 Geneva <br>
                Switzerland
            </p>
        @else
            <p class="text-center text-[13px] mt-3">
                @foreach ( $default_address as $address)
                    {{ $address->first_name }} {{ $address->last_name }} <br>
                    {{ $address->apartment }} <br>
                    {{ $address->zip_code }} {{ $address->city }} <br>
                    {{ $address->country }}
                @endforeach
            </p>
        @endif

        <button wire:click="getFormAddress"
          class="mt-8 text-center px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> EDIT ADDRESS
        </button>


        {{-- <div class="items-center gap-4 flex flex-col md:pt-9 pt-7 w-full grid grid-cols-2">
            <div class="flex items-center" style="justify-content: end;">
                <button href="#"
                class="mt-8 text-center px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> EDIT
              </button>
            </div>

            <div class="flex items-center" style="justify-content: start;">
                <button href="#"
                class="mt-8 text-center px-8 w-auto antialised border py-3 bg-white text-black text-[13px]"> DELETE
              </button>
            </div>
        </div> --}}

      </div>



</section>
@endif

@if($currentPage != ADDRESS)
<section style="margin-top: 50px;">
    <div class="mx-9 lg:px-6 px-0 pb-12 h-full">
      <div>
        <p class="text-base text-center pb-4 font-bold">EDIT ADDRESS</p>
      </div>
      <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
        <div class="lg:w-[438px] w-full">
          <form role="form" wire:submit.prevent="createAddress()">
            @csrf

            <label class="text-[13px] antialised" for="">First Name</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.first_name" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">


            </div>

            <label class="text-[13px] antialised" for="">Last Name</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.last_name" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>

            <label class="text-[13px] antialised" for="">Email</label>
            <div class="pt-2 mb-4">
                <input type="email" wire:model="address.company"
                class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>

            <label class="text-[13px] antialised" for="">Apartement, suite, etc.</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.apartment" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>

            <label class="text-[13px] antialised" for="">City</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.city" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>

            <label class="text-[13px] antialised" for="">Country</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.country" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>

            <label class="text-[13px] antialised" for="">Postal/Zip Code</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.zip_code" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>

            <label class="text-[13px] antialised" for="">Phone</label>
            <div class="pt-2 mb-4">
                <input type="text" wire:model="address.phone" class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">
            </div>


            {{-- <div class="md:flex md:gap-5 space-y-4 md:space-y-0 items-center" style="justify-content: center;">
                <input type="checkbox"> Set as default address

            </div> --}}
            <div class=" md:flex md:gap-5 space-y-4 md:space-y-0 items-center" style="justify-content: center;">
                <button type="submit"
                    class="mt-8 text-center px-8 w-auto antialised py-3 bg-black text-white text-[13px]"> UPDATE ADDRESS
                </button>
            </div>
          </form>
          <div class="flex pt-6 flex-col items-center" style="justify-content: center;">
            <p class="text-[16px] text-center sm:w-[300px] md:w-full antialiased" style="text-decoration: underline;">
                <button wire:click="getAddress" > Cancel</button>
            </p>
        </div>
        </div>
      </div>
    </div>
</section>
@endif
