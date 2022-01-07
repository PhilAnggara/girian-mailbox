<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <div class="me-3">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    </div>
    <div>
      <a class="navbar-brand brand-logo" href="{{ route('home') }}">
        {{-- <img src="{{ url('frontend/images/logo.png') }}" /> --}}
        <h4 class="text-light fw-bold">Girian-<span class="text-secondary">MailBox</span></h4>
      </a>
      <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
        <img src="{{ url('frontend/images/logo.png') }}" alt="logo" />
      </a>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-top">
    <ul class="navbar-nav">
      <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
        <h1 class="welcome-text">Halo, <span class="text-black fw-bold">{{ auth()->user()->name }}</span></h1>
        <h3 class="welcome-sub-text">Selamat Datang di Aplikasi Mailbox Kecamatan Girian </h3>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      {{-- <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="icon-bell"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom" href="{{ route('home') }}">
            <p class="mb-0 font-weight-medium float-left">Kamu mempunyai 4 notifikasi baru </p>
            <span class="badge badge-pill badge-primary float-right">Lihat semua</span>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-alert m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
              <p class="fw-light small-text mb-0"> Just now </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-settings m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
              <p class="fw-light small-text mb-0"> Private message </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-airballoon m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
              <p class="fw-light small-text mb-0"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li> --}}
      <li class="nav-item dropdown d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="{{ url('frontend/images/user.png') }}" style="object-fit: cover" alt="Profile image">
          <span class="d-none d-lg-inline ms-2 h5 font-weight-semibold">{{ auth()->user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{ url('frontend/images/user.png') }}" width="60px" height="60px" style="object-fit: cover" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
            <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
          </div>
          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="dropdown-item" type="submit">
              <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>
              Keluar
            </button>
          </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>