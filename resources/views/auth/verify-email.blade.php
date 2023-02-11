{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}


@extends('layouts.auth')
@section('content')
    <div class="lg:container lg:mx-auto lg:px-6 px-0 mx-4 pb-[12] h-full">

        <div>
            <p class="text-base lg:text-center text-left pb-4 font-bold"> VERIFICATION EMAIL </p>

            <p class="text-[13px] lg:text-center text-left sm:w-[300px] md:w-full antialiased">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? <br>
                If you didn\'t receive the email, we will gladly send you another..</p>

            @if (session('status') == 'verification-link-sent')
                <p class="text-[13px] lg:text-center text-left sm:w-[300px] md:w-full antialiased">
                A new verification link has been sent to the email <br> address you provided during registration.</p>
            @endif
            </div>

        <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800 md:pt-10 pt-7">
            <div class="md:w-8/12 lg:w-[438px] w-full">
                <!---->

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div class="md:flex md:gap-5 space-y-4 md:space-y-0 items-center">
                        <button type="submit"
                    class="mb-3 md:mb-0 w-full md:w-auto antialised px-12 bg-black text-white text-[13px]"
                    style="padding-top: 13px; padding-bottom: 13px;"> RESEND EMAIL </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="md:flex md:gap-5 space-y-4 md:space-y-0 items-center">
                        <button type="submit"
                    class="mb-3 md:mb-0 w-full md:w-auto antialised px-12 bg-black text-white text-[13px]"
                    style="padding-top: 13px; padding-bottom: 13px;"> LOGOUT </button>
                </form>
            </div>
        </div>
    </div>
@endsection

