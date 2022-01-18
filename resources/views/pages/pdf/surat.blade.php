@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  
  @include('includes.header-surat')

  {!! $isi !!}

</div>
@endsection