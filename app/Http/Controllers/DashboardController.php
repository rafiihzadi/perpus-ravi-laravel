<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $query =  Buku::query();
        $buku =  $query->count();


        return view('dashboard.index', [
            'title' => 'Form login',
            'buku' => $buku,
       ]);
    }
}
