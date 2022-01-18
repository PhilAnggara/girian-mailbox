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

@push('addon-style')
  <style>
    .tox-tinymce {
      height: 500px !important;
    }
    .tox-statusbar__text-container {
      display: none !important;
    }
  </style>

  <script src="{{ url('frontend/vendors/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ url('frontend/vendors/tinymce/plugins/code/plugin.min.js') }}"></script>
  <script>
    tinymce.init({ selector: '#isi_surat' });
    tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
  </script>
@endpush