@extends('partials.app') <!-- Extend the main layout -->

@section('content') <!-- Define the content section to be injected into the layout -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- Mata Pelajaran -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahMataPelajaran }}</h3>

                <p>Mata Pelajaran</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i> <!-- Ganti ikon -->
              </div>
              <a href="{{URL::to('/dashboard/mataPelajaran')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> <!-- Tambahkan URL -->
            </div>
          </div>
          <!-- ./col -->

          <!-- Siswa -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahSiswa }}</h3>

                <p>Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i> <!-- Ganti ikon -->
              </div>
              <a href="{{ route('siswa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> <!-- Tambahkan URL -->
            </div>
          </div>
          <!-- ./col -->

          <!-- Karir -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahKarir }}</h3>

                <p>Karir</p>
              </div>
              <div class="icon">
                <i class="fas fa-briefcase"></i> <!-- Ganti ikon -->
              </div>
              <a href="{{ route('karir.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> <!-- Tambahkan URL -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
