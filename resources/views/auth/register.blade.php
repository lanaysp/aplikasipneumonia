{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                                name="password_confirmation" required />

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
                <img class="big-logo" src="{{ url('assets/img/icons/lungs.png') }}" style="max-width: 10em;" alt="">
              <!-- Register Form-->
              <div class="register-form mt-5 px-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-group text-start mb-4"><span>Nama</span>
                    <label for="username"><i class="lni lni-user"></i></label>
                    <input class="form-control" id="username" type="text" placeholder="Designing World" name="name" :value="old('name')" required autofocus>
                  </div>
                  <div class="form-group text-start mb-4"><span>Email</span>
                    <label for="email"><i class="lni lni-envelope"></i></label>
                    <input class="form-control" id="email" type="email" placeholder="help@example.com" name="email" :value="old('email')" required>
                  </div>
                  <div class="form-group text-start mb-4"><span>No Telepon</span>
                    <label for="telepon	"><i class="lni lni-envelope"></i></label>
                    <input class="form-control" id="telepon" type="text" placeholder="082662727xxx" name="telepon" :value="old('telepon')" required>
                  </div>
                  <div class="form-group text-start mb-4"><span>Password</span>
                    <label for="password"><i class="lni lni-lock"></i></label>
                    <input class="input-psswd form-control" id="registerPassword" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                  </div>
                  <div class="form-group text-start mb-4"><span>Konfirmasi Password</span>
                    <label for="password"><i class="lni lni-lock"></i></label>
                    <input class="input-psswd form-control" id="registerPassword" type="password" placeholder="Password" name="password_confirmation" required>
                  </div>
                  <button class="btn btn-warning btn-lg w-100" type="submit">Sign Up</button>
                </form>
              </div>
              <!-- Login Meta-->
              <div class="login-meta-data">
                <p class="mt-3 mb-0">Sudah punya akun?<a class="ms-1" href="{{ route('login') }}">Masuk</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
