@extends('templates.default')
@section('content')
<div id="profilecontent">
<div id="cover">
  <div class="container">
    <div class="row visible-lg visible-md visible-sm">
  <div class="col-xs-3 col-sm-3 col-lg-2 col-md-2" id="profilepicturelg">
    <img class="img-rounded img-responsive profilepic" style="height:200px;width:150px" src="https://s-media-cache-ak0.pinimg.com/originals/86/a0/96/86a096599588356a8b8553f46739fa14.jpg">
  </div>
  <div id="userdetailslg" class="col-xs-8 col-sm-7 col-lg-10 col-md-10">
    <div class="col-xs-12" >
      <h4 class="cloud" style="margin-bottom:-10px;">Manikandan Swaminathan</h4>
    </div>
    <div class="col-xs-12">
      <h6  class="cloud" style="margin-bottom:-10px;">Actor</h6>
    </div>
    <div class="col-xs-12">
      <h6 class="cloud" style="margin-bottom:-10px;">Chennai</h6>
    </div>
  </div>

</div>
<div id="profilepicsm" class="visible-xs ">
  <div id="profilepicturesm" class="col-xs-8" >
    <img class="img-rounded img-responsive profilepic" style="height:200px;width:150px" src="https://s-media-cache-ak0.pinimg.com/originals/86/a0/96/86a096599588356a8b8553f46739fa14.jpg">
  </div>
</div>

</div>
</div>

<div id="userdetailssm" class="row visible-xs">
  <div class="col-xs-offset-2 col-xs-8">
    <div class="col-xs-12" >
      <h4 style="margin-bottom:-10px; color:#2d2c2c">Manikandan Swaminathan</h4>
    </div>
    <div class="col-xs-12">
      <h6 style="margin-bottom:-10px; color:#2d2c2c">Actor</h6>
    </div>
    <div class="col-xs-12">
      <h6 style="margin-bottom:-10px; color:#2d2c2c">Chennai</h6>
    </div>
  </div>
</div>
<div class="container">
  <div id="about" class="row col-xs-offset-2 col-sm-offset-3 col-md-offset-2 col-lg-offset-2">
    <div class="col-xs-10">
    <p class="graytext visible-lg visible-md" style="text-align:justify">This code of ethics should reflect the standards that are put forth by the profession and the expectations that the profession has for those who work in this field. When developing the code of ethics I reflected on what has been
      important to me in my career in terms of tecshnology, ethics, and safety in the military and in my current career. </p>
      <p class="graytext visible-sm visible-xs" style="padding-top:10px; text-align:justify">This code of ethics should reflect the standards that are put forth by the profession and the expectations that the profession has for those who work in this field. When developing the code of ethics I reflected on what has been
        important to me in my career in terms of tecshnology, ethics, and safety in the military and in my current career. </p>
  </div>
</div>
</div>
<div id="contentnav">
  <div class="container">
    <div class="col-xs-12">
      <nav  id ="contentnavbar"class="navbar navbar-inverse navbar-embossed visible-lg visible-md visible-sm" role="navigation">
        <div class="navbar-header">

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#fakelink">Gallery</a></li>

              <li><a href="#" >Videos</a></li>


            <li><a href="#fakelink">Experience</a></li>
           </ul>
          </div><!-- /.navbar-collapse -->
      </nav><!-- /navbar -->
    </div>
  </div>
</div>
<div id="contentwrapper" class="container visible-lg visible-md visible-sm" style="margin-bottom:25px;">
<div id="contentsec" class="container">
<i class="row fa fa-file-image-o fa-lg"  aria-hidden="true"></i>
<div class="row">
  <p class="graytext">
    No Images available
  </p>
</div>
</div>
</div>
</div>
@stop
