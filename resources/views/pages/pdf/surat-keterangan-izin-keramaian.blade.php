@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  
  @include('includes.header-surat')

  <p style="margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt; background-color:#ffffff"><span
      style="font-weight:bold; letter-spacing:-0.75pt">Surat Keterangan Izin Keramaian</span></p>
  <p style="margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt; background-color:#ffffff"><span
      style="font-weight:bold; letter-spacing:-0.75pt">Nomor : {{ $data->nomor }}</span></p>
  <p
    style="margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%; font-size:12pt; background-color:#ffffff">
    <span style="letter-spacing:-0.75pt">Yang bertanda tangan di bawah ini Camat Kecamatan Girian Kota
      Bitung, menerangkan dengan</span><span style="letter-spacing:-0.75pt; -aw-import:spaces">&#xa0; </span><span
      style="letter-spacing:-0.75pt">sebenarnya bahwa:</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Nama</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span style="letter-spacing:-0.75pt">{{ $data->nama }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span style="letter-spacing:-0.75pt">Tempat
            tanggal lahir</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">{{ $data->tempat }}, {{ Carbon\Carbon::parse($data->tanggal_lahir )->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Pekerjaan</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">{{ $data->pekerjaan }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Alamat</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span style="letter-spacing:-0.75pt">{{ $data->alamat }}</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt; background-color:#ffffff"><span
      style="letter-spacing:-0.75pt; -aw-import:ignore">&#xa0;</span></p>
  <p
    style="margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%; font-size:12pt; background-color:#ffffff">
    <span style="letter-spacing:-0.75pt">Orang tersebut diatas adalah benar ??? benar penduduk wilayah Kecamatan Girian
      Kota Bitung. Adapun surat keterangan ini untuk dipergunakan sebagai persyaratan izin keramaian pada :</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Hari</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">{{ Carbon\Carbon::parse($data->tanggal_acara )->isoFormat('dddd') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Tanggal</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span style="letter-spacing:-0.75pt">{{ Carbon\Carbon::parse($data->tanggal_acara )->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Acara</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">{{ $data->jenis_acara }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">Hiburan</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">{{ $data->hiburan }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:150.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span style="letter-spacing:-0.75pt">Tempat
            acara</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span
            style="letter-spacing:-0.75pt">:</span></p>
      </td>
      <td style="width:255.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:justify; line-height:150%"><span style="letter-spacing:-0.75pt">{{ $data->tempat_acara }}</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt; background-color:#ffffff"><span
      style="letter-spacing:-0.75pt; -aw-import:ignore">&#xa0;</span></p>
  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt; background-color:#ffffff"><span
      style="letter-spacing:-0.75pt">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dipergunakan sesuai
      dengan mestinya.</span></p>
  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt; background-color:#ffffff"><span
      style="letter-spacing:-0.75pt; -aw-import:ignore">&#xa0;</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid"
    style="margin-left:319.25pt; margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%"><span style="letter-spacing:-0.75pt">Girian,
          {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%"><span
            style="letter-spacing:-0.75pt">Camat</span></p>
      </td>
    </tr>
    <tr style="height:48.55pt">
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%"><img
            src="{{ public_path('template-surat/images/Aspose.Words.f3b64c03-b22f-4ee5-aeec-aed3e0598ef0.002.png') }}" width="139" height="102" alt=""
            style="-aw-left-pos:0pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:0pt; -aw-wrap-type:inline" />
        </p>
      </td>
    </tr>
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:150%">
          <span style="letter-spacing:-0.75pt">Muslih Antameng</span><br>
          <span style="letter-spacing:-0.75pt">NIP.197501181996032001</span>
        </p>
      </td>
    </tr>
  </table>
  <p style="line-height:108%; font-size:12pt"><span style="-aw-import:ignore">&#xa0;</span></p>
</div>
@endsection