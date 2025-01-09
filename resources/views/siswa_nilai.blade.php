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
            
            @if(session('error'))
                <p class="alert alert-danger">{{ session('error') }}</p>
            @endif

            <!-- Form filter siswa -->
            <form method="GET" action="{{ route('siswa_nilai.create') }}" id="siswaForm">
                <div class="form-group">
                    <label for="siswa_id">Pilih Nama Siswa</label>
                    <select name="siswa_id" id="siswa_id" class="form-control">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id }}" 
                                data-has-nilai="{{ $s->mataPelajaran()->exists() ? '1' : '0' }}"
                                {{ request('siswa_id') == $s->id ? 'selected' : '' }}>
                                {{ $s->Nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>

            <!-- Div untuk alert -->
            <div id="nilaiAlert" class="alert alert-warning" style="display: none;">
                Siswa ini sudah memiliki nilai. Silahkan pilih siswa lain atau gunakan menu edit nilai untuk mengubah nilai yang sudah ada.
            </div>

            <!-- Form input batch untuk semua mata pelajaran -->
            <div id="formNilai" style="display: {{ request('siswa_id') ? 'block' : 'none' }}">
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
                                        <input type="number" 
                                            name="nilai[{{ $mataPel->id }}]" 
                                            placeholder="Nilai" 
                                            min="0" 
                                            max="100" 
                                            class="form-control" 
                                            required>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary mt-3">Simpan Nilai</button>
                </form>
            </div>
        </div>
    </section>
</div>

<!-- Tambahkan script JavaScript -->
<script>
document.getElementById('siswa_id').addEventListener('change', function() {
    const siswaId = this.value;
    const option = siswaId ? this.options[this.selectedIndex] : null;
    const hasNilai = option ? option.getAttribute('data-has-nilai') === '1' : false;
    const alertDiv = document.getElementById('nilaiAlert');
    const formNilai = document.getElementById('formNilai');
    
    // Reset display
    alertDiv.style.display = 'none';
    formNilai.style.display = 'none';

    if (!siswaId) {
        return;
    }

    if (hasNilai) {
        alertDiv.style.display = 'block';
    } else {
        // Submit form only if student doesn't have nilai
        document.getElementById('siswaForm').submit();
    }
});
</script>
@endsection