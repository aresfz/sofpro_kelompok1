<!-- resources/views/karir/create.blade.php -->

@extends('partials.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center">Tambah Karir</h5>
        </div>
        
        <div class="card-body">
            <form action="{{ route('karir.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="kode_karir">Kode Karir</label>
                    <input type="text" name="kode_karir" id="kode_karir" class="form-control" required placeholder="Masukkan kode karir">
                </div>

                <div class="form-group">
                    <label for="nama_karir">Nama Karir</label>
                    <input type="text" name="nama_karir" id="nama_karir" class="form-control" required placeholder="Masukkan nama karir">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required placeholder="Masukkan deskripsi karir"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a class="btn btn-secondary btn-block" href="{{ route('karir.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
