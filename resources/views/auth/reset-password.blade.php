{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.auth')

@section('content')
    <div class="lg:container lg:mx-auto lg:px-6 px-0 mx-4 pb-[12] h-full">
        <div>
            <p class="text-base lg:text-center text-left pb-4 font-bold"> RESET PASSWORD </p>
        </div>

        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
            <div class="md:w-8/12 lg:w-[438px] w-full">
                <!---->

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

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

                        <label class="text-[13px] antialised"
                        for="">Confirm Password</label>
                    <div class="pt-2">
                        <input type="password"
                            class="text-[24px] antialised form-control block w-full px-4 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-borderInput transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            style="padding-top: 4px; padding-bottom: 4px;" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                            >
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

<br>
                            <div class="md:flex md:gap-5 space-y-4 md:space-y-0 items-center">
                                <button type="submit"
                            class="mb-3 md:mb-0 w-full md:w-auto antialised px-12 bg-black text-white text-[13px]"
                            style="padding-top: 13px; padding-bottom: 13px;"> RESET PASSWORD </button>

                </form>
            </div>
        </div>
    </div>
@endsection


