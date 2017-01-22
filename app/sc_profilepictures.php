<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sc_profilepictures extends Model
{
    //
    protected $table='sc_profilepictures';
    protected $fillable=['username','fullsize','thumbnail','xsmall'];
}
