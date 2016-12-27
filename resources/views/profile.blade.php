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
    <div id="message" class="col-xs-2"  style="margin-top:10px; margin-left:3px; color:#e0dcdc; " data-toggle="modal" data-target="#myModal">
  <i class="fa fa-envelope fa-2" style="color:#e0dcdc;cursor:pointer" aria-hidden="true"  > </i><span style="color:#e0dcdc;cursor:pointer;"><a> Message</a></span>
    </div>
    <div id="followers" class="col-xs-2"  style="margin-top:10px; margin-left:3px; color:#e0dcdc; " >
  <span style="color:#e0dcdc;cursor:pointer;"> 0 <a>Followers</a></span>
    </div>
    <div id="following" class="col-xs-2"  style="margin-top:10px; margin-left:3px; color:#e0dcdc; " >
  <span style="color:#e0dcdc;cursor:pointer;"> 14 <a>Following</a></span>
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
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
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
        <div class="gallerylg hidden-lg hidden-md" style="margin-top:-25px">
          <div id="mobileimg" class="zoom-gallery">
            <div >
        	<a id="small" class="col-xs-12"  href="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg" caption="Into The Blue" style="height:200px; width:200px">
        		<img  src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"  height="200" width="200">
        	</a>
        </div>
          <div >
        	<a id="small" class="col-xs-12" href="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg" caption="Light Sabre" style="height:200px; width:200px">
        		<img id="small" src="http://www.ranthollywood.com/wp-content/uploads/2014/08/1.-Ryan-Gosling.jpg"  height="200" width="200">
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





<div id="videos" class="container">
    <div class="col-xs-8  col-sm-4  " >



    <div class="card ">
            <div class="overlay box-shadow"   >
        </div>
          <i class="fa fa-play-circle fa-5x video card-img-top " data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-toggle="modal" data-target="#videoModal"></i>
      <img class="box-shadow" src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"
       height="200" width="200" >

    </div>

</div>
<div class="col-xs-8  col-sm-4" >



<div class="card ">
        <div class="overlay box-shadow"   >
    </div>
      <i class="fa fa-play-circle fa-5x video card-img-top " data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-toggle="modal" data-target="#videoModal"></i>
  <img class="box-shadow" src="https://upload.wikimedia.org/wikipedia/en/1/18/Inception_OST.jpg"
   height="200" width="200" >

</div>

</div>
  </div>

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

          <div class="row center-align"  style="padding:20px;">

          <div class=" col-xs-12" >

            <table class="physicaldetailssm table" cellspacing="0">
              <tbody><tr>
                <td>
                  <div class="th">Height:</div> 170 cm
                </td><td>
                  <div class="th">Waist:</div> 63 cm
                </td>
              </tr><tr>
                <td>
                  <div class="th">Weight:</div> 50 kg
                </td><td>
                  <div class="th">Hips:</div> 83 cm
                </td>
              </tr><tr>
                <td>
                  <div class="th">Hair colour:</div> Brown
                </td>
                <td>
                  <div class="th">Chest:</div> 81 cm
                </td>
              </tr><tr>
                <td>
                  <div class="th">Skin colour:</div> Tanned
                </td><td>
                  <div class="th">Hair length:</div> Long
                </td>
              </tr><tr>
                <td>
                  <div class="th">Eye colour:</div> Brown
                </td><td>
                  <div class="th">Hair type:</div> Straight
                </td>
              </tr><tr>

              </tr>
            </tbody></table>

          </div>
          </div>

          <!--     <div class="row center-align">
                      <i class="row fa fa-address-card fa-lg"  aria-hidden="true"></i>
                      <div class="row">
                        <p class="graytext">
                          No details available
                        </p>
                      </div>
                    </div>     -->



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


          <div class="row container">

            <div data-section="3" id="section3" class="accordion section-t" style="display: block;">
            								<div class="accordion__header clearfix">
            									<h5 class="graytext center-align">
            										<span  style="margin: 0 0 2px 0;"></span>
            										Credits &amp; Courses
            									</h5>
            								</div>
            								<div class=" center-align">
            									<div class="experiencelist">

            										<div class="clearfix"></div>
            										<span><h6>2016</h6><ul><li>Ignite Elite Artists : <i>Actress</i></li></ul></span>
            									</div>
            								</div>
            							</div>

          </div>


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
    <p class="graytext visible-lg visible-md" style="text-align:justify">This code of ethics should reflect the standards that are put
       forth by the profession and the expectations that the profession has for those who work in this field. When developing the code of ethics I reflected on what has been
      important to me. </p>
      </div>
</div>
</div>

<div id="contentwrapper" class="container hidden-xs hidden-sm" style="margin-bottom:25px;">

<div class="row">
<div class="col-lg-7">
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="tab" href="#home">Gallery</a></li>
    <li><a data-toggle="tab" href="#menu1">Videos</a></li>
    <li><a data-toggle="tab" href="#menu2">Physical details</a></li>
      <li><a data-toggle="tab" href="#menu3">Experience</a></li>
  </ul>
</div>
</div>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


      <div class="gallerylg hidden-sm hidden-xl">
        <div id="desktopimg" class="zoom-gallery">

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
    <div id="menu1" class="tab-pane fade">
      <div class="gallerylg hidden-sm hidden-xl" >

              <div id="videos" class="row">


          <div class="col-xs-3 col-sm-3 padding-all-5" >



            <div class="card ">
                    <div class="overlay box-shadow"   >
                </div>
                  <i class="fa fa-play-circle fa-5x video card-img-top " data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-toggle="modal" data-target="#videoModal"></i>
              <img class="box-shadow" src="http://i.dailymail.co.uk/i/pix/2016/01/05/08/0FC6C4F300000514-3385023-image-a-6_1451983721020.jpg"
               height="200" width="200" >

            </div>

      </div>
      <div class="col-xs-3 col-sm-3 padding-all-5" >



        <div class="card ">
                <div class="overlay box-shadow"   >
            </div>
              <i class="fa fa-play-circle fa-5x video card-img-top " data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-toggle="modal" data-target="#videoModal"></i>
          <img class="box-shadow" src="https://upload.wikimedia.org/wikipedia/en/1/18/Inception_OST.jpg"
           height="200" width="200" >

        </div>

  </div>



  </div>
</div>
</div>
<div id="menu2" class="tab-pane fade">
<div class="row physicaldetailslg" style="padding:20px;">

<div class=" col-lg-12" >

  <table class="physicaldetailslg table table-striped" cellspacing="0">
  	<tbody><tr>
  		<td>
  	    <div class="th">Height:</div> 170 cm
      </td><td>
  	    <div class="th">Waist:</div> 63 cm
      </td>
  	</tr><tr>
  		<td>
  	    <div class="th">Weight:</div> 50 kg
      </td><td>
  	    <div class="th">Hips:</div> 83 cm
      </td>
  	</tr><tr>
  		<td>
  	    <div class="th">Hair colour:</div> Brown
      </td>
      <td>
        <div class="th">Chest:</div> 81 cm
      </td>
  	</tr><tr>
  		<td>
  	    <div class="th">Skin colour:</div> Tanned
      </td><td>
  	    <div class="th">Hair length:</div> Long
      </td>
  	</tr><tr>
  		<td>
  	    <div class="th">Eye colour:</div> Brown
      </td><td>
  	    <div class="th">Hair type:</div> Straight
      </td>
  	</tr><tr>

  	</tr>
  </tbody></table>

</div>
</div>

</div>
<div id="menu3" class="tab-pane fade">





<div class="row container">

  <div data-section="3" id="section3" class="center-align" style="display: block;">
  								<div class="accordion__header clearfix">
  									<h4 class="graytext ">
  										<span  style="margin: 0 0 2px 0;"></span>
  										Credits &amp; Courses
  									</h4>
  								</div>
  								<div class=" center-align">
  									<div class="experiencelist">

  										<div class="clearfix"></div>
  										<span><h5>2016</h5><ul><li>Ignite Elite Artists : <i>Actress</i></li></ul></span>
  									</div>
  								</div>
  							</div>

</div>
</div>
      <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>




<!--
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
            </div>
        </nav>
      </div>
    </div>
  </div>

-->


<div id="contentsec" class="container">
<!--<i class="row fa fa-file-image-o fa-lg"  aria-hidden="true"></i>
<div class="row">
  <p class="graytext">
    No Images available
  </p>
</div>
-->
<!--
<div class="contentlg">
<div class="gallerylg hidden-sm hidden-xl">
  <div id="desktopimg" class="zoom-gallery" >

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
-->
</div>
</div>
</div>


<div class="modal fade" id="sendmessage" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">



    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Message Manikandan</h4>
      </div>
      <div class="modal-body">

        <form id="sendmessage" class="form">
          <div class="form-group">

            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Send Message</button>
      </div>
    </div><!-- /.modal-content -->




  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="followers" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Following</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Send Message</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal  -->



<div class="modal fade" id="following" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Following</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Send Message</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal  -->





@stop
