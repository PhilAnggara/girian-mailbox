@extends('layouts.app')
@section('title', 'Kecamatan Girian Mailbox')

@section('content')
<div class="content-wrapper">
  <div class="row mt-5">
    <div class="col-md-4 grid-margin">
      <div class="card d-flex align-items-center">
        <div class="card-body">
          <div class="d-flex flex-row align-items-center">
            <div class="me-5">
              <p class="mt-2 text-muted card-text">Total Surat</p>
              <h2 class="text-dark">{{ $total }}</h2>
            </div>
            <i class="fa fa-envelope fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin">
      <div class="card d-flex align-items-center">
        <div class="card-body">
          <div class="d-flex flex-row align-items-center">
            <div class="me-5">
              <p class="mt-2 text-muted card-text">Surat Masuk</p>
              <h2 class="text-dark">{{ $sm }}</h2>
            </div>
            <i class="fad fa-inbox-in fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin">
      <div class="card d-flex align-items-center">
        <div class="card-body">
          <div class="d-flex flex-row align-items-center">
            <div class="me-5">
              <p class="mt-2 text-muted card-text">Surat Keluar</p>
              <h2 class="text-dark">{{ $sk }}</h2>
            </div>
            <i class="fad fa-paper-plane fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-md-3 grid-margin">
      <div class="card d-flex align-items-center">
        <div class="card-body">
          <div class="d-flex flex-row align-items-center">
            <div class="me-5">
              <p class="mt-2 text-muted card-text">Surat Tertunda</p>
              <h2 class="text-dark">134</h2>
            </div>
            <i class="fad fa-envelope fa-3x"></i>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>
@endsection