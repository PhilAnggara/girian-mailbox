@extends('layouts.auth')
@section('title', 'Kecamatan Girian Mailbox - Masuk')

@section('content')
<div class="row flex-grow">
  <div class="col-lg-6 d-flex align-items-center justify-content-center">
    <div class="auth-form-transparent text-left p-3">
      <div class="brand-logo">
        {{-- <img src="{{ url('frontend/images/logo.png') }}" alt="logo"> --}}
        <h4 class="text-dark fw-bold">Girian-<span class="text-secondary">MailBox</span></h4>
      </div>
      <h4>Buat akun</h4>
      <h6 class="fw-light">Isi form di bawaah ini untuk membuat akun</h6>
      <form class="pt-3" action="" method="POST">
        @csrf
        <div class="form-group">
          <label>Nama</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="ti-user text-primary"></i>
              </span>
            </div>
            <input id="name" type="text" class="form-control form-control-lg border-left-0" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <label>Email</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="ti-email text-primary"></i>
              </span>
            </div>
            <input id="email" type="email" class="form-control form-control-lg border-left-0" placeholder="Email" name="email" value="{{ old('email') }}" required>
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="ti-lock text-primary"></i>
              </span>
            </div>
            <input id="password" type="password" class="form-control form-control-lg border-left-0" placeholder="Password" name="password" required>                        
          </div>
        </div>
        <div class="form-group">
          <label>Konfirmasi Password</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="ti-lock text-primary"></i>
              </span>
            </div>
            <input id="password-confirm" type="password" class="form-control form-control-lg border-left-0" placeholder="Konfirmasi Password" name="password_confirmation" required>                        
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Daftar</button>
        </div>
        <div class="text-center mt-4 fw-light">
          Sudah punya akun? <a href="{{ route('login') }}" class="text-primary">Masuk</a>
        </div>
      </form>
    </div>
  </div>
  <div class="col-lg-6 register-half-bg d-flex flex-row">
    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021  All rights reserved.</p>
  </div>
</div>
@endsection