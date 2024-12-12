<!-- resources/views/siswa/edit.blade.php -->

@extends('partials.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-center">Edit Siswa</h5>
        </div>
        
        <div class="card-body">
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="C1">C1</label>
                    <input type="number" name="C1" id="C1" class="form-control" value="{{ $siswa->C1 }}" required placeholder="Masukkan nilai C1">
                </div>

                <div class="form-group">
                    <label for="C2">C2</label>
                    <input type="number" name="C2" id="C2" class="form-control" value="{{ $siswa->C2 }}" required placeholder="Masukkan nilai C2">
                </div>

                <div class="form-group">
                    <label for="C3">C3</label>
                    <input type="number" name="C3" id="C3" class="form-control" value="{{ $siswa->C3 }}" required placeholder="Masukkan nilai C3">
                </div>

                <div class="form-group">
                    <label for="C4">C4</label>
                    <input type="number" name="C4" id="C4" class="form-control" value="{{ $siswa->C4 }}" required placeholder="Masukkan nilai C4">
                </div>

                <div class="form-group">
                    <label for="C5">C5</label>
                    <input type="number" name="C5" id="C5" class="form-control" value="{{ $siswa->C5 }}" required placeholder="Masukkan nilai C5">
                </div>

                <div class="form-group">
                    <label for="C6">C6</label>
                    <input type="number" name="C6" id="C6" class="form-control" value="{{ $siswa->C6 }}" required placeholder="Masukkan nilai C6">
                </div>

                <div class="form-group">
                    <label for="C7">C7</label>
                    <input type="number" name="C7" id="C7" class="form-control" value="{{ $siswa->C7 }}" required placeholder="Masukkan nilai C7">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Update</button>
                <a class="btn btn-secondary btn-block" href="{{ route('siswa.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
