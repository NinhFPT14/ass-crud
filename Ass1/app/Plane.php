<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected  $table = "planes";
    protected  $fillable =['name','image','brands_id'];

}
