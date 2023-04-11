<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Peminjaman extends Model
{
   
    protected $table = "peminjaman";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_buku ', 'id_anggota ', 'tanggal_pinjam', 'tanggal_kembali',"denda","status","id_updated","id_created"
    ];

    public function book()
    {
        return $this->hasMany('book::class');
    }
}