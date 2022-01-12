@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  
  @include('includes.header-surat')

  <p style="margin-bottom:15pt; text-align:center; line-height:22.1pt"><span
      style="font-family:'Times New Roman'; font-size:14pt; font-weight:bold; color:#222222">SURAT PENGANTAR UNTUK
      NIKAH</span><br /><span
      style="font-family:'Times New Roman'; font-size:12pt; font-weight:bold; color:#222222">Nomor :
      {{ $data->nomor }}</span></p>
  <p style="line-height:200%; font-size:12pt"><span style="color:#222222">Yang bertanda tangan di bawah ini
      menerangkan dengan sesungguhnya bahwa:</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Nama lengkap dan alias</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->nama }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Jenis kelamin</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->jenis_kelamin }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Tempat tanggal lahir</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->tempat }}, {{ Carbon\Carbon::parse($data->tanggal_lahir )->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Warga negara</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->warga_negara }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Agama</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->agama }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Pekerjaan</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->pekerjaan }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Tempat tinggal</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->tempat_tinggal }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Bin/Binti</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->bin }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">Status perkawinan</span></p>
      </td>
      <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
      </td>
      <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->status_perkawinan }}</span></p>
      </td>
    </tr>
    @if ($data->pasangan_terdahulu)
      <tr style="height:20.65pt">
        <td style="width:139.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
          <p style="margin-bottom:15pt"><span style="color:#222222">Nama suami/istri terdahulu</span></p>
        </td>
        <td style="width:32.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
          <p style="margin-bottom:15pt"><span style="color:#222222">:</span></p>
        </td>
        <td style="width:246.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
          <p style="margin-bottom:15pt"><span style="color:#222222">{{ $data->pasangan_terdahulu }}</span></p>
        </td>
      </tr>
    @endif
  </table>
  <p style="margin-bottom:15pt; line-height:115%; font-size:12pt"><span style="color:#222222">Demikian surat
      keterangan untuk menikah ini telah dibuat agar dapat digunakan seperlunya sesuai dengan fungsinya.</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid"
    style="width:454.25pt; margin-bottom:0pt; border-collapse:collapse">
    <tr style="height:20.65pt">
      <td style="width:137.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center"><span>Girian, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span></p>
      </td>
    </tr>
    <tr style="height:22pt">
      <td style="width:137.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center"><span>Camat</span></p>
      </td>
    </tr>
    <tr style="height:55.75pt">
      <td style="width:137.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center"><img
            src="{{ public_path('template-surat/images/Aspose.Words.fcda362f-9d8d-4df3-b3e0-9d43efbc87ee.002.png') }}" width="139" height="102" alt=""
            style="-aw-left-pos:0pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:0pt; -aw-wrap-type:inline" />
        </p>
      </td>
    </tr>
    <tr style="height:24.25pt">
      <td style="width:137.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center"><span>Muslih Antameng</span></p>
      </td>
    </tr>
  </table>
  <p><span style="-aw-import:ignore">&#xa0;</span></p>
</div>
@endsection