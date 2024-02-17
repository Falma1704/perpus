<!-- resources/views/buku/index.blade.php -->

@extends('layout.main')

@section('konten')
    <div class="container">
        <h2>Daftar Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $item)
                    <tr>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>
                            <a href="{{ route('buku.show', $item->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
