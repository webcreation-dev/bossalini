@extends('layouts.auth')

@section('content')
<div class="register_section"></div>

<div class="lg:container lg:mx-auto lg:px-6 px-0 mx-4 pb-12 h-full ">
    <div>
      <p class="text-base lg:text-center text-left font-bold"> CREATE ACCOUNT </p>
    </div>
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
      <div class="md:w-8/12 lg:w-[438px] w-full"><!---->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label class="text-[13px] antialised" for="">First name</label>
          <div class="pt-2 mb-4"><input type="text"
            type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name"
              class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              style="padding-top: 12px; padding-bottom: 12px;">
              <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

              <label class="text-[13px] antialised"
            for="">Last Name</label>
          <div class="pt-2 mb-4"><input type="text"
            type="text" name="last_name" :value="old('last_')" required autofocus autocomplete="last_"
              class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              style="padding-top: 12px; padding-bottom: 12px;">
              <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

              <label class="text-[13px] antialised"
            for="">Email</label>
          <div class="pt-2 mb-4"><input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
              class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              style="padding-top: 12px; padding-bottom: 12px;"></div>

              <label class="text-[13px] antialised"
            for="">Password</label>
          <div class="pt-2">
            <input type="password" id="password"
            name="password"
            required autocomplete="new-password"
              class="text-[24px] antialised form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              style="padding-top: 4px; padding-bottom: 4px;">
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


          <div class="mt-7 md:flex flex-col md:gap-5 space-y-4 md:space-y-0 items-center">

            <button
              type="submit"
              class="w-full md:w-auto antialised px-12 bg-black text-white text-[13px]"
              style="padding-top: 13px; padding-bottom: 13px;">CREATE</button>

              <a
              href="{{ route('login') }}" class="antialised text-[13px] underline">Login to an
              Existing Account</a></div>
        </form>
      </div>
    </div>
  </div>
@endsection


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
