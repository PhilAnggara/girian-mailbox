@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
  <p style="margin-bottom:0pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">PEMERINTAH KOTA BITUNG</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">KECAMATAN GIRIAN</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Kantor : Kecamatan Girian</span></p>
  <p style="margin-bottom:0pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:18pt; font-weight:bold; color:#222222">____________________________________________________</span>
  </p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">SURAT KETERANGAN PINDAH</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">No : {{ $data->nomor }}</span></p>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Yang bertanda tangan di bawah ini:</span>
  </p>
  <table cellspacing="0" cellpadding="0" style="width:702pt; margin-bottom:0pt; border-collapse:collapse">
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Nama
            Lengkap</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">{{ $data->nama_lengkap }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Nomor
            Induk Kependudukan</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->nik }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Nomor
            Kartu Keluarga</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->nkk }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Tempat/ Tanggal Lahir</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->tempat }}, {{ Carbon\Carbon::parse($data->tanggal_lahir )->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Jenis
            Kelamin</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->jenis_kelamin }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Kewarganegaraan</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->kewarganegaraan }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Agama</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->agama }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Status
            Perkawinan</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">{{ $data->status_perkawinan }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Alamat
            Lama</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->alamat_lama }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Alamat
            Baru</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->alamat_baru }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Alasan
            Pindah</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">{{ $data->alasan_pindah }}</span></p>
      </td>
    </tr>
    <tr style="height:16.5pt">
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Jumlah Pengikut</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:391.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->jumlah_pengikut }}</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">&#xa0;</span></p>
  <p style="text-align:right"><span style="-aw-import:ignore">&#xa0;</span></p>
  <p style="text-align:right"><span style="width:36pt; display:inline-block">&#xa0;</span><span
      style="width:36pt; display:inline-block">&#xa0;</span><span
      style="width:36pt; display:inline-block">&#xa0;</span></p>
  <p style="text-align:right; line-height:115%; font-size:12pt"><span style="font-family:'Times New Roman'">Girian, {{ Carbon\Carbon::parse($data->tanggal_surat )->isoFormat('D MMMM Y') }}</span></p>
  <p style="text-align:right; line-height:115%; font-size:12pt"><span
      style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
  <p style="text-align:center; line-height:115%; font-size:12pt"><span
      style="font-family:'Times New Roman'">Mengetahui</span></p>
  <p style="text-align:center; line-height:115%; font-size:12pt"><span
      style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
  <p style="text-align:center; line-height:115%; font-size:12pt"><span
      style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
  <p style="text-align:center; line-height:115%; font-size:12pt"><span style="font-family:'Times New Roman'">{{ $data->nama_camat }}</span></p>
</div>
@endsection