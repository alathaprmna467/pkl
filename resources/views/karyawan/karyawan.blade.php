@extends('layout.app')
@section('isi3')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Data karyawan

                <a href="{{ route('karyawan.create') }}" class="btn-quick-action dropdown-toggle"> <i
                        class="bi bi-plus-lg"></i>Tambah</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>ID karyawan</th>
                            <th>nama karyawan</th>
                            <th>no telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    @foreach ($karyawan as $item)
                        @php $karyawanId = $item->id ?? null; @endphp
                        <tr>
                            <td>{{ $item->id_karyawan }}</td>
                            <td>{{ $item->nama_karyawan }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>
                                @if ($karyawanId)
                                    <a type="button"
                                        class="btn btn-success"href="{{ route('karyawan.edit', ['karyawan' => $karyawanId]) }}">Ubah</a>
                                    <form action="{{ route('karyawan.destroy', ['karyawan' => $karyawanId]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
