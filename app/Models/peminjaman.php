<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Buku;
use App\Models\Anggota;

class Peminjaman extends Model
{
   
    protected $table = "peminjaman";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_buku ', 'id_anggota ', 'tanggal_pinjam', 'tanggal_kembali',"denda","status","id_updated","id_created","delete_at"
    ];
    
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class,'id_anggota','id');
    }


}