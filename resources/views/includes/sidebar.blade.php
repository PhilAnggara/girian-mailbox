<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="far fa-globe-americas menu-icon"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    <li class="nav-item {{ Request::is('surat-masuk') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('surat-masuk.index') }}">
        <i class="far fa-inbox-in menu-icon"></i>
        <span class="menu-title">Daftar Surat Masuk</span>
      </a>
    </li>
    <li class="nav-item {{ Request::is('surat-keluar') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('surat-keluar.index') }}">
        <i class="far fa-paper-plane menu-icon"></i>
        <span class="menu-title">Daftar Surat Keluar</span>
      </a>
    </li>
    <li class="nav-item {{ Request::is('buat-surat') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('buat-surat') }}">
        <i class="far fa-envelope menu-icon"></i>
        <span class="menu-title">Buat Surat</span>
      </a>
    </li>
    {{-- <li class="nav-item {{ Request::is('laporan') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="far fa-clipboard-list menu-icon"></i>
        <span class="menu-title">Laporan</span>
      </a>
    </li> --}}
    @if (auth()->user()->jabatan == 'Camat')
      <li class="nav-item {{ Request::is('daftar-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('daftar-admin.index') }}">
          <i class="far fa-user-plus menu-icon"></i>
          <span class="menu-title">Daftarkan Admin</span>
        </a>
      </li>
    @endif
  </ul>
</nav>