@extends('layouts.auth')
@section('title', 'Kecamatan Girian Mailbox - Buat Akun')

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
          <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
              <div class="w-100">
                <h3 class="mb-4">Buat Akun Admin</h3>
              </div>
            </div>
            <form action="{{ route('daftar-admin.store') }}" method="POST" class="signin-form">
              @csrf
              <div class="form-group mt-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama Pegawai" autofocus required>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <input type="number" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" placeholder="NIP (Tidak Wajib Diisi)">
                @error('nip')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Nama Pengguna" required>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required>
                @error('email')
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
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Kata Sandi" required>
                @error('password_confirmation')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
              </div>
            </form>
            <p class="text-center"><a href="{{ route('home') }}">Kembali</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection