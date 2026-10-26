{{-- filepath: c:\laragon\www\pkl\resources\views\karyawan\karyawan_update.blade.php --}}
@extends('layout.app')

@section('isi3')
    <div class="container mt-5">
        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_karyawan">ID Karyawan</label>
                <input id="id_karyawan" type="text" name="id_karyawan"
                    class="form-control" value="{{ old('id_karyawan', $karyawan->id_karyawan) }}" required>
                @error('id_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama_karyawan">Nama Karyawan</label>
                <input id="nama_karyawan" type="text" name="nama_karyawan"
                    class="form-control" value="{{ old('nama_karyawan', $karyawan->nama_karyawan) }}" required>
                @error('nama_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_telp">No. Telepon</label>
                <input id="no_telp" type="text" name="no_telp"
                    class="form-control" value="{{ old('no_telp', $karyawan->no_telp) }}" required>
                @error('no_telp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Kembali</a>
        </form>
    </div>
@endsection