<style>
    .sidebar.toggled .sidebar-title {
  display: none;  /* Sembunyikan teks "Sistem Rekomendasi Konsentrasi Jurusan" */
}

/* Pastikan logo tetap terlihat */
.sidebar .sidebar-title {
  overflow: hidden;
  text-overflow: ellipsis;
}

</style>
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #242428;" id="accordionSidebar">

<li class="nav-item nav-link">
        <div class="d-flex align-items-center mx-3 mt-3">
            <!-- Add your image here -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 30px; height: 30px; margin-right: 10px;">
            <!-- Title text with custom class for responsive font size -->
            <div class="text-white sidebar-title" style="">Sistem Rekomendasi Konsentrasi Jurusan</div>
        </div>
    </li> 


    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <span>Dashboard</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/dashboard/mataPelajaran')}}">
            <span>Kelola Mata Pelajaran</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="#}">
            <span>Kelola Siswa</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Kelola Karir</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Kelola Road Map</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Kelola Karakteristik</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Hasil Rekomendasi</span>
        </a>
    </li>
    
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
