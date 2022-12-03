{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.auth')
@include('layouts.navbar')

<div class="container">
    <!-- Profile Wrapper-->
    <div class="profile-wrapper-area py-3">
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
      <!-- User Information-->
      <div class="card user-info-card">
        <div class="card-body p-4 d-flex align-items-center">
          <div class="user-profile me-3"><img src="{{ Auth::user()->gravatar() }}" alt="">
            <div class="change-user-thumb">
                <form action=""></form>
                <input class="form-control-file" type="file">
                <button><i class="lni lni-pencil"></i></button>
              </form>
            </div>
          </div>
          <div class="user-info">
            <p class="mb-0 text-dark">{{ auth()->user()->email }}</p>
            <h5 class="mb-0">{{ auth()->user()->name }}</h5>
          </div>
        </div>
      </div>
      <!-- User Meta Data-->
      <div class="card user-data-card">
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-user"></i><span>Nama</span></div>
              <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            </div>
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-envelope"></i><span>Email Address</span></div>
              <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
            </div>
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-phone"></i><span>No Telepon</span></div>
              <input class="form-control" type="text" id="telepon" name="telepon" value="{{ old('telepon', $user->telepon) }}" required autocomplete="telepon">
            </div>
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-map"></i><span>Alamat</span></div>
              {{-- <input class="form-control" type="text" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat) }}" required autocomplete="alamat"> --}}
              <textarea name="alamt" class="form-control" id="alamat" cols="10" rows="3" value="{{ old('alamat', $user->alamat) }}">{{ $user->alamat }}</textarea>
            </div>
            <button class="btn btn-success w-100" type="submit">Save All Changes</button>
          </form>
        </div>
      </div>
    </div>
</div>
