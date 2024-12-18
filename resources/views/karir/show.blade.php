@extends('partials.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Karir</h1>
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
                            <h3 class="card-title">Detail Karir</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Kode Karir</th>
                                    <td>{{ $karir->kode_karir }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Karir</th>
                                    <td>{{ $karir->nama_karir }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $karir->deskripsi }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('karir.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
