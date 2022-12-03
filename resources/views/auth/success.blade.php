@extends('layouts.auth')

    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
              <div class="px-4">
                <!-- Success Check-->
                <div class="success-check"><i class="lni lni-emoji-smile"></i></div>
                <!-- Reset Password Message-->
                <p class="text-white mt-4 mb-4">Email pemulihan kata sandi berhasil dikirim. Silakan periksa kotak masuk Anda!</p>
                <!-- Go Back Button--><a class="btn btn-warning" href="{{ route('login') }}">Go Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>




