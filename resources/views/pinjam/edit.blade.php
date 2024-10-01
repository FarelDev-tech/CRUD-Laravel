@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Peminjaman</h1>

    <form action="{{ route('pinjam.update', $pinjam->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="buku_id" class="form-label">Buku</label>
            <select class="form-control" id="buku_id" name="buku_id" required>
                @foreach($bukus as $buku)
                    <option value="{{ $buku->id }}" {{ $pinjam->buku_id == $buku->id ? 'selected' : '' }}>{{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="peminjam" class="form-label">Peminjam</label>
            <input type="text" class="form-control" id="peminjam" name="peminjam" value="{{ old('peminjam', $pinjam->peminjam) }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ old('tanggal_pinjam', $pinjam->tanggal_pinjam) }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="{{ old('tanggal_kembali', $pinjam->tanggal_kembali) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="dipinjam" {{ $pinjam->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                <option value="dikembalikan" {{ $pinjam->status == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection