<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sc_physicaldetails extends Model
{
    //
    protected $table='sc_physicaldetails';
    protected $fillable=['username','height','weight','haircolour','skincolour','eyecolour','waist','hips','chest','hairlength','hairstyle'];
}
