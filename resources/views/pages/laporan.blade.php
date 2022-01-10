@extends('layouts.pdf')
@section('title', 'Kecamatan Girian Mailbox')

@section('content')
<h1 class="mb">LAPORAN ARSIP SURAT</h1>
<h1>KECAMATAN GIRIAN - {{ $tanggal }}</h1>
<hr>
<p class="alamat">Jl. Sh Sarundajang, Girian Weru Satu, Girian, Kota Bitung, Sulawesi Utara 95511</p>
<hr>

<h5 class="table-title">Surat Masuk</h5>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Judul Surat</th>
      <th>Tanggal Masuk</th>
      <th>Pengirim</th>
      <th>Penerima</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($sm as $m)
      <tr>
        <td>{{ $m->judul_surat }}</td>
        <td>{{ Carbon\Carbon::parse($m->tanggal_masuk )->isoFormat('D MMMM Y') }}</td>
        <td>{{ $m->pengirim }}</td>
        <td>{{ $m->penerima }}</td>
      </tr>
    @empty
    <tr>
      <td colspan="4" class="text-center">
        Data Kosong
      </td>
    </tr>
    @endforelse
  </tbody>
</table>

<h5 class="table-title">Surat Keluar</h5>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Judul Surat</th>
      <th>Tanggal Masuk</th>
      <th>Pengirim</th>
      <th>Penerima</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($sk as $k)
        <tr>
          <td>{{ $k->judul_surat }}</td>
          <td>{{ Carbon\Carbon::parse($k->tanggal_masuk )->isoFormat('D MMMM Y') }}</td>
          <td>{{ $k->pengirim }}</td>
          <td>{{ $k->penerima }}</td>
        </tr>
      @empty
      <tr>
        <td colspan="4" class="text-center">
          Data Kosong
        </td>
      </tr>
      @endforelse
  </tbody>
</table>

<table class="bawah" width="100%">
  <tr>
    <td></td>
    <td width="200px">
      <p class="tanggal">Bitung, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
      <p class="jabatan">{{ Auth::user()->name }}</p>
      <p class="ttd">__________________________</p>
    </td>
  </tr>
</table>

{{-- <div class="page-break"></div> --}}
@endsection