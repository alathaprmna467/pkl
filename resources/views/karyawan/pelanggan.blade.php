@extends('layout.app')

@section('isi3')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Data Pelanggan</h3>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
        </div>

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pelanggan as $item)
                    @php $pelangganId = $item->id ?? null; @endphp
                    <tr>
                        <td>{{ $item->id_pelanggan ?? '-' }}</td>
                        <td>{{ $item->nama_pelanggan ?? '-' }}</td>
                        <td>{{ $item->no_telp ?? '-' }}</td>
                        <td>{{ $item->alamat ?? '-' }}</td>
                        <td>
                            @if ($pelangganId)
                                <a href="{{ route('pelanggan.edit', ['pelanggan' => $pelangganId]) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pelanggan.destroy', ['pelanggan' => $pelangganId]) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada data pelanggan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
