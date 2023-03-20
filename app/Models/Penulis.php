<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Penulis extends Model
{
<<<<<<< HEAD

    protected $table = "penulis";
    protected $primaryKey = "id";
    protected $fillble = [
        'nama','alamat','telepon','email'
=======
   
    protected $table = "penulis";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'email'
>>>>>>> 8be8c92f536db8bc54ea7a71883cab4de6ba1277
    ];

    public function book()
    {
        return $this->hasMany('book::class');
    }
<<<<<<< HEAD
=======


>>>>>>> 8be8c92f536db8bc54ea7a71883cab4de6ba1277
}