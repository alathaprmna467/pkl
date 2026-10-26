
<form action="{{ route('pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
    @csrf
    @method('PUT')

    <label>ID Pelanggan</label>
    <input type="text" name="id_pelanggan"
        value="{{ old('id_pelanggan', $pelanggan->id_pelanggan) }}" required>

    <label>Nama Pelanggan</label>
    <input type="text" name="Nama_Pelanggan"
        value="{{ old('Nama_Pelanggan', $pelanggan->Nama_Pelanggan) }}" required>

    <label>No. Telepon</label>
    <input type="text" name="No_Telp"
        value="{{ old('No_Telp', $pelanggan->No_Telp) }}" required>

    <label>Alamat</label>
    <input type="text" name="Alamat"
        value="{{ old('Alamat', $pelanggan->Alamat) }}" required>

    <button type="submit">Simpan Perubahan</button>
</form>
