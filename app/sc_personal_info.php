<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sc_personal_info extends Model
{
    //
    protected $table='sc_personal_info';
  protected $fillable=['username','firstname','lastname','gender','location','primaryrole','profilepicture'];
}
