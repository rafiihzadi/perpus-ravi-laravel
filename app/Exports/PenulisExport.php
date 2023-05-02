<?php
 
namespace App\Exports;
 
use App\Penulis;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class PenulisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penulis::all();
    }
}