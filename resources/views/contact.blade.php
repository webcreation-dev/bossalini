@extends('layouts.master')

@section('content')

<section style="margin-top: 200px;">
    <div class="mx-9 lg:px-6 px-0 pb-12 h-full">
      <div>
        <p class="text-base text-center pb-4 font-bold">CONTACT US</p>
        <p class="text-[13px] text-center sm:w-[300px] md:w-full antialiased">Send us a message</p>
      </div>
      <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
        <div class="lg:w-[438px] w-full"><!---->
          <form><label class="text-[13px] antialised" for="">Name</label>
            <div class="pt-2 mb-4"><input type="text"
                class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;"></div><label class="text-[13px] antialised"
              for="">Email</label>
            <div class="pt-2 mb-4"><input type="text"
                class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;"></div><label class="text-[13px] antialised"
              for="">Message</label>
            <div class="pt-2 mb-4"><textarea type="textarea" rows="7"
                class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                style="padding-top: 12px; padding-bottom: 12px;">

          </textarea></div>
            <div class="mt-5 md:flex md:gap-5 space-y-4 md:space-y-0 items-center"><button
                class="w-full antialised px-12 lg:border lg:border-black lg:text-black lg:bg-white bg-black text-white hover:bg-black hover:text-white text-[13px]"
                style="padding-top: 13px; padding-bottom: 13px;">SEND</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
