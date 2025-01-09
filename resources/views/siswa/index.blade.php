@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Siswa</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Nilai Siswa</h3>
                            <div class="card-tools d-flex">
                                <!-- Tombol Add New -->
                                @if(Auth::user()->role === 'admin')
                                <a href="{{ route('siswa.create') }}" class="btn btn-success btn-sm mr-2">Add New</a>
                                @endif
                                <!-- Form Search -->
                                <form action="{{ route('siswa.index') }}" method="GET" class="form-inline ml-2">
                                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search Siswa">
                                    <button type="submit" class="btn btn-primary btn-sm ml-2">Search</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswa as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->Nama }}</td>

                                            <!-- Looping nilai siswa untuk setiap mata pelajaran -->
                                            @foreach($item->mataPelajaran as $mataPelajaran)
                                                <td>
                                                    <!-- Menampilkan nilai dari pivot table -->
                                                    {{ $mataPelajaran->pivot->nilai }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3 d-flex justify-content-end">
                                {{ $siswa->links('pagination::bootstrap-4') }}
                            </div>
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