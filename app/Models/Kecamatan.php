<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    // use HasFactory;
    protected $table = 'indonesia_districts';
    protected $fillable = [
     'id','name','meta','province_id','city_id'
   ];


  



      

  /**
   * Get all of the comments for the Kecamatan
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function masjid()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',1);
  }

  public function mushola()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',2);
  }

  public function gerejakeristen()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',3);
  }
  public function gerejakatolik()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',4);
  }

  public function purehindu()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',5);
  }

  public function purebudha()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',6);
  }

  public function kelenteng()
  {
      return $this->hasMany(Rumah::class, 'district_id')->where('kategori_id','=',7);
  }


  public function rumah()
  {
      return $this->hasMany(Rumah::class, 'id');
  }
  public function kelurahan()
   {
        return $this->hasMany(Kelurahan::class,'district_id');
   }
  


}
