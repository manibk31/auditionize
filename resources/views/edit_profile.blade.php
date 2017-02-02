@extends('templates.default')
@section('content')
<div id="editcontent" style="width:100%">
   <div class="container">
      <div class="container">
         <h6>Personal Info</h6>
         <hr>
         <div class="row">
            <!-- left column -->
            <form class="form-horizontal" role="form" method="post" action="{{route('post_personal')}}" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="col-md-3">
                  <div class="text-center">
                     <div class="centered" >
                        <div >
                           <img class="img-rounded img-responsive profilepic" style="height:200px;width:150px" src="{{route('profilepicture',['filename'=>'test123.jpeg'])}}">
                        </div>
                     </div>
                     <div class="col-md-3 padding-bottom-25" style="margin-top:20px;" >
                        <div class="btn btn-primary"><input type="file" name="profilepicture"></div>
                     </div>
                  </div>
               </div>
               <!-- edit form column -->
               <div class="col-md-9 personal-info">
                  @foreach($errors as $error)
                  <div class="alert alert-info alert-danger">
                     <a class="panel-close close" data-dismiss="alert">×</a>
                     {{$errors}}
                  </div>
                  @endforeach
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <div class="form-group">
                     <label class="col-lg-3 control-label">First name:</label>
                     <div class="col-lg-8">
                        <input class="form-control" type="text" name="firstname" value="{{$personal['firstname']}}">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Last name:</label>
                     <div class="col-lg-8">
                        <input class="form-control" type="text" name="lastname"  value="{{$personal['lastname']}}">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Gender:</label>
                     <div class="col-lg-8">
                        @if($personal['gender']=='m')
                        <label class="radio-inline"><input  type="radio" name="gender" value="m" checked="checked">Male</label>
                        @else
                        <label class="radio-inline"><input  type="radio" name="gender" value="m">Male</label>
                        @endif
                        @if($personal['gender']=='f')
                        <label class="radio-inline"><input type="radio" name="gender" value="f"  checked="checked">Female</label>
                        @else
                        <label class="radio-inline"><input type="radio" name="gender" value="f">Female</label>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Location:</label>
                     <div class="col-lg-8">
                        <input class="form-control" type="text" name="location"  value="{{$personal['location']}}">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Primary Role:</label>
                     <div class="col-lg-8">
                        <div class="ui-select">
                           <select id="user_time_zone" class="form-control" name="primaryrole">
                              <option value="Actor">Actor</option>
                              <option value="Actress">Actress</option>
                              <option value="Director">Director</option>
                              <option value="Music Director">Music Director</option>
                              <option value="Producer">Producer</option>
                              <option value="Voice Artist">Voice Artist</option>
                              <option value="Graphic/VFX Specialist">Graphic/VFX specialist</option>
                              <option value="Other">Other</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">About:</label>
                     <div class="col-lg-8">
                        <textarea class="form-control"  id="about" maxlength="1000" name="about" style="margin-top:1%" rows="5">{{$personal['about']}}</textarea>
                        <h6 class="pull-right" id="count_message">{{$personal['aboutlen']}}</h6>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label"></label>
                     <div class="col-md-8">
                        <input  class="btn btn-primary" value="Save Changes" type="submit">
                        <span></span>
                     </div>
                  </div>
            </form>
            </div>
         </div>
      </div>
      <div class="container">
         <h6>Media Center</h6>
         <hr>
         <div class="row">
            <!-- left column -->
            <ul class="nav nav-pills nav-pills nav">
               <li class="active"><a data-toggle="tab" href="#home">Images</a></li>
               <li><a data-toggle="tab" href="#menu1">Videos</a></li>
            </ul>
            <div id="edittab" class="tab-content container">
               <div id="home" class="tab-pane fade in active">
                  <div id="mobileimg" class="zoom-gallery">
                     @if($images!=null)
                     @if($imagecount>1)
                     @foreach ($images as $image)
                     <div class="editimage col-md-12">
                        <div class="col-md-3">
                           <img  class="response-img" src="{{route('gallerydisplay',['path'=>$image->fullsize])}}"  height="200" width="200">
                        </div>
                        <form method="post" action="{{route('editimage')}}">
                           <input type="hidden" name="id" value="{{$image->id}}">
                           {{ csrf_field() }}
                           <div class="col-md-9">
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Caption:</label>
                                 <div class="col-md-12">
                                    <input class="form-control" type="text" name="caption" value="{{$image->caption}}">
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-3" style="margin-top:20px;" >
                                       <input  class="btn btn-primary" value="Update Caption" name="updatecaption" type="submit" >
                                       <span></span>
                                    </div>
                                    <div class="col-md-3 " style="margin-top:20px;" >
                                       <input  class="btn btn-primary" value="Delete Image" name="deleteimage" type="submit">
                                       <span></span>
                                    </div>
                                 </div>
                              </div>
                              <div >
                              </div>
                           </div>
                        </form>
                     </div>
                     @endforeach
                     @else
                     <div class="editimage col-md-12">
                        <div class="col-md-3">
                           <img  class="response-img" src="{{route('gallerydisplay',['path'=>$images->fullsize])}}"  height="200" width="200">
                        </div>
                        <form method="post" action="{{route('editimage')}}">
                           <input type="hidden" name="id" value="{{$images->id}}">
                           {{ csrf_field() }}
                           <div class="col-md-9">
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Caption:</label>
                                 <div class="col-md-12">
                                    <input class="form-control" type="text" name="caption" value="{{$images->caption}}">
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-3" style="margin-top:20px;" >
                                       <input  class="btn btn-primary" value="Update Caption" name="updatecaption" type="submit">
                                       <span></span>
                                    </div>
                                    <div class="col-md-3 " style="margin-top:20px;" >
                                       <input  class="btn btn-primary" value="Delete Image" name="deleteimage" type="submit">
                                       <span></span>
                                    </div>
                                 </div>
                              </div>
                              <div ></div>
                           </div>
                        </form>
                     </div>
                     @endif
                     @endif
                     <form method="post" action="{{route('galleryimage')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="padding-left-0" style="margin-bottom:-10px;">
                           <label>Add Images:</label>
                        </div>
                        <div class="padding-left-0 ">
                           <div class="col-md-3 padding-bottom-25 padding-left-0" style="margin-top:20px;" >
                              <div class="btn btn-primary"><input type="file" id="galleryimages" name="galleryimage"></div>
                           </div>
                        </div>
                        <div id="uploadpreview" class="editimage col-md-12">
                           <div class="col-md-3">
                              <img  class="response-img" id="image"  height="200" width="200">
                           </div>
                           <div class="col-md-9">
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Caption:</label>
                                 <div class="col-md-12">
                                    <input class="form-control" type="text" name="caption">
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-3" style="margin-top:20px;" >
                                       <input  class="btn btn-primary" value="Upload" type="submit">
                                       <span></span>
                                    </div>
                                 </div>
                              </div>
                              <div >
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div id="menu1" class="tab-pane fade">
                  @if($videos!=null)
                  @if($videocount==1)
                  <div  id="videoedit"  class="col-md-12 padding-left-0 margin-bottom-15">
                     <form method="post" action={{route('editvideo')}}  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$videos->id}}" name="id">
                        <div class="col-md-9 padding-left-0">
                           <div class="form-group">
                              <label class="col-md-3 control-label">Youtube video link:</label>
                              <div class="col-md-12 padding-left-0">
                                 <input class="form-control" type="text" name="link" value="{{$videos->link}}">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Description:</label>
                              <div class="col-md-12 padding-left-0">
                                 <textarea class="form-control"  id="desc" maxlength="1000" name="desc" style="margin-top:10px;" rows="5">{{$videos->desc}}</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-3" style="margin-top:20px;" >
                                 <input  class="btn btn-primary" value="Update Description" name="update" type="submit">
                                 <span></span>
                              </div>
                              <div class="col-md-3" style="margin-top:20px;" >
                                 <input  class="btn btn-primary" value="Delete Video" name="delete" type="submit">
                                 <span></span>
                              </div>
                           </div>
                           <div >
                           </div>
                        </div>
                     </form>
                  </div>
                  @else
                  @foreach($videos as $video)
                  <div  id="videoedit"  class="col-md-12 padding-left-0 margin-bottom-15">
                     <form method="post" action={{route('editvideo')}}  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$video->id}}">
                        <div class="col-md-9 padding-left-0">
                           <div class="form-group">
                              <label class="col-md-3 control-label">Youtube video link:</label>
                              <div class="col-md-12 padding-left-0">
                                 <input class="form-control" type="text" name="link" value="{{$video->link}}">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Description:</label>
                              <div class="col-md-12 padding-left-0">
                                 <textarea class="form-control"  id="desc" maxlength="1000" name="desc" style="margin-top:10px;" rows="5">{{$video->desc}}</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-3" style="margin-top:20px;" >
                                 <input  class="btn btn-primary" value="Update Description" name="update" type="submit">
                                 <span></span>
                              </div>
                              <div class="col-md-3" style="margin-top:20px;" >
                                 <input  class="btn btn-primary" value="Delete Video" name="delete" type="submit">
                                 <span></span>
                              </div>
                           </div>
                           <div >
                           </div>
                        </div>
                     </form>
                  </div>
                  @endforeach
                  @endif
                  @endif
                  <div class="margin-bottom-15" style="margin-top:15px;">  <button id="addvideo"  class="btn btn-primary" style="margin-bottom:0;">Add a video</button></div>
                  <div  id="videoform"  class="col-md-12 padding-left-0 margin-bottom-15">
                     <form method="post" action="{{route('addvideo')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-9 padding-left-0">
                           <div class="form-group">
                              <label class="col-md-3 control-label">Youtube video link:</label>
                              <div class="col-md-12 padding-left-0">
                                 <input class="form-control" type="text" name="link">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Description:</label>
                              <div class="col-md-12 padding-left-0">
                                 <textarea class="form-control"  id="desc" maxlength="1000" name="desc" style="margin-top:10px;" rows="5"></textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-3" style="margin-top:20px;" >
                                 <input  class="btn btn-primary" value="Submit" type="submit">
                                 <span></span>
                              </div>
                           </div>
                           <div >
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
        <h6 class="graytext">Physical Details</h6>
        <hr>
        <div class="row">
          <div  id="physicaldetailsform"  class="col-md-12 padding-left-0 margin-bottom-15">
             <form method="post" action="{{route('postphysicaldetails')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-9">
                  <div class="section">

       <div>
         <fieldset>
            <div class="form-group">
             <label>Height:</label>

                <input class="form-control" type="text" placeholder="in cms" name="height">

          </div>
         </fieldset>
         <fieldset>
           <label>Weight:</label>
             <input class="form-control" type="text" placeholder="in cms" name="weight">
         </fieldset>
      <fieldset>
        <div class="form-group">

       <label>Skin Colour:</label>
             <select  class="form-control" name="skincolour" id="skincolour" >
<option>(Optional)</option>
 <option value="10">Black</option>
 <option value="465">Brown</option>
 <option value="12">Olive</option>
 <option value="13">Tanned</option>
 <option value="11">White</option>
 <option value="14">Other</option>
</select>
</div>
           </fieldset>

           <fieldset>
             <div class="form-group">

            <label>Eye Colour:</label>
                  <select  class="form-control" name="eyecolour" id="eyecolour" >

      <option>(Optional)</option>
       <option value="289">Black </option>
       <option value="290">Blue </option>
       <option value="291">Brown </option>
       <option value="292">Green </option>
       <option value="293">Grey </option>
       <option value="294">Hazel </option>

     </select>
     </div>
                </fieldset>
        <fieldset>
<div class="form-group">
          <label>Hair Length</label>
             <select class="form-control" name="hairlength" id="hairlength" >
<option>(Optional)</option>
 <option value="243">None </option>
 <option value="244">Short </option>
 <option value="245">Medium </option>
 <option value="246">Long </option>

</select></div>
           </fieldset>


  <fieldset>
  <div class="form-group">
 <label>Hair Type</label>
 <select class="form-control" name="hairtype" id="hairtype">
<option>(Optional)</option>
 <option value="247">Straight</option>
 <option value="248">Wavy</option>
 <option value="249">Curly</option>
 <option value="250">Afro</option>
 <option value="251">Bald</option>
</select>
</div>
 </fieldset>
 <fieldset>
     <div class="form-group"><label>Hair color</label>
						<select name="haircolour" id="haircolour" class="form-control">
	<option value="0">(Optional)</option>
	<option value="236">Auburn </option>
	<option value="237">Black </option>
	<option value="238">Blonde </option>
	<option value="239">Brown </option>
	<option value="240">Grey </option>
	<option value="241">Red </option>
	<option value="242">Other </option>

</select></div>
					</fieldset>


       </div>


       <div class="form-group">
       <div class="col-md-3 padding-left-0 " >
          <input  class="btn btn-primary" value="Update" name="update" type="submit">
          <span></span>
       </div>
     </div>
                </div>
             </form>
          </div>
        </div>
      </div>
   </div>
</div>
</div>
@stop
