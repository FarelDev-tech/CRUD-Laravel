@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Peminjaman</h1>
    <a href="{{ route('pinjam.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>
    <table class="table">
        <thead>
            <tr>
                <th>Buku</th>
                <th>Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pinjams as $pinjam)
            <tr>
                <td>{{ $pinjam->buku->judul }}</td>
                <td>{{ $pinjam->peminjam }}</td>
                <td>{{ $pinjam->tanggal_pinjam }}</td>
                <td>{{ $pinjam->tanggal_kembali ?? 'Belum dikembalikan' }}</td>
                <td>{{ $pinjam->status }}</td>
                <td>
                    <a href="{{ route('pinjam.edit', $pinjam->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('pinjam.destroy', $pinjam->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection