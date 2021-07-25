<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected  $table = "planes";
    public $timestamps = true;
    protected  $fillable =['name','image','brands_id'];

}
