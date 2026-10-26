@extends('layout.app')

@section('isi3')
    <div class="container mt-5">
        <div class="mt-5">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>ID Pelanggan</label>
                    <input type="text" name="id_pelanggan" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control">
                </div>

                <div class="mb-3">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Tambah</button>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
