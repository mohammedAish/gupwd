<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table= 'activities';
   
    protected $fillable = ['name_ar', 'description_ar','name_en', 'description_en', 'status','image','date','type'];

}
