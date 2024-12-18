@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Nilai Siswa</h1>
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
                            <h3 class="card-title">Form Input Nilai Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('siswa_nilai.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="siswa_id">Nama Siswa</label>
                                            <select name="siswa_id" id="siswa_id" class="form-control" required>
                                                @foreach ($siswa as $s)
                                                    <option value="{{ $s->id }}">{{ $s->Nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mata_pelajaran_id">Mata Pelajaran</label>
                                            <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="form-control" required>
                                                @foreach ($mataPelajaran as $mataPel)
                                                    <option value="{{ $mataPel->id }}">{{ $mataPel->nama_mapel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" id="nilai" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
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

@endsection
