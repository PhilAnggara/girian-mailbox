@extends('layouts.app')
@section('title', 'Kecamatan Girian Mailbox')

@section('content')
<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Surat Masuk</h4>
        <div class="row">
          <div class="col-12 col-md-8 text-center text-md-start">
            <button type="button" class="btn btn-success">Tambah Surat</button>
          </div>
          <div class="col-12 col-md-4 mt-2 mt-md-0">
            <input class="form-control form-control-lg" type="search" placeholder="Cari..." autofocus>
          </div>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Nomor Surat</th>
                  <th>Judul Surat</th>
                  <th>Tanggal Masuk</th>
                  <th>Pengirim</th>
                  <th>Penerima</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="storage/files/examples/sample.pdf" class="btn btn-inverse-danger btn-icon btn-sm me-2" target="_blank">
                      <i class="far fa-file-pdf"></i>
                    </a>
                    <a href="storage/files/examples/sample.pdf" class="text-secondary text-decoration-none" target="_blank"><b>Surat-Masuk-001</b></a>
                  </td>
                  <td>Surat Pemberitahuan Libur</td>
                  <td>1 Januari 2022</td>
                  <td>Walikota</td>
                  <td>Adit M</td>
                  <td>
                    <div class="btn-group" role="group">
                      <button class="btn btn-outline-info btn-sm">Ubah</button>
                      <button class="btn btn-outline-danger btn-sm">Hapus</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="storage/files/examples/sample-1.pdf" class="btn btn-inverse-danger btn-icon btn-sm me-2" target="_blank">
                      <i class="far fa-file-pdf"></i>
                    </a>
                    <a href="storage/files/examples/sample-1.pdf" class="text-secondary text-decoration-none" target="_blank"><b>Surat-Masuk-002</b></a>
                  </td>
                  <td>Surat Pemberitahuan Covid-19</td>
                  <td>1 Januari 2022</td>
                  <td>Dinas Kesehatan</td>
                  <td>Arthur M</td>
                  <td>
                    <div class="btn-group" role="group">
                      <button class="btn btn-outline-info btn-sm">Ubah</button>
                      <button class="btn btn-outline-danger btn-sm">Hapus</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection