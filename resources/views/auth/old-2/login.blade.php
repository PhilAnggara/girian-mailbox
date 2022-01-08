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
      <h4>Selamat datang kembali!</h4>
      <h6 class="fw-light">Senang melihatmu lagi!</h6>
      <form class="pt-3" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="ti-email text-primary"></i>
              </span>
            </div>
            <input type="email" class="form-control form-control-lg border-left-0" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="ti-lock text-primary"></i>
              </span>
            </div>
            <input type="password" class="form-control form-control-lg border-left-0" id="password" name="password" required placeholder="Password">                        
          </div>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
          <div class="form-check">
            <label class="form-check-label text-muted">
              <input type="checkbox" id="remember" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
              Tetap masuk
            </label>
          </div>
        </div>
        <div class="my-3">
          <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
        </div>
        {{-- <div class="text-center mt-4 fw-light">
          Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar</a>
        </div> --}}
      </form>
    </div>
  </div>
  <div class="col-lg-6 login-half-bg d-flex flex-row">
    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021  All rights reserved.</p>
  </div>
</div>
@endsection