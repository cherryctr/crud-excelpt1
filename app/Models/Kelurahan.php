<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    // use HasFactory;
    protected $table="indonesia_villages";
    protected $fillable = [
        'id','name','meta','disctrict_id',
      ];

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

  public function rumah()
  {
      return $this->hasOne(Rumah::class, 'villages_id');
  }
      
}
