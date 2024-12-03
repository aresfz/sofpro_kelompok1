@extends('partials.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center">Edit Mata Pelajaran</h5>
        </div>
        
        <div class="card-body">
            <!-- Form untuk mengedit mata pelajaran -->
            <form action="{{ route('mataPelajaran.update', $mataPelajaran->id) }}" method="POST">
                @csrf
                @method('PUT')  <!-- Menyatakan bahwa ini adalah update request -->

                <!-- Kode Mata Pelajaran -->
                <div class="form-group">
                    <label for="kode_mapel">Kode Mata Pelajaran</label>
                    <input type="text" name="kode_mapel" id="kode_mapel" class="form-control" value="{{ old('kode_mapel', $mataPelajaran->kode_mapel) }}" required placeholder="Masukkan kode mata pelajaran">
                </div>

                <!-- Nama Mata Pelajaran -->
                <div class="form-group">
                    <label for="nama_mapel">Nama Mata Pelajaran</label>
                    <textarea name="nama_mapel" id="nama_mapel" class="form-control" rows="4" required placeholder="Masukkan nama mata pelajaran">{{ old('nama_mapel', $mataPelajaran->nama_mapel) }}</textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                <a class="btn btn-secondary btn-block" href="{{ route('mataPelajaran.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
