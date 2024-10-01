<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $fillable = [
        'buku_id',
        'peminjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];
 
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}