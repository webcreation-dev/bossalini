{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.auth')

@section('content')
    <div class="lg:container lg:mx-auto lg:px-6 px-0 mx-4 pb-[12] h-full">
        <div>
            <p class="text-base lg:text-center text-left pb-4 font-bold"> FORGOT YOUR PASSWORD </p>
            <p class="text-[13px] lg:text-center text-left sm:w-[300px] md:w-full antialiased">Forgot your password? No problem. Just let us know your email address and we<br> will email  you a password reset link that will allow you to choose a new one. </p>
        </div>
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
            <div class="md:w-8/12 lg:w-[438px] w-full">
                <!---->

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <label class="text-[13px] antialised" for="">Email</label>
                    <div class="pt-2 mb-4"><input type="email"
                            class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            style="padding-top: 12px; padding-bottom: 12px;"
                            type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                    <div class="md:flex md:gap-5 space-y-4 md:space-y-0 items-center">
                        <button type="submit"
                    class="mb-3 md:mb-0 w-full md:w-auto antialised px-12 bg-black text-white text-[13px]"
                    style="padding-top: 13px; padding-bottom: 13px;"> SEND MAIL </button>

                </form>
            </div>
        </div>
    </div>
@endsection
