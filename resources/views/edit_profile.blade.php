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
        <div class="editimage col-md-12">
        <div class="col-md-3">
        <img  class="response-img" src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"  height="200" width="200">
      </div>
      <div class="col-md-9">
        <div class="form-group">
          <label class="col-md-3 control-label">Caption:</label>
          <div class="col-md-12">
            <input class="form-control" type="text" name="caption">
          </div>
          <div class="form-group">

            <div class="col-md-3" style="margin-top:20px;" >
              <input  class="btn btn-primary" value="Update Caption" type="submit">
              <span></span>
            </div>
            <div class="col-md-3 " style="margin-top:20px;" >
              <input  class="btn btn-primary" value="Delete Image" type="submit">
              <span></span>
            </div>
          </div>
        </div>
        <div >
        </div>
        </div>
    </div>

<form method="post" action="{{route('galleryimage')}}">
    {{ csrf_field() }}
    <div class="padding-left-0" style="margin-bottom:-10px;">
      <label>Add Images:</label>
    </div>
  <div class="padding-left-0 ">
    <div class="col-md-3 padding-bottom-25 padding-left-0" style="margin-top:20px;" >
        <div class="btn btn-primary"><input type="file" id="galleryimages" name="galleryimage" /></div>
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

      </div>
    </div>



  </div>

</div>
</div>

</div>
</div>
@stop
