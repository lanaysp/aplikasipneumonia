{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


@extends('layouts.auth')

     <!-- Login Wrapper Area-->
     <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
        <!-- Background Shape-->
        <div class="background-shape"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
                <img class="big-logo" src="{{ url('assets/img/core-img/logo-white.png') }}" alt="">
              <!-- Register Form-->
              <div class="register-form mt-5 px-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group text-start mb-4"><span>Username</span>
                    <label for="username"><i class="lni lni-user"></i></label>
                    <input class="form-control" id="username" type="text" placeholder="info@example.com" name="email" :value="old('email')" required autofocusname="email" :value="old('email')" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="form-group text-start mb-4"><span>Password</span>
                    <label for="password"><i class="lni lni-lock"></i></label>
                    <input class="form-control" id="password" type="password" placeholder="Password" name="password"
                    required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
                  <button class="btn btn-warning btn-lg w-100" type="submit">Log In</button>
                </form>
              </div>
              <!-- Login Meta-->
              <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1"  href="{{ route('password.request') }}">Lupa Password?</a>
                <p class="mb-0">Belum punya akun?<a class="ms-1"  href="{{ route('register') }}">Registrasi sekarang</a></p>
              </div>
              <!-- View As Guest-->
              <div class="view-as-guest mt-3"><a class="btn" href="{{ route('home') }}">Masuk Sebagai Tamu</a></div>
            </div>
          </div>
        </div>
    </div>





