@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Peminjaman</h1>

    <form action="{{ route('pinjam.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="buku_id" class="form-label">Buku</label>
            <select class="form-control" id="buku_id" name="buku_id" required>
                @foreach($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="peminjam" class="form-label">Peminjam</label>
            <input type="text" class="form-control" id="peminjam" name="peminjam" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection