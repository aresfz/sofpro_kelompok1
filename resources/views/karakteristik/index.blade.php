@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karakteristik</h1>
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
                            <h3 class="card-title">Daftar Karakteristik</h3>

                            <div class="card-tools d-flex">
                                <a href="{{ route('karakteristik.create') }}" class="btn btn-success btn-sm mr-2">Tambah Karakteristik</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Karir</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Karakteristik</th>
                                        <th>Bobot</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($karakteristiks as $karakteristik)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $karakteristik->karir->nama_karir }}</td>
                                        <td>{{ $karakteristik->mataPelajaran->nama_mapel }}</td>
                                        <td>{{ $karakteristik->karakteristik }}</td>
                                        <td>{{ $karakteristik->bobot }}</td>
                                        <td>
                                            <a href="{{ route('karakteristik.edit', $karakteristik->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('karakteristik.destroy', $karakteristik->id) }}" method="POST" style="display:inline;">
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
