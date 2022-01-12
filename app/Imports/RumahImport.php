<?php

namespace App\Imports;

use App\Kategori;
use App\Models\Rumah;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\City;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
// use App\Rumah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class RumahImport implements ToModel,WithHeadingRow
{

    // protected $city;
    // protected $kecamatan;
    // protected $kelurahan;
    protected $district_id;
    protected $villages_id;
    protected $id;
    protected $kategori_id;

    function __construct($id='id',$district_id='district_id',$villages_id='villages_id',$kategori_id='kategori_id'){
        $this->villages_id = $villages_id;
        $this->id = $id;
        $this->district_id = $district_id;
        $this->kategori_id = $kategori_id;

        $this->data = Rumah::with(['kategoris','kota','kecamatan','kelurahan'])->get();
       
    }


    public function headingRow(): int
    {
        return 2;
    }


    public function model(array $row)
    {

        // $data = [];
        // $id = $request->id;
       
        // $kategori_id = $request->kategori_id;
        // $district_id = $request->district_id;
        // $villages_id = $request->villages_id;
        //$data = $this->data->where('id',$row[0]);
        
        return new Rumah([
            //
            'id'        => request('id'),
            'nama'       => $row[1],
            'alamat'=> $row[1],
            'kategori_id' =>request('kategori_id'),
            'district_id' =>request('district_id'),
            'villages_id' =>request('villages_id'),

            // $data_rumah->kota->name,
            // $data_rumah->nama,
            // $data_rumah->kategoris->nama_kategori,
            // $data_rumah->kecamatan->name,
            // $data_rumah->kelurahan->name,
            // $data_rumah->alamat,

        ]);
    }
}
