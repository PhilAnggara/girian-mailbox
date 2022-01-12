<div>
  <div class="card mb-3">
    <div class="card-body">
      <h4 class="card-title">Buat Surat</h4>
      <form action="{{ route('cetak-pdf') }}" target="_blank" method="post">
        @csrf
        <div class="input-group mb-3">
          <label class="input-group-text" for="templateSurat">Template Surat</label>
          <select wire:model="template" class="form-select" id="templateSurat">
            <option value="" selected>-- Pilih template --</option>
            <option value="surat-keterangan-izin-keramaian">Surat Keterangan Izin Keramaian</option>
            <option value="surat-keterangan-izin-bangunan">Surat Keterangan Izin Bangunan</option>
            <option value="surat-pengantar-untuk-nikah">Surat Pengantar Untuk Nikah</option>
            <option value="surat-pengantar-pindah">Surat Pengantar Pindah</option>
            <option value="surat-izin-tempat-usaha">Surat Izin Tempat Usaha</option>
          </select>
        </div>
      </form>
    </div>
  </div>

  {{-- <div class="card"> --}}
  <div class="card {{ $template != 'surat-keterangan-izin-keramaian' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Keterangan Izin Keramaian</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf   
        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" value="{{ $no_surat_a }}" name="nomor" id="nomor" readonly>
        </div>
        <div class="col-md-6">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="col-md-6">
          <label for="tempat" class="form-label">Tempat tanggal lahir</label>
          <div class="input-group">
            <input type="text" class="form-control" name="tempat" id="tempat" required>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="pekerjaan" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
        </div>
        <div class="col-md-6">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>
        <div class="col-md-6">
          <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
          <input type="date" class="form-control" name="tanggal_acara" id="tanggal_acara" required>
        </div>
        <div class="col-md-6">
          <label for="jenis_acara" class="form-label">Acara</label>
          <input type="text" class="form-control" name="jenis_acara" id="jenis_acara" required>
        </div>
        <div class="col-md-6">
          <label for="hiburan" class="form-label">Hiburan</label>
          <input type="text" class="form-control" name="hiburan" id="hiburan">
        </div>
        <div class="col-md-6">
          <label for="tempat_acara" class="form-label">Tempat Acara</label>
          <select class="form-select form-select-sm" name="tempat_acara" id="tempat_acara" required>
            <option value="" selected>-- Pilih tempat acara --</option>
            <option>Girian Atas</option>
            <option>Girian Bawah</option>
            <option>Girian Indah</option>
            <option>Girian Permai</option>
            <option>Girian Weru I</option>
            <option>Girian Weru II</option>
            <option>Wangurer</option>
          </select>
        </div>
        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button wire:click="updateNomor(1)" type="submit" class="btn btn-success btn-icon-text">
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
  <div class="card {{ $template != 'surat-keterangan-izin-bangunan' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Keterangan Izin Bangunan</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" value="{{ $no_surat_b }}" name="nomor" id="nomor" readonly>
        </div>
        <div class="col-md-6">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="col-md-6">
          <label for="pekerjaan" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
        </div>
        <div class="col-md-6">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>
        <div class="col-md-6">
          <label for="terletak" class="form-label">Terletak di atas</label>
          <input type="text" class="form-control" name="terletak" id="terletak">
        </div>
        <div class="col-md-6">
          <label for="status_tanah" class="form-label">Status Tanah</label>
          <select class="form-select form-select-sm" name="status_tanah" id="status_tanah" required>
            <option value="" selected>-- Pilih status tanah --</option>
            <option>Milik Sendiri</option>
            <option>Milik Keluarga</option>
            <option>Sewaan</option>
          </select>
        </div>
        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button wire:click="updateNomor(2)" type="submit" class="btn btn-success btn-icon-text">
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
  <div class="card {{ $template != 'surat-pengantar-untuk-nikah' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Pengantar Untuk Nikah</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" value="{{ $no_surat_c }}" name="nomor" id="nomor" readonly>
        </div>
        <div class="col-md-6">
          <label for="nama" class="form-label">Nama lengkap dan alias</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="col-md-6">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select wire:model="jk" class="form-select form-select-sm" name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="" selected>-- Pilih jenis kelamin --</option>
            <option>Pria</option>
            <option>Wanita</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempat" class="form-label">Tempat tanggal lahir</label>
          <div class="input-group">
            <input type="text" class="form-control" name="tempat" id="tempat" required>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="warga_negara" class="form-label">Warga Negara</label>
          <input type="text" class="form-control" name="warga_negara" id="warga_negara" required>
        </div>
        <div class="col-md-6">
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select form-select-sm" name="agama" id="agama" required>
            <option value="" selected>-- Pilih agama --</option>
            <option>Islam</option>
            <option>Protestan</option>
            <option>Katolik</option>
            <option>Hindu</option>
            <option>Buddha</option>
            <option>Khonghucu</option>
            <option>Lain-lain</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="pekerjaan" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
        </div>
        <div class="col-md-6">
          <label for="tempat_tinggal" class="form-label">Tempat tinggal</label>
          <input type="text" class="form-control" name="tempat_tinggal" id="tempat_tinggal" required>
        </div>
        <div class="col-md-6">
          @if ($jk == 'Pria')
            <label for="bin" class="form-label">Bin</label>
          @elseif ($jk == 'Wanita')
            <label for="bin" class="form-label">Binti</label>
          @else
            <label for="bin" class="form-label">Bin / Binti</label>
          @endif
          <input type="text" class="form-control" name="bin" id="bin" required>
        </div>
        <div class="col-md-6">
          <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
          <select wire:model="sp" class="form-select form-select-sm" name="status_perkawinan" id="status_perkawinan" required>
            <option value="" selected>-- Pilih status perkawinan --</option>
            @if ($jk == 'Pria')
              <option>Jejaka</option>
              <option>Duda</option>
              <option>Beristri</option>
            @elseif ($jk == 'Wanita')
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
        @if ($sp != 'Jejaka' && $sp != 'Perawan')
          <div class="col-md-6">
            @if ($jk == 'Pria')
              <label for="pasangan_terdahulu" class="form-label">Nama istri terdahulu</label>
            @elseif ($jk == 'Wanita')
              <label for="pasangan_terdahulu" class="form-label">Nama suami terdahulu</label>
            @else
              <label for="pasangan_terdahulu" class="form-label">Nama suami / istri terdahulu</label>
            @endif
            <input type="text" class="form-control" name="pasangan_terdahulu" id="pasangan_terdahulu">
          </div>
        @endif
        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button wire:click="updateNomor(3)" type="submit" class="btn btn-success btn-icon-text">
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
  <div class="card {{ $template != 'surat-pengantar-pindah' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Pengantar Pindah</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" value="{{ $no_surat_d }}" name="nomor" id="nomor" readonly>
        </div>
        <div class="col-md-6">
          <label for="nik" class="form-label">NIK</label>
          <input type="number" class="form-control" name="nik" id="nik" required>
        </div>
        <div class="col-md-6">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="col-md-6">
          <label for="nkk" class="form-label">Nomor Kartu Keluarga</label>
          <input type="number" class="form-control" name="nkk" id="nkk" required>
        </div>
        <div class="col-md-6">
          <label for="nama_kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
          <input type="text" class="form-control" name="nama_kepala_keluarga" id="nama_kepala_keluarga" required>
        </div>
        <div class="col-md-6">
          <label for="alamat_sekarang" class="form-label">Alamat Sekarang</label>
          <select class="form-select form-select-sm" name="alamat_sekarang" id="alamat_sekarang" required>
            <option value="" selected>-- Pilih alamat sekarang --</option>
            <option>Girian Atas</option>
            <option>Girian Bawah</option>
            <option>Girian Indah</option>
            <option>Girian Permai</option>
            <option>Girian Weru I</option>
            <option>Girian Weru II</option>
            <option>Wangurer</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="alamat_pindah" class="form-label">Alamat Tujuan Pindah</label>
          <input type="text" class="form-control" name="alamat_pindah" id="alamat_pindah" required>
        </div>
        <div class="col-md-6">
          <label for="jumlah_pengikut" class="form-label">Jumlah Keluarga yang Pindah</label>
          <input type="number" class="form-control" name="jumlah_pengikut" id="jumlah_pengikut">
        </div>
        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button wire:click="updateNomor(4)" type="submit" class="btn btn-success btn-icon-text">
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
  <div class="card {{ $template != 'surat-izin-tempat-usaha' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Izin Tempat Usaha</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        <div class="col-md-6">
          <label for="nomor" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" value="{{ $no_surat_e }}" name="nomor" id="nomor" readonly>
        </div>
        <div class="col-md-6">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="col-md-6">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>
        <div class="col-md-6">
          <label for="pekerjaan" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
        </div>
        <div class="col-md-6">
          <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
          <input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" required>
        </div>
        <div class="col-md-6">
          <label for="nama_peusahaan" class="form-label">Nama Perusahaan</label>
          <input type="text" class="form-control" name="nama_peusahaan" id="nama_peusahaan" required>
        </div>
        <div class="col-md-6">
          <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
          <input type="text" class="form-control" name="alamat_usaha" id="alamat_usaha" required>
        </div>
        <div class="col-md-6">
          <label for="kelurahan" class="form-label">Kelurahan</label>
          <select class="form-select form-select-sm" name="kelurahan" id="kelurahan" required>
            <option value="" selected>-- Pilih kelurahan --</option>
            <option>Girian Atas</option>
            <option>Girian Bawah</option>
            <option>Girian Indah</option>
            <option>Girian Permai</option>
            <option>Girian Weru I</option>
            <option>Girian Weru II</option>
            <option>Wangurer</option>
          </select>
        </div>
        <div class="col-12 mt-5">
          <div class="d-grid gap-2">
            <button wire:click="updateNomor(5)" type="submit" class="btn btn-success btn-icon-text">
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