<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportTemplate implements WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return ''
    // }

    public function headings(): array
    {
        return [
           '*Tuliskan Nama',
           '*Alamat',
        ];
    }

    
}
