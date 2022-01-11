<div>
  {{-- <div class="card"> --}}
  <div class="card {{ $template != 'Surat Keterangan Pindah' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Keterangan Pindah</h4>
      <form class="row g-3" action="{{ route('cetak-surat','surat-keterangan-pindah') }}" target="_blank" method="post">
        @csrf

        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" name="nomor" id="nomor">
        </div>
        <div class="col-md-6">
          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
        </div>
        <div class="col-md-6">
          <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
          <input type="number" class="form-control" name="nik" id="nik">
        </div>
        <div class="col-md-6">
          <label for="nkk" class="form-label">Nomor Kartu Keluarga</label>
          <input type="number" class="form-control" name="nkk" id="nkk">
        </div>
        <div class="col-md-6">
          <label for="tempat" class="form-label">Tempat / Tanggal Lahir</label>
          <div class="input-group">
            <input type="text" class="form-control" name="tempat" id="tempat">
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
          </div>
        </div>
        <div class="col-md-6">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-select form-select-sm" name="jenis_kelamin" id="jenis_kelamin">
            <option value="" selected>-- Pilih jenis kelamin --</option>
            <option>Pria</option>
            <option>Wanita</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
          <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan">
        </div>
        <div class="col-md-6">
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select form-select-sm" name="agama" id="agama">
            <option value="" selected>-- Pilih agama --</option>
            <option>Islam</option>
            <option>Protestan</option>
            <option>Katolik</option>
            <option>Hindu</option>
            <option>Buddha</option>
            <option>Khonghucu</option>
            <option>Lainnya</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
          <select class="form-select form-select-sm" name="status_perkawinan" id="status_perkawinan">
            <option value="" selected>-- Pilih status perkawinan --</option>
            <option>Belum Kawin</option>
            <option>Kawin</option>
            <option>Cerai Hidup</option>
            <option>Cerai Mati</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="alamat_lama" class="form-label">Alamat Lama</label>
          <input type="text" class="form-control" name="alamat_lama" id="alamat_lama">
        </div>
        <div class="col-md-6">
          <label for="alamat_baru" class="form-label">Alamat Baru</label>
          <input type="text" class="form-control" name="alamat_baru" id="alamat_baru">
        </div>
        <div class="col-md-6">
          <label for="alasan_pindah" class="form-label">Alasan Pindah</label>
          <input type="text" class="form-control" name="alasan_pindah" id="alasan_pindah">
        </div>
        <div class="col-md-6">
          <label for="jumlah_pengikut" class="form-label">Jumlah Pengikut</label>
          <input type="number" class="form-control" name="jumlah_pengikut" id="jumlah_pengikut">
        </div>
        <div class="col-md-6">
          <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
          <input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat">
        </div>
        <div class="col-md-6">
          <label for="nama_camat" class="form-label">Nama Camat</label>
          <input type="text" class="form-control" name="nama_camat" id="nama_camat">
        </div>

        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-icon-text">
              <i class="far fa-file-pdf btn-icon-prepend"></i>
              Cetak
            </button>
          </div>
          </button>
        </div>
      </form>
    </div>
  </div>

  {{-- <div class="card"> --}}
  <div class="card {{ $template != 'Surat Keterangan Untuk Menikah' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Keterangan Untuk Menikah</h4>
      <form class="row g-3" action="{{ route('cetak-surat','surat-keterangan-untuk-menikah') }}" target="_blank" method="post">
        @csrf

        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" name="nomor" id="nomor">
        </div>
        <div class="col-md-6">
          <label for="nama_lengkap" class="form-label">Nama Lengkap dan Alias</label>
          <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
        </div>
        <div class="col-md-6">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select wire:model="jenis_kelamin" class="form-select form-select-sm" name="jenis_kelamin" id="jenis_kelamin">
            <option value="" selected>-- Pilih jenis kelamin --</option>
            <option>Pria</option>
            <option>Wanita</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempat" class="form-label">Tempat / Tanggal Lahir</label>
          <div class="input-group">
            <input type="text" class="form-control" name="tempat" id="tempat">
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
          </div>
        </div>
        <div class="col-md-6">
          <label for="kewarganegaraan" class="form-label">Warga Negara</label>
          <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan">
        </div>
        <div class="col-md-6">
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select form-select-sm" name="agama" id="agama">
            <option value="" selected>-- Pilih agama --</option>
            <option>Islam</option>
            <option>Protestan</option>
            <option>Katolik</option>
            <option>Hindu</option>
            <option>Buddha</option>
            <option>Khonghucu</option>
            <option>Lainnya</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="pekerjaan" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan">
        </div>
        <div class="col-md-6">
          <label for="tempat_tinggal" class="form-label">Tempat Tinggal</label>
          <input type="text" class="form-control" name="tempat_tinggal" id="tempat_tinggal">
        </div>
        <div class="col-md-6">
          <label for="bin" class="form-label">Bin / binti</label>
          <input type="text" class="form-control" name="bin" id="bin">
        </div>
        <div class="col-md-6">
          <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
          <select class="form-select form-select-sm" name="status_perkawinan" id="status_perkawinan">
            <option value="" selected>-- Pilih status perkawinan --</option>
            @if ($jenis_kelamin == 'Pria')
              <option>Jejaka</option>
              <option>Duda</option>
              <option>Beristri</option>
            @elseif ($jenis_kelamin == 'Wanita')
              <option>Perawan</option>
              <option>Janda</option>
            @else
              <option>Jejaka</option>
              <option>Duda</option>
              <option>Beristri</option>
              <option>Perawan</option>
              <option>Janda</option>
            @endif
          </select>
        </div>
        <div class="col-md-6">
          @if ($jenis_kelamin == 'Pria')
            <label for="pasangan_terdahulu" class="form-label">Nama Istri Terdahulu</label>
          @elseif ($jenis_kelamin == 'Wanita')
            <label for="pasangan_terdahulu" class="form-label">Nama Suami Terdahulu</label>
          @else
            <label for="pasangan_terdahulu" class="form-label">Nama Istri / Suami Terdahulu</label>
          @endif
          <input type="text" class="form-control" name="pasangan_terdahulu" id="pasangan_terdahulu">
        </div>
        <div class="col-md-6">
          <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
          <input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat">
        </div>
        <div class="col-md-6">
          <label for="nama_camat" class="form-label">Nama Camat</label>
          <input type="text" class="form-control" name="nama_camat" id="nama_camat">
        </div>

        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-icon-text">
              <i class="far fa-file-pdf btn-icon-prepend"></i>
              Cetak
            </button>
          </div>
          </button>
        </div>
      </form>
    </div>
  </div>
  
</div>