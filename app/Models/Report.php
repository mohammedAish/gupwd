<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table= 'reports';
   
    protected $fillable = ['name_ar', 'description_ar','name_en', 'description_en', 'status','image','file'];

}
