<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Buku;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $pinjams = Pinjam::with('buku')->get();
        return view('pinjam.index', compact('pinjams'));
    }

    public function create()
    {
        $bukus = Buku::all();
        return view('pinjam.create', compact('bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'peminjam' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);

        Pinjam::create($request->all());
        return redirect()->route('pinjam.index')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function edit(Pinjam $pinjam)
    {
        $bukus = Buku::all();
        return view('pinjam.edit', compact('pinjam', 'bukus'));
    }

    public function update(Request $request, Pinjam $pinjam)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'peminjam' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required|in:dipinjam,dikembalikan',
        ]);

        $pinjam->update($request->all());
        return redirect()->route('pinjam.index')->with('success', 'Peminjaman berhasil diperbarui');
    }

    public function destroy(Pinjam $pinjam)
    {
        $pinjam->delete();
        return redirect()->route('pinjam.index')->with('success', 'Peminjaman berhasil dihapus');
    }
}

