<?php

namespace App\Models;


use App\Models\Kelurahan;
use App\kategori;
use App\Models\City;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    //
    protected $primaryKey = 'id_rumah';
    protected $table= "rumah_ibadah";
    protected $fillable = [
     'id','nama','kategori_id','city_id','district_id','villages_id','alamat'
   ];

   protected $guarded=[];

   public function kota()
   {
       return $this->belongsTo(City::class,'id');
   }

   public function kecamatan()
   {
        return $this->belongsTo(Kecamatan::class,'district_id');
   }

   public function kelurahan()
   {
        return $this->belongsTo(Kelurahan::class,'villages_id');
   }
   public function kategoris()
   {
        return $this->belongsTo(kategori::class,'kategori_id');
   }

   public function kategorisid()
   {
        return $this->belongsTo(kategori::class,'id');
   }


   public function masjid()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',1);
   }
 
   public function mushola()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',2);
   }
 
   public function gerejakeristen()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',3);
   }
   public function gerejakatolik()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',4);
   }
 
   public function purehindu()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',5);
   }
 
   public function purebudha()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',6);
   }
 
   public function kelenteng()
   {
       return $this->hasMany(Rumah::class, 'villages_id')->where('kategori_id','=',7);
   }
 
  
  


}


