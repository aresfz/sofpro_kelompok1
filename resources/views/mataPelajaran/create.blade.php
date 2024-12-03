@extends('partials.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center">Tambah Mata Pelajaran</h5>
        </div>
        
        <div class="card-body">
            <form action="{{ route('mataPelajaran.store') }}" method="POST">
                @csrf
                
                <!-- Kode Mata Pelajaran -->
                <div class="form-group">
                    <label for="kode_mapel">Kode Mata Pelajaran</label>
                    <input type="text" name="kode_mapel" id="kode_mapel" class="form-control" required placeholder="Masukkan kode mata pelajaran">
                </div>

                <!-- Nama Mata Pelajaran -->
                <div class="form-group">
                    <label for="nama_mapel">Nama Mata Pelajaran</label>
                    <textarea name="nama_mapel" id="nama_mapel" class="form-control" rows="4" required placeholder="Masukkan nama mata pelajaran"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a class="btn btn-secondary btn-block" href="{{ route('mataPelajaran.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
