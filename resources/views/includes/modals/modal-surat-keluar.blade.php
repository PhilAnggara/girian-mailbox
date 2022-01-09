{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('surat-keluar.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body py-4">

          @if($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
          @endif

          <div class="form-group">
            <label for="surat">Upload Surat</label>
            <input type="file" class="dropify" name="surat" id="surat" data-height="100" data-max-file-size="10M" data-allowed-file-extensions="pdf" required>
          </div>

          <div class="form-group">
            <label for="judul_surat">Judul Surat</label>
            <input type="text" class="form-control" name="judul_surat" id="judul_surat" placeholder="Judul Surat" required>
          </div>
          
          <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk" required>
          </div>

          <div class="form-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" required>
          </div>

          <div class="form-group">
            <label for="penerima">Penerima</label>
            <input type="text" class="form-control" name="penerima" id="penerima" placeholder="Penerima" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Modal Edit --}}
@foreach ($items as $item)
<div class="modal fade" id="modalEdit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('surat-keluar.update', $item->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="modal-body py-4">

          @if($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
          @endif

          <div class="form-group">
            <label for="surat">Upload Surat</label>
            <input type="file" class="dropify" name="surat" id="surat" data-height="100" data-max-file-size="10M" data-allowed-file-extensions="pdf" data-default-file="{{ Storage::url($item->surat) }}">
          </div>

          <div class="form-group">
            <label for="judul_surat">Judul Surat</label>
            <input type="text" class="form-control" name="judul_surat" id="judul_surat" value="{{ $item->judul_surat }}" placeholder="Judul Surat" required>
          </div>
          
          <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{ $item->tanggal_masuk }}" placeholder="Tanggal Masuk" required>
          </div>

          <div class="form-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" class="form-control" name="pengirim" id="pengirim" value="{{ $item->pengirim }}" placeholder="Pengirim" required>
          </div>

          <div class="form-group">
            <label for="penerima">Penerima</label>
            <input type="text" class="form-control" name="penerima" id="penerima" value="{{ $item->penerima }}" placeholder="Penerima" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

{{-- Modal Hapus --}}
@foreach ($items as $item)
<div class="modal fade" id="modalHapus-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Surat</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('surat-keluar.destroy', $item->id) }}" method="post">
        @method('delete')
        @csrf
        <div class="modal-body py-4">
          <p class="my-3">Yakin ingin menghapus <b>{{ $item->judul_surat }}</b>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach