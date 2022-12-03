@extends('layouts.auth')
     <!-- Login Wrapper Area-->
     <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
        <!-- Background Shape-->
        <div class="background-shape"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo" src="{{ url('assets/img/core-img/logo-white.png') }}" alt="">
              <!-- Register Form-->
              <div class="register-form mt-5 px-4">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                  <input type="hidden" name="token" value="{{ $request->route('token') }}">
                  <div class="form-group text-start mb-4"><span>Email</span>
                    <label for="email"><i class="lni lni-envelope mt-1"></i></label>
                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus>
                  </div>
                  <div class="form-group text-start mb-4"><span>Password</span>
                    <label for="password"><i class="lni lni-lock mt-1"></i></label>
                    <input class="input-psswd form-control" id="registerPassword" type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group text-start mb-4"><span>Konfirmasi Password</span>
                    <label for="password"><i class="lni lni-lock mt-1"></i></label>
                    <input class="input-psswd form-control" id="registerPassword" type="password" placeholder="Password"name="password_confirmation" required>
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
