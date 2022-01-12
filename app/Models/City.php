<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // use HasFactory;
    protected $table= "indonesia_cities";
    protected $fillable = [
     'id','name','meta','province_id'
   ];

   public function province()
    {
        return $this->belongsTo(
            'App\Models\Province',
            'province_id'
        );
    }


   public function rumah()
   {
        return $this->belongsToMany(Rumah::class);
   }


}
