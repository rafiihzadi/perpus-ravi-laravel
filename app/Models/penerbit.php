<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Penerbit extends Model
{
   
    protected $table = "penerbit";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'email'
    ];

    public function book()
    {
        return $this->hasMany('book::class');
    }


}