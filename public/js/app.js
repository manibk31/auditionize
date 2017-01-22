document.getElementById('uploadpreview').style.display="none";
$(document).ready(function() {


	$('#mobileimg').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('caption');
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}

	});

  $('#desktopimg').magnificPopup({
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function(item) {
        return item.el.attr('caption');
      }
    },
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('img');
      }
    }

  });







});

$(function() {
   $(".video").click(function () {
     var theModal = $(this).data("target"),
     videoSRC = $(this).attr("data-video"),
     videoSRCauto = videoSRC;
     $(theModal + ' iframe').attr('src', videoSRCauto);
     $(theModal + ' button.close').click(function () {
       $(theModal + ' iframe').attr('src', videoSRC);
     });
   });
 });

 var text_max = 1000;


 $('#about').keyup(function() {
   var text_length = $('#about').val().length;
   var text_remaining = text_max - text_length;

   $('#count_message').html(text_remaining + ' remaining');
	 if(text_remaining<0)
	 {
		 $('#count_message').hide();
	 }
	 else
	 	{
				 $('#count_message').show();
		}

 });

 document.getElementById("galleryimages").onchange = function () {

		$('#uploadpreview').show();



     var reader = new FileReader();

     reader.onload = function (e) {
         // get loaded data and render thumbnail.
         document.getElementById("image").src = e.target.result;
     };

     // read the image file as a data URL.
     reader.readAsDataURL(this.files[0]);
 };



/*Accordion*/




/*Accordion*/
