<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img class="img-profile rounded-circle" src="{{ asset('img/logo2.png') }}">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Logout</button>
            </form>
        </div>
      </div>


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

          <li class="nav-item">
            <a href="{{URL::to('/dashboard/mataPelajaran')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Kelola Mata Pelajaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/dashboard/siswa')}}" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Kelola Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/dashboard/karir')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Kelola Karir
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/dashboard/nilai')}}" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Nilai Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/dashboard/karakteristik')}}" class="nav-link">
              <i class="nav-icon fas fa-marker"></i>
              <p>
                Kelola Karakteristik
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/dashboard/rekomendasi')}}" class="nav-link">
            <i class="nav-icon fas fa-file"></i>              <p>
                Hasil Rekomendasi
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>