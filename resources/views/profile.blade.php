@extends('templates.default')
@section('content')
<div id="profilecontent" style="width:100%">
<div id="cover">
  <div class="container">
    <div class="row visible-lg visible-md ">
  <div class="col-xs-3 col-sm-3 col-lg-2 col-md-3" id="profilepicturelg">
    <img class="img-responsive profilepic" style="height:200px;width:150px" src="https://s-media-cache-ak0.pinimg.com/originals/86/a0/96/86a096599588356a8b8553f46739fa14.jpg">
  </div>
  <div id="userdetailslg" class="col-xs-8 col-sm-7 col-lg-10 col-md-9">
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
<div id="profilepicsm" class="visible-xs visible-sm col-xs-12 col-sm-12" >
  <div id="profilepicturesm" >
    <img class="img-rounded img-responsive profilepic" style="height:200px;width:150px" src="https://s-media-cache-ak0.pinimg.com/originals/86/a0/96/86a096599588356a8b8553f46739fa14.jpg">
  </div>
</div>

</div>
</div>

<div class="lobar">
  s
</div>

<div id="userdetailssm" class="row visible-xs visible-sm" style="margin-bottom:12%">
  <div class="col-xs-offset-2 col-xs-8">
    <div class="col-xs-12 col-sm-12" style="text-align:center">
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



<div class="contentwrappersm hidden-lg hidden-md">








<div class="accordionsec col-xs-12 col-md-12">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">About</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body graytext">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Gallery</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">

      <!--<div class="row col-xs-offset-5 col-sm-offset-5">
          <i class="row fa fa-file-image-o fa-lg"  aria-hidden="true"></i>
          <div class="row">
            <p class="graytext">
              No Images available
            </p>
          </div>
        </div> -->
        <div class="gallerylg hidden-lg hidden-md col-xs-offset-1" style="margin-top:-25px">
          <div class="zoom-gallery">
            <div >
        	<a  class="col-xs-6"  href="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg" caption="Into The Blue" style="height:200px; width:200px">
        		<img src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"  height="200" width="200">
        	</a>
        </div>
          <div >
        	<a  class="col-xs-6" href="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg" caption="Light Sabre" style="height:200px; width:200px">
        		<img src="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg"  height="200" width="200">
        	</a>
            </div>

        </div>
        </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Videos</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse ">
        <div class="panel-body">

          <!--<div class="row center-align">
              <i class="row fa fa-file-video-o fa-lg"  aria-hidden="true"></i>
              <div class="row">
                <p class="graytext">
                  No Videos available
                </p>
              </div>
            </div>-->


        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Physical Details</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">



          <!--  <div class="row center-align">
                      <i class="row fa fa-address-card fa-lg"  aria-hidden="true"></i>
                      <div class="row">
                        <p class="graytext">
                          No details available
                        </p>
                      </div>
                    </div> -->



                  </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Experience</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">

          <!--<div class="row center-align">
                    <i class="row fa fa-address-card fa-lg"  aria-hidden="true"></i>
                    <div class="row">
                      <p class="graytext">
                        No details available
                      </p>
                    </div>
                  </div>-->


        </div>
      </div>
    </div>
  </div>
</div>







<!--
<div class="contentsm">
  <div class="section">
  <div id="aboutsm" class="col-xs-12 col-sm-12 sectionheader">
    <h4>About</h4>
  </div>
  <div id="aboutcont" class="subsection col-xs-12 col-sm-12">
    <p class="graytext visible-sm visible-xs" style="padding-top:10px; text-align:justify">This code of ethics should reflect the standards that are put forth by the profession and the expectations that the profession has for those who work in this field. When developing the code of ethics I reflected on what has been
      important to me in my career in terms of tecshnology, ethics, and safety in the military and in my current career. </p>

  </div>
</div>
</div>


<div class="contentsm">
  <div class="section">
  <div id="gallerysm" class="col-xs-12 col-sm-12 sectionheader">
    <h4>Gallery</h4>
  </div>
  <div id="gallerycont" class="subsection col-xs-12 col-sm-12">

w
  </div>
</div>
</div>


<div class="contentsm">
  <div class="section">
  <div id="videosm" class="col-xs-12 col-sm-12 sectionheader">
    <h4>Videos</h4>
  </div>
  <div id="videocont" class="subsection col-xs-12 col-sm-12">

w
  </div>
</div>
</div>




<div class="contentsm">
  <div class="section">
  <div id="physicamsm" class="col-xs-12 col-sm-12 sectionheader">
    <h4>Physical Details</h4>
  </div>
  <div id="physicalcont" class="subsection col-xs-12 col-sm-12">
w

  </div>
</div>
</div>



<div class="contentsm">
  <div class="section">
  <div id="experiencesm" class="col-xs-12 col-sm-12 sectionheader">
    <h4>Experience</h4>
  </div>
  <div id="experiencecont" class="subsection col-xs-12 col-sm-12">

w
  </div>
</div>
</div>

-->
</div>

<div class="container">
  <div id="about" class="row visible-lg visible-md col-lg-offset-2 col-md-offset-2">
    <div class="col-xs-10">
    <p class="graytext visible-lg visible-md" style="text-align:justify">This code of ethics should reflect the standards that are put forth by the profession and the expectations that the profession has for those who work in this field. When developing the code of ethics I reflected on what has been
      important to me in my career in terms of tecshnology, ethics, and safety in the military and in my current career. </p>
      </div>
</div>
</div>

<div id="contentwrapper" class="container hidden-xs hidden-sm" style="margin-bottom:25px;">


  <div id="contentnav" class="visible-lg visible-md ">
    <div class="row" style="background-color:#2d2c2c">
      <div class="col-xs-12">
        <nav  id ="contentnavbar"class="navbar navbar-inverse navbar-embossed " role="navigation">
          <div class="navbar-header">

          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="#fakelink">Gallery</a></li>

                <li><a href="#" >Videos</a></li>

                  <li><a href="#" >Physical Details</a></li>


              <li><a href="#fakelink">Experience</a></li>
             </ul>
            </div><!-- /.navbar-collapse -->
        </nav><!-- /navbar -->
      </div>
    </div>
  </div>





<div id="contentsec" class="container">
<!--<i class="row fa fa-file-image-o fa-lg"  aria-hidden="true"></i>
<div class="row">
  <p class="graytext">
    No Images available
  </p>
</div>
-->
<div class="contentlg">
<div class="gallerylg hidden-sm hidden-xl">
  <div class="zoom-gallery" >

    <div class="col-xs-3 col-sm-3 padding-all-5" >
  <a href="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg" caption="Into The Blue" style="height:200px; width:200px">
    <img src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"  height="200" width="200">
  </a>
</div>
  <div class="col-xs-3 col-sm-3 padding-all-5" >
  <a   href="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg" caption="Light Sabre" style="height:200px; width:200px">
    <img src="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg"  height="200" width="200">
  </a>
    </div>
    <div class="col-xs-3 col-sm-3 padding-all-5" >
  <a href="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg" caption="Into The Blue" style="height:200px; width:200px">
    <img src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"  height="200" width="200">
  </a>
</div>
  <div class="col-xs-3 col-sm-3 padding-all-5" >
  <a   href="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg" caption="Light Sabre" style="height:200px; width:200px">
    <img src="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg"  height="200" width="200">
  </a>
    </div>
    <div class="col-xs-3 col-sm-3 padding-all-5" >
    <a   href="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg" caption="Light Sabre" style="height:200px; width:200px">
      <img src="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg"  height="200" width="200">
    </a>
      </div>

      <div class="col-xs-3 col-sm-3 padding-all-5" >
      <a   href="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg" caption="Light Sabre" style="height:200px; width:200px">
        <img src="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg"  height="200" width="200">
      </a>
        </div>


</div>
</div>
</div>
</div>
</div>
</div>
@stop
