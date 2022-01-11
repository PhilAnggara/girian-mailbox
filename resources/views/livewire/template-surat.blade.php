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
            <option value="surat-keterangan-untuk-nikah">Surat Keterangan Untuk Nikah</option>
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
  <div class="card {{ $template != 'surat-keterangan-izin-bangunan' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Keterangan Izin Bangunan</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        
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
  <div class="card {{ $template != 'surat-keterangan-untuk-nikah' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Keterangan Untuk Nikah</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        
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
  <div class="card {{ $template != 'surat-pengantar-pindah' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Pengantar Pindah</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        
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
  <div class="card {{ $template != 'surat-izin-tempat-usaha' ? 'd-none' : '' }}">
    <div class="card-body">
      <h4 class="card-title">Surat Izin Tempat Usaha</h4>
      <form class="row g-3" action="{{ route('cetak-surat', $template) }}" target="_blank" method="post">
        @csrf
        
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