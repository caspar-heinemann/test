
	$(document).ready(function(){
	   // cache the window object
	   $window = $(window);

	   $('section[data-type="background"]').each(function(){
		 // declare the variable to affect the defined data-type
		 var $scroll = $(this);
     var initialScrollTop = $scroll.scrollTop();
     var windowHeight = $(document).height();
     var scrollSpeed = $scroll.data('speed');

		  $(window).scroll(function() {
			// HTML5 proves useful for helping with creating JS functions!
			// also, negative value because we're scrolling upwards
			var yPos = ((initialScrollTop + $window.scrollTop() / windowHeight))*scrollSpeed*20;

      console.log(windowHeight);
			// background position
			var coords = '50% '+ yPos + '%';

			// move the background
			$scroll.css({ backgroundPosition: coords });
		  }); // end window scroll
	   });  // end section function
	}); // close out script

	/* Create HTML5 element for IE */
	document.createElement("section");



/*test




test*/

	/* ----------------------------------------------------Case Studies // image animation */
	$elem1 = jQuery('#xcaseOne');

	var scrollState = 'top';

	jQuery(window).scroll(function(){

		var scrollPos = $(window).scrollTop();

		if( ( scrollPos != 0 ) && ( scrollState === 'top' ) ) {
			$elem1.stop().animate({marginTop: '0px'}, 400);

			scrollState = 'scrolled';
		}
		else if( ( scrollPos === 0 ) && ( scrollState === 'scrolled' ) ) {
			$elem1.stop().animate({marginTop: '380px'}, 400);

			scrollState = 'top';
		}

	});


	$elem2 = jQuery('#caseTwo');
	var scrollState = 'top';

	jQuery(window).scroll(function(){

		var scrollPos = $(window).scrollTop();

		if( ( scrollPos >= 600 ) && ( scrollState === 'top' ) ) {

			 $elem2.stop().animate({marginLeft: '0px', zIndex:'0'}, 400);
			scrollState = 'scrolled';
		}
		else if( ( scrollPos >= 600 ) && ( scrollState === 'scrolled' ) ) {

			$elem2.stop().animate({marginLeft: '0px'}, 400);
			scrollState = 'top';
		}

	});



	$elem3 = jQuery('#caseThree');

	var scrollState = 'top';

	jQuery(window).scroll(function(){

		var scrollPos = $(window).scrollTop();

		if( ( scrollPos >= 900 ) && ( scrollState === 'top' ) ) {
			$elem3.stop().animate({marginTop: '0px'}, 400);

			scrollState = 'scrolled';
		}
		else if( ( scrollPos >= 900 ) && ( scrollState === 'scrolled' ) ) {
			$elem3.stop().animate({marginTop: '400px'}, 400);

			scrollState = 'top';
		}

	});










/* ----------------------------------------------------Service // image animation */

/*
	$elem4 = jQuery('#serviceIcon1');

	var scrollState = 'top';

	jQuery(window).scroll(function(){

		var scrollPos = $(window).scrollTop();

		if( ( scrollPos === 0 ) && ( scrollState === 'top' ) ) {
			$elem4 .hide(this).transition({ scale: 0 });

			scrollState = 'scrolled';
		}
		else if( ( scrollPos >= 700 ) && ( scrollState === 'scrolled' ) ) {
			$elem4 .show(this).transition({ scale: 0.8 });

			scrollState = 'top';
		}

	});


	$elem5 = jQuery('#serviceIcon2');

	var scrollState = 'top';

	jQuery(window).scroll(function(){

		var scrollPos = $(window).scrollTop();

		if( ( scrollPos === 0 ) && ( scrollState === 'top' ) ) {
			$elem5 .hide(this).transition({ scale: 0 });

			scrollState = 'scrolled';
		}
		else if( ( scrollPos >= 800 ) && ( scrollState === 'scrolled' ) ) {
			$elem5 .show(this).transition({ scale: 0.8 });

			scrollState = 'top';
		}

	});

*/

    /**



/*---------------------------------Open Modal instantly---------
$('#myModal').modal('show');*/

/* ----------------------------------------------------Product// image animation */

	jQuery(".productOne").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen1.jpg'>").fadeIn(2000);
	});

	jQuery(".productTwo").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen2.jpg'>").fadeIn(2000);
	});

	jQuery(".productThree").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen3.jpg'>").fadeIn(2000);
	});

	jQuery(".productFour").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen4.jpg'>").fadeIn(2000);
	});

	jQuery(".productFive").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen5.jpg'>").fadeIn(2000);
	});

	jQuery(".productSix").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen6.jpg'>").fadeIn(2000);
	});


	jQuery(".productSeven").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen7.jpg'>").fadeIn(2000);
	});

	jQuery(".productEight").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen8b.jpg'>").fadeIn(2000);
	});
	jQuery(".productNine").click(function() {
		  $("#product-container").html("<img src='/wp-content/themes/meg_de/images/product/screen9.jpg'>").fadeIn(2000);
	});


	jQuery(".productOne").click(function() {
		 $.scrollTo( '#target', 800, {easing:'elasout'} );
	});

/* ----------------------------------------------------Image Tint Team*/




jQuery(function($) {



});


/* ----------------------------------------------------Referenzen subnavigation fix// image animation */
	jQuery(function($) {
		function fixDiv() {
		  var $cache = $('.clientNav');
      var header_height = $("nav.navbar").height();

		  if ($(window).scrollTop() > 150)
			$cache.css({'position': 'fixed', 'top': header_height, 'border-top':'1px solid #ccc'});
		  else
			$cache.css({'position': 'relative', 'top': '0px'});
		}
		$(window).scroll(fixDiv);
		fixDiv();
	});

/* ----------------------------------------------------About Flip Team // image animation */

    $('.flip').mouseover(function(){
        $(this).find('.card').addClass('flipped').mouseleave(function(){
            $(this).removeClass('flipped');
        });
        return false;
    });

  $('.carousel').carousel({
      interval: 4000
    });

/* ----------------------------------------------------Smooth Transition */

$(document).ready(function(){

 $(".heroPhone").css('margin', '-70px');

 $(".heroText").css({ "margin-left" : "-70px", "opacity" : "1.0" } );


});

 $elemIcon1 = jQuery('#homeIconContainerxx');
	var scrollState = 'top';

	jQuery(window).scroll(function(){

		var scrollPos = $(window).scrollTop();

		if( ( scrollPos >= 300 ) && ( scrollState === 'top' ) ) {

			 $elemIcon1.stop().animate({width: '400px', height:'100%'}, 2000,'easeInQuint');
			scrollState = 'scrolled';
		}
		else if( ( scrollPos >= 300 ) && ( scrollState === 'scrolled' ) ) {

			$elemIcon1.stop().animate({width: '0px', height:'40px'}, 2000,'easeInQuint');
			scrollState = 'top';
		}

	});

jQuery(function($) {
$(".jobSection").hover(function() {
    $(this).addClass("sectionHover");
}, function() {
    $(this).removeClass("sectionHover");
});
});

jQuery(function($) {
$(".jobSectionMain").hover(function() {
    $(this).addClass("sectionHover");
}, function() {
    $(this).removeClass("sectionHover");
});
});


jQuery(function($) {
$(".hover").hover(function() {
    $(this).addClass("sectionHover");
}, function() {
    $(this).removeClass("sectionHover");
});
});

jQuery(function($) {
$("#sectionWhiteJobs").hover(function() {
    $(this).addClass("jobsHover");
}, function() {
    $(this).removeClass("jobsHover");
});
});

jQuery(function($) {
$(".jobWhite").hover(function() {
    $(".jobPrint").addClass("jobsPrintHover");
}, function() {
    $(".jobPrint").removeClass("jobsPrintHover");
});
});



jQuery(function($) {
$(".panel-heading").hover(function() {
    $(this).addClass("sectionHoverTitle");
}, function() {
    $(this).removeClass("sectionHoverTitle");
});
});


jQuery(function($) {

$('a[href^="#"]').filter('a[href="#secondHome"], a[href="#umsatzquellen"],a[href="#service"],a[href="#app-erstellung"],a[href="#app-promotion"],a[href="#analyse"],a[href="#messe-app"],a[href="#konferenz-app"],a[href="#meeting-app"],a[href="#go"],a[href="#top"],a[href="#funktionen"],a[href="#registrierung"],a[href="#kunden"],a[href="#testimonials"],a[href="#team-descriptions"],a[href="#netzwerke"],a[href="#navigation"],a[href="#informationen"],a[href="#datenmengen"],a[href="#schnell-und-einfach"],a[href="#internetverbindung"], a[href="#interessante-aussteller"]').bind('click.smoothscroll',function (e) {
    e.preventDefault();
    var target = this.hash;
    $target = $(target);
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top -120
    }, 2000,'easeOutQuint', function () {
        window.location.hash = target;
    });
});

});
/* ----------------------------------------------------Product // icons animation */



jQuery(function($) {
	var controller = $.superscrollorama();
	// individual element tween examples

	if ($('#service-gfx1').length > 0) {
	  controller.addTween('#service-gfx1', TweenMax.from( $('#service-gfx1'), 0.5,{css:{scale:0.8, opacity:0}}),
	  0, // scroll duration of tween (0 means autoplay)
    -250 );// offset the start of the tween by 200 pixels
	}
	if ($('#service-gfx1').length > 0) {
	controller.addTween('#service-gfx2', TweenMax.from( $('#service-gfx2'), 0.5,{css:{scale:0.8, opacity:0}}),
	  0, // scroll duration of tween (0 means autoplay)
    -250 );// offset the start of the tween by 200 pixels
	}
	if ($('#service-gfx1').length > 0) {
	controller.addTween('#service-gfx3', TweenMax.from( $('#service-gfx3'), 0.5,{css:{scale:0.8, opacity:0}}),
	  0, // scroll duration of tween (0 means autoplay)
    -250 );// offset the start of the tween by 200 pixels
	}
	if ($('#service-gfx1').length > 0) {
	controller.addTween('#service-gfx4', TweenMax.from( $('#service-gfx4'), 0.5,{css:{scale:0.8, opacity:0}}),
	  0, // scroll duration of tween (0 means autoplay)
    -250 );// offset the start of the tween by 200 pixels
	}


	if ($('#caseOneAn').length > 0) {
	  controller.addTween('#caseOneAn', TweenMax.from( $('#caseOneAn'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseTwoAn').length > 0) {
	controller.addTween('#caseTwoAn', TweenMax.from( $('#caseTwoAn'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseThreeAn').length > 0) {
	controller.addTween('#caseThreeAn', TweenMax.from( $('#caseThreeAn'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseFourAn').length > 0) {
	controller.addTween('#caseFourAn', TweenMax.from( $('#caseFourAn'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseFiveAn').length > 0) {
	controller.addTween('#caseFiveAn', TweenMax.from( $('#caseFiveAn'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}

	if ($('#caseTwoHtpc').length > 0) {
	  controller.addTween('#caseTwoHtpc', TweenMax.from( $('#caseTwoHtpc'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseThreeHtpc').length > 0) {
	controller.addTween('#caseThreeHtpc', TweenMax.from( $('#caseThreeHtpc'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseFourHtpc').length > 0) {
	controller.addTween('#caseFourHtpc', TweenMax.from( $('#caseFourHtpc'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseFiveAn').length > 0) {
	controller.addTween('#caseFiveHtpc', TweenMax.from( $('#caseFiveHtpc'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}

	if ($('#caseTwoXam').length > 0) {
	  controller.addTween('#caseTwoXam', TweenMax.from( $('#caseTwoXam'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseThreeXam').length > 0) {
	controller.addTween('#caseThreeXam', TweenMax.from( $('#caseThreeXam'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseFourXam').length > 0) {
	controller.addTween('#caseFourXam', TweenMax.from( $('#caseFourXam'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}
	if ($('#caseFiveXam').length > 0) {
	controller.addTween('#caseFiveXam', TweenMax.from( $('#caseFiveXam'), 0.5,{css:{scale:0.8, opacity:0}, ease:Quad.easeInOut}));
	}


	});





