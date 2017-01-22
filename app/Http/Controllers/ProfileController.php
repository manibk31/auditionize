<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sc_personal_info as personal;
use Session;
use Image;
use Storage;
use App\sc_profilepictures as profilepictures;

class ProfileController extends Controller
{
    //
    public function getProfile()
    {
      $username="test123";
      $personal=  new personal();
      $personaldata=$personal::where('username',$username)->first();
      return view('profile')->with('personal',$personaldata);
    }
}
