@extends('layouts.surat')
@section('title', $judul)

@section('content')
<div>
  
  @include('includes.header-surat')

  <p style="margin-bottom:0pt; line-height:150%; font-size:12pt"><span style="background-color:#ffffff">Bitung, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:60.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>Nomor</span></p>
      </td>
      <td style="width:2.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>:</span></p>
      </td>
      <td style="width:354.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>{{ $data->nomor }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:60.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>Lampiran</span></p>
      </td>
      <td style="width:2.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>:</span></p>
      </td>
      <td style="width:354.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>Permohonan Izin Tempat Usaha</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:60.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>Perihal</span></p>
      </td>
      <td style="width:2.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>:</span></p>
      </td>
      <td style="width:354.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:150%; font-size:11pt"><span>Permohonan untuk memperoleh Surat Izin
            Tempat Usaha (SITU)</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-top:12pt; margin-bottom:0pt; line-height:115%; font-size:12pt"><span
      style="background-color:#ffffff">Kepada Yth, </span></p>
  <p style="margin-bottom:0pt; line-height:115%; font-size:12pt"><span style="background-color:#ffffff">Camat Girian,
      Bitung</span></p>
  <p style="line-height:115%; font-size:12pt"><span style="background-color:#ffffff">Di tempat. </span><span
      style="background-color:#ffffff">&#xa0;</span><span style="background-color:#ffffff"> </span></p>
  <p style="margin-bottom:0pt; line-height:115%; font-size:12pt"><span style="background-color:#ffffff">Dengan hormat,
      Yang bertanda tangan di bawah ini: </span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Nama</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->nama }}</span>
        </p>
      </td>
    </tr>
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Alamat</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->alamat }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Pekerjaan</span></p>
      </td>
      <td style="width:11.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:215.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->pekerjaan }}</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-top:12pt; margin-bottom:0pt; line-height:115%; font-size:12pt"><span
      style="background-color:#ffffff">Bersamaan dengan surat ini, saya mengajukan permohonan untuk memperoleh Surat
      Izin Tempat Usaha (SITU) dengan identitas usaha sebagai berikut: </span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid" style="margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Jenis Usaha</span></p>
      </td>
      <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:219.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->jenis_usaha }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Nama Perusahaan</span>
        </p>
      </td>
      <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:219.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->nama_peusahaan }}</span>
        </p>
      </td>
    </tr>
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Alamat Usaha</span></p>
      </td>
      <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:219.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->alamat_usaha }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Kelurahan</span></p>
      </td>
      <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:219.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">{{ $data->kelurahan }}</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:191.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Kecamatan</span></p>
      </td>
      <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">:</span></p>
      </td>
      <td style="width:219.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; line-height:115%"><span style="background-color:#ffffff">Girian</span></p>
      </td>
    </tr>
  </table>
  <p style="margin-top:12pt; margin-bottom:0pt; line-height:115%; font-size:12pt"><span
      style="background-color:#ffffff">Untuk melengkapi persyaratan, berikut saya lampirkan: </span></p>
  <ol type="1" style="margin:0pt; padding-left:0pt">
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Surat Permohonan SITU. </span></li>
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Pas foto berwarna ukuran 3 x 4 sebanyak dua lembar. </span></li>
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Fotokopi KTP. </span></li>
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Surat keterangan dari desa. </span></li>
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Surat rekomendasi dari camat. </span></li>
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Satu lembar fotokopi pelunasan PBB tahun terakhir. </span></li>
    <li class="ListParagraph"
      style="margin-left:32.11pt; margin-bottom:0pt; line-height:115%; padding-left:3.89pt; font-size:12pt"><span
        style="background-color:#ffffff">Map snelhecter </span></li>
  </ol>
  <p style="line-height:115%; font-size:12pt"><span style="background-color:#ffffff">Demikian surat permohonan ini
      saya buat dengan sebenar-benarnya. Atas izin yang diberikan saya ucapkan terima kasih. </span></p>
  <table cellspacing="0" cellpadding="0" class="TableGrid"
    style="margin-left:319.25pt; margin-bottom:0pt; border-collapse:collapse">
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:115%"><span
            style="background-color:#ffffff">Pemohon</span></p>
      </td>
    </tr>
    <tr style="height:43.15pt">
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:415%"><span
            style="-aw-import:ignore">&#xa0;</span></p>
      </td>
    </tr>
    <tr>
      <td style="width:120.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
        <p style="margin-bottom:0pt; text-align:center; line-height:115%"><span
            style="background-color:#ffffff">{{ $data->nama }}</span></p>
      </td>
    </tr>
  </table>
  <p style="line-height:115%; font-size:12pt"><span style="-aw-import:ignore">&#xa0;</span></p>
</div>
@endsection