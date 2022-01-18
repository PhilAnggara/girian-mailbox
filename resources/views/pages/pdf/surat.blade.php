@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  
  @include('includes.header-surat')

  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt">
    <span style="font-family:'Times New Roman'; font-size:14pt; font-weight:bold; color:#222222">
      {{ $data->judul_surat }}
    </span>
    <br />
    <span
      style="font-family:'Times New Roman'; font-size:12pt; font-weight:bold; color:#222222">Nomor :
      {{ $nomor }}
    </span>
  </p>

  {!! $isi !!}

</div>
@endsection