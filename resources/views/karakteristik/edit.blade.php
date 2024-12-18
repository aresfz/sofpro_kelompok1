@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Karakteristik</h1>
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
                            <h3 class="card-title">Form Edit Karakteristik</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('karakteristik.update', $karakteristik->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="karir_id">Karir</label>
                                    <select name="karir_id" id="karir_id" class="form-control" required>
                                        <option value="">Pilih Karir</option>
                                        @foreach($karirs as $karir)
                                        <option value="{{ $karir->id }}" {{ $karakteristik->karir_id == $karir->id ? 'selected' : '' }}>
                                            {{ $karir->nama_karir }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mata_pelajaran_id">Mata Pelajaran</label>
                                    <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="form-control" required>
                                        <option value="">Pilih Mata Pelajaran</option>
                                        @foreach($mataPelajarans as $mataPelajaran)
                                        <option value="{{ $mataPelajaran->id }}" {{ $karakteristik->mata_pelajaran_id == $mataPelajaran->id ? 'selected' : '' }}>
                                            {{ $mataPelajaran->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="karakteristik">Karakteristik</label>
                                    <input type="text" name="karakteristik" id="karakteristik" class="form-control" value="{{ $karakteristik->karakteristik }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="bobot">Bobot</label>
                                    <input type="number" name="bobot" id="bobot" class="form-control" step="0.01" min="0" max="1" value="{{ $karakteristik->bobot }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>

@endsection
