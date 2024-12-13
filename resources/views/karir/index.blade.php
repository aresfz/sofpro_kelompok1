<!-- resources/views/karir/index.blade.php -->

@extends('partials.app')

@section('head')
<style>
    .text-wrap td, 
    .text-wrap th {
        white-space: normal;
        word-wrap: break-word;
        word-break: break-word;
    }
</style>
@endsection


@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karir</h1>
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
                            <h3 class="card-title">Tabel Karir</h3>
                            <div class="card-tools d-flex">
                                <a href="{{ route('karir.create') }}" class="btn btn-success btn-sm mr-2">Tambah Karir</a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th class="small-column">Kode Karir</th>
                                        <th class="medium-column">Nama Karir</th>
                                        <th class="large-column">Deskripsi</th>
                                        <th class="small-column">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($karir as $kar)
                                        <tr>
                                            <td>{{ $kar->kode_karir }}</td>
                                            <td>{{ $kar->nama_karir }}</td>
                                            <td>{{ Str::limit($kar->deskripsi, 50, '...') }}</td>
                                            <td>
                                            <a href="{{ route('karir.show', $kar->id) }}" class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('karir.edit', $kar->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('karir.destroy', $kar->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{ $karir->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
