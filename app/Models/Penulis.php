<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Penulis extends Model
{

    protected $table = "penulis";
    protected $primaryKey = "id";
    protected $fillble = [
        'nama','alamat','telepon','email'
    ];

    public function book()
    {
        return $this->hasMany('book::class');
    }
}