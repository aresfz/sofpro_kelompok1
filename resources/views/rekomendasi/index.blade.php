@extends('partials.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Hasil Rekomendasi Karir untuk Siswa: {{ $siswa->Nama }}</h1>
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
                            <h3 class="card-title">Daftar Hasil Rekomendasi Karir</h3>

                            <!-- Add New Button (if applicable) -->
                            <div class="card-tools d-flex">
                                <!-- Assuming you have a route to add a new recommendation, you can add a button here -->
                                <!-- <a href="{{ route('karir.create') }}" class="btn btn-success btn-sm mr-2">Add New</a> -->
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body table-responsive p-0">
                            <!-- Check if topKarirs is not empty -->
                            @if($topKarirs->isNotEmpty())
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Karir</th>
                                            <th>Nilai Rekomendasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($topKarirs as $karir)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $karir->nama_karir }}</td>
                                                <td>
                                                    <!-- Display the calculated score -->
                                                    @php
                                                        // Retrieve the score from the karirScores array, if available
                                                        $score = $karirScores[$karir->id] ?? 0;
                                                    @endphp
                                                    {{ number_format($score, 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="ml-3">No career recommendations available.</p>
                            @endif
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
