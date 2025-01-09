@extends('partials.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center">Tambah Siswa</h5>
        </div>
        
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" id="Nama" class="form-control" required placeholder="Masukkan Nama Siswa">
                </div>

                <!-- Hidden inputs for maintaining data structure -->
                <input type="hidden" name="C1" value="0">
                <input type="hidden" name="C2" value="0">
                <input type="hidden" name="C3" value="0">
                <input type="hidden" name="C4" value="0">
                <input type="hidden" name="C5" value="0">
                <input type="hidden" name="C6" value="0">
                <input type="hidden" name="C7" value="0">

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a class="btn btn-secondary btn-block" href="{{ route('siswa.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection