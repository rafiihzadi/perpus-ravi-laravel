<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Buku extends Model
{
   
    protected $table = "buku";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'id_penerbit', 'id_kategori', 'sinopsis','sampul','created_at','updated_at','deleted_at',
    ];

    public function book()
    {
        return $this->hasMany('book::class');
    }


}