<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sc_videos extends Model
{
    //
      protected $table='sc_videos';
      protected $fillable=['username','link','desc'];
}
