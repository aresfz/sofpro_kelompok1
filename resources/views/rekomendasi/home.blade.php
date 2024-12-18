@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pilih Siswa untuk Menghitung Rekomendasi Karir</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Pilih Siswa</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <!-- Form Dropdown untuk memilih siswa -->
                            <form action="" method="GET" id="form-pilih-siswa">
                                <div class="form-group">
                                    <label for="siswa_id">Pilih Nama Siswa</label>
                                    <select name="siswa_id" id="siswa_id" class="form-control">
                                        <option value="">-- Pilih Siswa --</option>
                                        @foreach($siswa as $item)
                                            <option value="{{ $item->id }}">{{ $item->Nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Hitung Rekomendasi</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Menambahkan event listener pada form
    document.getElementById('form-pilih-siswa').addEventListener('submit', function(event) {
        var siswaId = document.getElementById('siswa_id').value;
        if (siswaId) {
            // Set action form ke URL yang benar
            this.action = '/dashboard/rekomendasi/hitung/' + siswaId;
        } else {
            event.preventDefault(); // Jika tidak ada siswa yang dipilih, jangan submit form
            alert('Silakan pilih siswa terlebih dahulu');
        }
    });
</script>

@endsection
