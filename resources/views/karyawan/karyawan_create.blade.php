@extends('layout.app')
@section('isi3')
    <div class="container mt-5">
        <div class="mt-5">

            <form action="{{ route('karyawan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Id Karyawan</label>
                    <input type="text" name="id_karyawan" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Nama Karyawan</label>
                    <input type="text" name="nama_karyawan" class="form-control">
                </div>
                <div class="mb-3">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">
                    Tambah
                </button>
                <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
    
@endsection
