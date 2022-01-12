<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    // use HasFactory;
    protected $table = 'indonesia_provinces';
    protected $fillable = [
     'id','name','meta','province_id','city_id'
   ];

   public function cities()
    {
        return $this->hasMany(
            'App\Models\City',
            'province_id'
        );
    }
}
