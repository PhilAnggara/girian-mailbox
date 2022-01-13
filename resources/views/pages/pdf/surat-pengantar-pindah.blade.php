@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  
  @include('includes.header-surat')

  <p style="margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt"><span
      style="font-weight:bold">SURAT PENGANTAR PINDAH</span></p>
  <p style="margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt"><span
      style="font-weight:bold">ANTAR KABUPATEN/KOTA ATAU ANTAR PROVINSI</span></p>
  <p style="margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt"><span>Nomor : {{ $data->nomor }}</span></p>
  <p style="margin-bottom:0pt; text-indent:36pt; line-height:normal; font-size:12pt"><span>Yang bertanda tangan di
      bawah ini, menerangkan Permohonan Pindah Penduduk</span></p>
  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt"><span>WNI dengan data sebagai berikut :</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>1.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>NIK</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->nik }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>2.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>Nama Lengkap</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->nama }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>3.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>Nomor Kartu Keluarga</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->nkk }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>4.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>Nama Kepala Keluarga</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->nama_kepala_keluarga }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>5.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>Alamat Sekarang</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->alamat_sekarang }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>6.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>Alamat Tujuan Pindah</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->alamat_pindah }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:20.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>7.</span></p>
      </td>
      <td style="width:160.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>Jumlah Keluarga yang Pindah</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%"><span>{{ $data->jumlah_pengikut }} Orang</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-bottom:0pt; line-height:normal; font-size:12pt"><span style="-aw-import:ignore">&#xa0;</span></p>
  <p style="margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt"><span>Adapun Permohonan Pindah
      Penduduk WNI yang bersangkutan sebagaimana</span></p>
  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt"><span>terlampir.</span></p>
  <p style="text-indent:36pt; text-align:justify; line-height:150%; font-size:12pt"><span>Demikian Surat Pengantar
      Pindah ini dibuat agar digunakan sebagaimana mestinya.</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid"
    style="margin-left:319.25pt; margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%"><span>Girian, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%"><span>Camat</span></p>
      </td>
    </tr>
    <tr style="height:53.05pt">
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%"><img
            src="{{ public_path('template-surat/images/Aspose.Words.93e957f2-1352-47fe-9206-1a540e63ab68.002.png') }}" width="139" height="102" alt=""
            style="-aw-left-pos:0pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:0pt; -aw-wrap-type:inline" />
        </p>
      </td>
    </tr>
    <tr style="height:28.3pt">
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%">
          <span>Muslih Antameng</span><br>
          <span>NIP.197501181996032001</span>
        </p>
      </td>
    </tr>
  </table>
  <p style="line-height:108%; font-size:12pt"><span style="-aw-import:ignore">&#xa0;</span></p>
</div>
@endsection