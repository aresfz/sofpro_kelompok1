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
    <h3 class="card-title">Tabel Siswa</h3>

    <div class="card-tools d-flex">
        <!-- Tombol Add New -->
        <a href="{{ route('siswa.create') }}" class="btn btn-success btn-sm mr-2">Add New</a>

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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswa as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->Nama }}</td>
                                            <td>{{ $item->C1 }}</td>
                                            <td>{{ $item->C2 }}</td>
                                            <td>{{ $item->C3 }}</td>
                                            <td>{{ $item->C4 }}</td>
                                            <td>{{ $item->C5 }}</td>
                                            <td>{{ $item->C6 }}</td>
                                            <td>{{ $item->C7 }}</td>
                                            <td>
                                                <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
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
