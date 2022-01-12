<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModels extends Model
{
    //
   
    protected $table= "users";
    protected $fillable = [
     'id','name','email','password','level','image'
   ];
}
