<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    //
    
    protected $table= 'stories';
   
    protected $fillable = ['name_ar', 'description_ar','name_en', 'description_en', 'status','image','video'];

}
