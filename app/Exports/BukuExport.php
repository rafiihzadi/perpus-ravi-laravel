<?php
 
namespace App\Exports;
 
use App\Models\Buku;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PHPExcel_Cell;
 
class BukuExport implements FromCollection, WithHeadings, ShouldAutoSize,  WithMapping, WithEvents, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::all();
    }

    public function map($buku):array
    {
        return [
            $buku->judul_buku,
            $buku->tahun_terbit,
            $buku->id_penulis,
            $buku->id_penerbit,
            $buku->id_kategori,
            $buku->id_sinopsis,
            $buku->sampul,
        ];
    }

    public function headings(): array
    {
       return [
         'Nama Buku',
         'Tahun Terbit',
         'Id Penulis',
         'Id Penerbit',
         'Id Kategori',
         'Id Sinopsis',
         'Sampul',
       ];
    }

    public function styles(Worksheet $sheet)    
    {
        return [
           // Style the first row as bold text.
           1    => ['font' => ['bold' => true]],


        ];  
    }

    public function model(array $row)
    {
        return[
            'nama buku',
            'tahun terbit',
            'id penulis',
            'id penerbit',
            'id kategori',
            'id sinopsis',
            'sampul',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event)
            {
                $event->sheet->getStyle('A1:D4')->ApplyFromArray([
                    'borders' => [ 
                        'allBorders' =>[
                            'borderStyle' => 
                                \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['argb'=>'800000'],
                        ],
                    ],
                ]);
            }
        ];
    }
}