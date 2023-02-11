@extends('layouts.auth')

@section('content')
    <div class="lg:container lg:mx-auto lg:px-6 px-0 mx-4 pb-[12] h-full">
        <div>s
            <p class="text-base lg:text-center text-left pb-4 font-bold"> LOGIN TO YOUR ACCOUNT </p>
            <p class="text-[13px] lg:text-center text-left sm:w-[300px] md:w-full antialiased"> By logging, you agree
                to Bossalini’s Privacy Policy and Terms &amp; Conditions. </p>
        </div>
        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
            <div class="md:w-8/12 lg:w-[438px] w-full">
                <!---->

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label class="text-[13px] antialised" for="">Email</label>
                    <div class="pt-2 mb-4"><input type="email"
                            class="antialised text-[13px] form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            style="padding-top: 12px; padding-bottom: 12px;"
                            type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                            <label class="text-[13px] antialised"
                        for="">Password</label>
                    <div class="pt-2">
                        <input type="password"
                            class="text-[24px] antialised form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            style="padding-top: 4px; padding-bottom: 4px;" id="password" type="password" name="password" required
                            autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                            <div class="mt-7 mb-4 text-[13px]"><a href="{{ route('password.request') }}" class=""
                            style="text-decoration: underline;">Forgot your password?</a></div>

                            <div class="md:flex md:gap-5 space-y-4 md:space-y-0 items-center">
                                <button type="submit"
                            class="mb-3 md:mb-0 w-full md:w-auto antialised px-12 bg-black text-white text-[13px]"
                            style="padding-top: 13px; padding-bottom: 13px;"> SIGN IN </button>

                            <a
                            href="{{ route('register') }}" class="antialised text-[13px] underline">Register a
                            New Account </a></div>
                </form>
            </div>
        </div>
    </div>
@endsection




{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
