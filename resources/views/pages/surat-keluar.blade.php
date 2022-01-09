@extends('layouts.app')
@section('title', 'Kecamatan Girian Mailbox')

@section('content')
<div class="content-wrapper">

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Sukses!</strong> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Daftar Surat Keluar</h4>
      @livewire('surat-table', ['type' => $type])
    </div>
  </div>
</div>
@include('includes.modals.modal-surat-keluar')
@endsection