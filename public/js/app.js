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






/*Accordion*/




/*Accordion*/
