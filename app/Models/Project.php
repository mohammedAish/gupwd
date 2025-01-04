<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table= 'projects';
   
    protected $fillable = ['name_ar', 'description_ar','name_en', 'description_en', 'status','image'];

}
