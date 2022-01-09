<div>
  <div class="row">
    <div class="col-12 col-md-8 text-center text-md-start">
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
        Tambah Surat
      </button>
    </div>
    <div class="col-12 col-md-4 mt-2 mt-md-0">
      <input wire:model="search" class="form-control form-control-lg" type="search" placeholder="Cari..." autofocus>
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
            @forelse ($items as $item)
              <tr>
                <td>
                  <a href="{{ Storage::url($item->surat) }}" class="btn btn-inverse-danger btn-icon btn-sm me-2" target="_blank">
                    <i class="far fa-file-pdf"></i>
                  </a>
                  <a href="{{ Storage::url($item->surat) }}" class="text-secondary text-decoration-none" target="_blank"><b>{{ $item->nomor_surat }}</b></a>
                </td>
                <td>{{ $item->judul_surat }}</td>
                <td>{{ Carbon\Carbon::parse($item->tanggal_masuk)->isoFormat('D MMM YYYY') }}</td>
                <td>{{ $item->pengirim }}</td>
                <td>{{ $item->penerima }}</td>
                <td>
                  <div class="btn-group" role="group">
                    <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit-{{ $item->id }}">Ubah</button>
                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus-{{ $item->id }}">Hapus</button>
                  </div>
                </td>
              </tr>
            @empty
            <tr>
              <td colspan="10">
                <i class="text-muted">Tidak ada data ditemukan</i>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
