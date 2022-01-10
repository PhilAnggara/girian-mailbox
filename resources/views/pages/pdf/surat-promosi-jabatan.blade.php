@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  <p style="margin-bottom:15pt; text-align:right; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Bitung, {{ Carbon\Carbon::parse($data->tanggal_surat )->isoFormat('D MMMM Y') }}</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Kepada Yth. Kepala Badan</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Kepegawaian Kota Bitung.</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Di tempat</span></p>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Nomor : {{ $data->nomor }}</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Lamp : {{ $data->lampiran }}</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Perihal : {{ $data->perihal }}</span>
  </p>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Dalam upaya mengembangkan Karier Pegawai
      Negeri Sipil (PNS) di lingkungan Pemerintahan Kota Bitung, khususnya di Kecamatan Girian perlu adanya
      peningkatan bagi pegawai yang sudah memenuhi persyaratan, baik persyaratan administrasi maupun kepangkatan untuk
      dapat menduduki jabatan.</span></p>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Sehubungan hal tersebut, bersama ini kami
      mengusulkan {{ $data->perihal }} bagi PNS dibawah ini:</span></p>
  <table cellspacing="0" cellpadding="0" style="width:702pt; margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Nama</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:396.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->nama_lengkap }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">NIP</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:396.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->nip }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">Pangkat/ Golongan</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:396.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ $data->pangkat }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span style="font-family:'Times New Roman'; color:#222222">TMT
            Gol</span></p>
      </td>
      <td style="padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">:</span></p>
      </td>
      <td style="width:396.95pt; padding-right:10.5pt; padding-left:10.5pt; vertical-align:bottom">
        <p style="margin-bottom:0pt; font-size:11pt"><span
            style="font-family:'Times New Roman'; color:#222222">{{ Carbon\Carbon::parse($data->tmt )->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-bottom:15pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Nama tersebut diatas kami usulkan, dengan
      pertimbangan bahwa yang bersangkutan dapat melaksanakan tugas dengan baik, mempunyai dedikasi dan loyalitas
      serta tanggung jawab terhadap tugas yang diberikan.</span></p>
  <p style="margin-bottom:0pt; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Demikian usulan ini kami sampaikan, atas
      kebijakan dan perhatian Bapak kami ucapkan terima kasih.</span></p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">Camat Girian</span></p>
  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">{{ $data->nama_camat }}</span><br /><span
      style="font-family:'Times New Roman'; font-size:14pt; color:#222222">NIP : {{ $data->nip_camat }}</span></p>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
</div>
@endsection