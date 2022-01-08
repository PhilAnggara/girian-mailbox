@extends('layouts.auth')
@section('title', 'Kecamatan Girian Mailbox - Masuk')

@section('content')
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-3">
        <h2 class="heading-section font-weight-bold">Girian-<span class="text-secondary">MailBox</span></h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-5">
        <div class="wrap">
          <div class="img" style="background-image: url(auth/images/bg-1.jpg);"></div>
          <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
              <div class="w-100">
                <h3 class="mb-4">Login</h3>
              </div>
            </div>
            <form action="{{ route('login') }}" method="POST" class="signin-form">
              @csrf
              <div class="form-group mt-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Nama Pengguna" autofocus required>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi" required>
                {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50 text-left">
                  <label class="checkbox-wrap checkbox-primary mb-0">Ingat Saya
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection