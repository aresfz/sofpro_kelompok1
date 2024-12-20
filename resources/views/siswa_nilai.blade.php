@extends('partials.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Input Nilai Siswa</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <!-- Form filter siswa -->
            <form method="GET" action="{{ route('siswa_nilai.create') }}">
                <div class="form-group">
                    <label for="siswa_id">Pilih Nama Siswa</label>
                    <select name="siswa_id" id="siswa_id" class="form-control" onchange="this.form.submit()">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id }}" {{ request('siswa_id') == $s->id ? 'selected' : '' }}>{{ $s->Nama }}</option>
                        @endforeach
                    </select>
                </div>
            </form>

            @if(request('siswa_id'))
                <!-- Form input batch untuk semua mata pelajaran -->
                <form method="POST" action="{{ route('siswa_nilai.store') }}">
                    @csrf
                    <input type="hidden" name="siswa_id" value="{{ request('siswa_id') }}">

                    <table class="table mt-3 table-bordered">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mataPelajaran as $mataPel)
                                <tr>
                                    <td>{{ $mataPel->nama_mapel }}</td>
                                    <td>
                                        <input type="number" name="nilai[{{ $mataPel->id }}]" placeholder="Nilai" min="0" max="100" class="form-control" required>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary mt-3">Simpan Nilai</button>
                </form>
            @endif

        </div>
    </section>
</div>

@endsection
