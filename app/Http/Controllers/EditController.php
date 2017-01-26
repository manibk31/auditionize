<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sc_personal_info as personal;
use Session;
use Image;
use Storage;
use App\sc_profilepictures as profilepictures;
use App\sc_gallery as galleryimage;




class EditController extends Controller
{
    //

    function postPersonal(Request $req)
    {

      $personal=  new personal();
      $gender = array(" m", "f");
      $roles=array("actor","actress","director","musicdirector",
      "producer","voiceartist","graphic/vfxspecialist","other");
      $this->validate($req, [
        'firstname' => 'required|alpha|max:255',
        'lastname' => 'required|alpha|max:255',
        'gender'=>'required|alpha|in:m,f',
        'location'=>'required|alpha|max:255',
        'primaryrole'=>'required|in:Actor,Actress,Director,Music Director,Producer,Voice Artist,Graphic/VFX Specialist,Other',
        'profilepicture'=>'image',
        'about'=>'max:1000'
    ]);
   $username='test123';
    if($req->file('profilepicture')!=null)
    {
    $path=Storage::disk('local')->putFileAs($username, $req->file('profilepicture'),$username.'.jpeg');
    $profilepicture=new profilepictures;
    $profilepictureupload=$profilepicture::where('username','test123')->update(['fullsize'=>$path]);
    }
    $personal::where('username', 'test123')
          ->update(['firstname' => $req->input('firstname'),'lastname' => $req->input('lastname'),
          'gender' => $req->input('gender'),'location' => $req->input('location'),'primaryrole' => $req->input('primaryrole'),'about'=>$req->input('about')]);
    return redirect()->route('edit_profile')->with('info','Details Updated Successfully!');
  }
function viewProfile(){
  $username='test123';
  $gallery=new galleryimage();
  $personal=new personal();
  $personaldata=$personal::where('username',$username)->first();
  $profilepicture=new profilepictures;
  $profilepicturedata=profilepictures::where('username','test123')->first();
  $aboutlength=strlen($personaldata);
$galleryimages=null;
  $gallerycount=galleryimage::where('username',$username)->count();
  if($gallerycount==1)
  {
    $galleryimages=$gallery::where('username',$username)->first();
  }
  else if($gallerycount>1)
  {
  $galleryimages=$gallery::where('username',$username)->get();
  }

  return view('edit_profile')->with('personal',$personaldata)->with('profilepicture',$profilepicture)->with('aboutlen',$aboutlength)
          ->with('imagecount',$gallerycount)
          ->with('images',$galleryimages);
  }
function diplayProfilePicture($filename){
$profilepictures= profilepictures::where('username','test123')->first();
$content=Storage::disk('local')->get($profilepictures->fullsize);
return Image::make($content)->response();
}

function displayGalleryImage($path){
$content=Storage::disk('local')->get('uploads/'.$path);
return Image::make($content)->response();
}

function postGalleryImage(Request $req)
{
  $this->validate($req, [
    'galleryimage'=>'required|image',
    'caption'=>'max:225'
  ]);
  $galleryimage=new galleryimage();
  $username='test123';
  $filename=time().'.jpeg';
  $path=Storage::disk('local')->putFileAs('uploads', $req->file('galleryimage'),$filename);
  if($req->input('caption')!=null)
  {
    $galleryimage->username=$username;
    $galleryimage->fullsize=$filename;
    $galleryimage->caption=$req->input('caption');
    $galleryimage->save();
  }
  else {

      $galleryimage->username=$username;
      $galleryimage->fullsize=$filename;
      $galleryimage->save();
  }
  return redirect()->route('edit_profile')->with('info','Successfully Uploaded an Image');
}

function editImage(Request $req)
{
if($req->has('updatecaption'))
{

}
else if($req->has('deleteimage'))
{


}

}
}
