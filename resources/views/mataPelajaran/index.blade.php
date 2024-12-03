@extends('partials.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Card untuk Data Mata Pelajaran -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Mata Pelajaran</h5>
                </div>

                <div class="container">
                    <div class="row mb-3">
                        <div class="col-8">
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="{{ route('mataPelajaran.create') }}" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Add</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <!-- Table untuk Menampilkan Data Mata Pelajaran -->
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Kode Mapel</th>
                                    <th>Nama Mapel</th>
                                    <th>Action</th> <!-- Kolom aksi -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mataPelajaran as $mataPelajaran)
                                <tr>
                                    <!-- Menampilkan nama mata pelajaran -->
                                    <td>{{ $mataPelajaran->kode_mapel }}</td>
                                    <!-- Menampilkan deskripsi mata pelajaran -->
                                    <td>{{ $mataPelajaran->nama_mapel }}</td>
                                    <td>
                                        <a href="{{ route('mataPelajaran.edit', $mataPelajaran->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('mataPelajaran.destroy', $mataPelajaran->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        <!-- Tombol Edit -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
