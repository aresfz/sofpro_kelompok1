@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mata Pelajaran</h1>
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
                <h3 class="card-title">Mata Pelajaran</h3>

                <div class="card-tools d-flex">
                <a href="{{ route('mataPelajaran.create') }}" class="btn btn-success btn-sm mr-2">Add New</a>
            
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                    <th>Kode Mapel</th>
                    <th>Nama Mapel</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mataPelajaran as $mataPelajaran)
                    <tr>
                    <td>{{ $mataPelajaran->kode_mapel }}</td>
                    <td>{{ $mataPelajaran->nama_mapel }}</td>
                    <td>
                        <a href="{{ route('mataPelajaran.edit', $mataPelajaran->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('mataPelajaran.destroy', $mataPelajaran->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
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
