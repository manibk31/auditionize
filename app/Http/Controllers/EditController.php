<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sc_personal_info as personal;
use Session;
use Image;
use Storage;
use App\sc_profilepictures as profilepictures;
use App\sc_gallery as galleryimage;
use App\sc_videos as videos;
use App\sc_physicaldetails as physicaldetails;


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
  $videos=new videos();
  $videocount=$videos::where('username',$username)->count();
  $personaldata=$personal::where('username',$username)->first();
  $profilepicture=new profilepictures;
  $profilepicturedata=profilepictures::where('username','test123')->first();
  $aboutlength=strlen($personaldata);
  $galleryimages=null;
  $videosdata=null;
  $gallerycount=galleryimage::where('username',$username)->count();
  if($gallerycount==1)
  {
    $galleryimages=$gallery::where('username',$username)->first();
  }
  else if($gallerycount>1)
  {
  $galleryimages=$gallery::where('username',$username)->get();
  }
  if($videocount==1)
  {
    $videosdata=$videos::where('username',$username)->first();
  }
  else if($videocount>1)
  {
      $videosdata=$videos::where('username',$username)->get();
  }


  return view('edit_profile')->with('personal',$personaldata)
          ->with('profilepicture',$profilepicture)
          ->with('aboutlen',$aboutlength)
          ->with('imagecount',$gallerycount)
          ->with('images',$galleryimages)
          ->with('videos',$videosdata)
          ->with('videocount',$videocount);
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
  //Need to Authenticate if user is deleteing or updating images or caption only to id's associated with the user
if($req->has('updatecaption'))
{
  $this->validate($req, [

  'caption'=>'required|max:225'
]);

  $gallery=new galleryimage();
 $gallery::where('id',$req->input('id'))->update(['caption'=>$req->input('caption')]);

  return redirect()->route('edit_profile')->with('info','Successfully updated');

}
else if($req->has('deleteimage'))
{
  $gallery=new galleryimage();
  $details=$gallery::where('id',$req->input('id'))->first();
  $deleted=$gallery::where('id',$req->input('id'))->delete();
  if($deleted)
  {
    $filename=$details->fullsize;
  //  Storage::disk('local')->delete('uploads',$filename);
    return redirect()->route('edit_profile')->with('info','Successfully Deleted');

  }else {
    return redirect()->route('edit_profile')->with('info','Deletion Failed');
  }

}
}

function postVideo(Request $req)
{
  $username="test123";
  $this->validate($req,[
    'link'=>['required','regex:/http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?/'],
    'desc'=>'max:1000'
  ]);
$videos=new videos();
$videos->username=$username;
$videos->link=$req->input("link");
if($req->input('desc')!=null)
{
$videos->desc=$req->input("desc");
}
$videos->save();
return redirect()->route('edit_profile')->with('info','Video Added');

}

function editVideo(Request $req)
{
  $username="test123";
  $videos=new videos();
  if($req->has('update'))
  {
    $this->validate($req, [
      'link'=>['required','regex:/http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?/'],
      'desc'=>'max:1000'
  ]);
  if($req->input('link')!=null)
  {
  $videos::where('id',$req->input('id'))->update(['link'=>$req->input('link'),'desc'=>$req->input('desc')]);
  }
  else
  {
  $videos::where('id',$req->input('id'))->update(['desc'=>$req->input('desc')]);
  }
  return redirect()->route('edit_profile')->with('info','Details Updated');
  }
  else if($req->has('delete'))
  {
  $videos::where('id',$req->input('id'))->delete();
  return redirect()->route('edit_profile')->with('info','Video Deleted Succesfully');
  }
}

function postPhysicalDetails(Request $req)
{
  $username="test123";
  $physicaldetails=new physicaldetails();
  
}

}
