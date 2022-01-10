@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  <p style="margin-bottom:0pt; text-align:center; line-height:22.1pt">
    <span style="font-family:'Times New Roman'; font-size:14pt; color:#222222">PEMERINTAH KOTA BITUNG</span><br/>
    <span style="font-family:'Times New Roman'; font-size:14pt; color:#222222">KECAMATAN GIRIAN</span><br/>
    <span style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Kantor : Kecamatan Girian</span>
  </p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt">
    <span style="font-family:'Times New Roman'; font-size:18pt; font-weight:bold; color:#222222">____________________________________________________</span>
  </p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt">
    <span style="font-family:'Times New Roman'; font-size:14pt; color:#222222">SURAT KETERANGAN UNTUK NIKAH</span><br/>
    <span style="font-family:'Times New Roman'; font-size:14pt; color:#222222">No : {{ $data->nomor }}</span></p>

  <p style="margin-bottom:15pt; line-height:22.1pt">
    <span style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa:</span>
  </p>

  <table cellspacing="0" cellpadding="0" style="width:702pt; margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Nama
            Lengkap dan alias</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->nama_lengkap }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Jenis
            Kelamin</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->jenis_kelamin }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Tempat
            dan tanggal Lahir</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->tempat }}, {{ Carbon\Carbon::parse($data->tanggal_lahir )->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Warga
            Negara</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->kewarganegaraan }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Agama</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->agama }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Pekerjaan</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->pekerjaan }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Tempat
            tinggal</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->tempat_tinggal }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Bin/binti</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->bin }}</span></p>
      </td>
    </tr>
    <tr style="height:4pt">
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Status
            perkawinan</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->status_perkawinan }}</span></p>
      </td>
    </tr>
    {{-- <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="line-height:115%; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222; -aw-import:ignore">&#xa0;</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; line-height:107%; font-size:10pt"><span style="-aw-import:ignore">&#xa0;</span>
        </p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222; -aw-import:ignore">&#xa0;</span></p>
      </td>
    </tr> --}}
    <tr>
      <td style="width:190.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">Nama
            Istri/ Suami Terdahulu</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:393.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->pasangan_terdahulu }}</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Demikian surat keterangan ini dibuat dengan
      mengingat sumpah jabatan dan dapat digunakan seperlunya.</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">GIRIAN, {{ Carbon\Carbon::parse($data->tanggal_surat )->isoFormat('D MMMM Y') }}</span></p>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">&#xa0;</span></p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">CAMAT GIRIAN</span></p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222; -aw-import:ignore">&#xa0;</span></p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222; -aw-import:ignore">&#xa0;</span></p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">{{ $data->nama_camat }}</span></p>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
</div>
@endsection