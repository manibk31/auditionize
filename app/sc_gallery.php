<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sc_gallery extends Model
{
    //
    protected $table='sc_gallery';
    protected $fillable=['username','fullsize','thumb','caption'];
}
