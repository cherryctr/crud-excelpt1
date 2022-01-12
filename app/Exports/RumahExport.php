<?php

namespace App\Exports;

use App\Models\Rumah;
use App\Models\City;
use App\Kategori;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

class RumahExport implements WithHeadings,FromQuery,WithMapping
{
    protected $district_id;
    protected $villages_id;
    protected $id;

    function __construct($id='id',$district_id='district_id',$villages_id='villages_id'){
        $this->villages_id = $villages_id;
        $this->id = $id;
        $this->district_id = $district_id;

       
    }
  

    public function query()
    {
        
        $data_rumah = Rumah::query()->with(['kategoris','kota','kecamatan','kelurahan'])->where('id','=',$this->id)->where('district_id',$this->district_id);
        return $data_rumah;
    }

    public function map($data_rumah): array
    {
        return [
            // $data_rumah->id_rumah,
            $data_rumah->kota->name,
            $data_rumah->nama,
            $data_rumah->kategoris->nama_kategori,
            $data_rumah->kecamatan->name,
            $data_rumah->kelurahan->name,
            $data_rumah->alamat,

           

          
        ];
    }

    // public function view(): View
    // {
    //     dd($this->id);   
    //     return view('layout.dashboard.indexone',$this->id);
    // }

    // public function collection()
    //     {

    //     //dd($this->villages_id);
    //     return Rumah::select('nama,kategori_id,disrtict_id,alamat')
    //     ->with('kota','kecamatan','kelurahan','kategoris')
    //     ->where('villages_id','=',$this->villages_id)->get();
    //     }

    // public function collection()
    // {
        
    //     return Rumah::with('');
       
    //   //  return Rumah::where('villages_id','=',$this->villages_id)->where('kategori_id','=',$this->kategori_id)->get();
    // }

    public function headings(): array
    {
        return [
            // 'id_rumah',
            'Nama daerah', //<-- City Id
            'nama tempat ibadah', // nama
            'kategori', // memilih kategori di table kategori
            'Kecamatan', // Kecamatan
            'Kelurahan', // Kelurahan
            'alamat'

        ];
    }
}
