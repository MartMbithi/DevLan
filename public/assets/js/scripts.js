jQuery(function ($) {

    'use strict';
	
// =============================================
// BEGIN THEME SCRIPTS
// =============================================

	// =============================================
	// Page Loader
	// =============================================
	$('.page-loader').delay(500).fadeOut(500);
	
	// =============================================
	// Smooth Scroll
	// =============================================
	$(".goscroll").click(function (event) {
		event.preventDefault();
		//calculate destination place
		var dest = 0;
		if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
		  dest = $(document).height() - $(window).height();
		} else {
		  dest = $(this.hash).offset().top;
		}
		//go to destination
		$('html,body').animate({
		  scrollTop: dest
		}, 1000, 'easeOutQuad');
	});

// =============================================
// END THEME SCRIPTS
// =============================================
	
});

    /*====================================
    Fixed Header
    ======================================*/
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 480;
        if ($(window).scrollTop() > navHeight) {
            $('.header-sticky').addClass('on');
        } else {
            $('.header-sticky').removeClass('on');
        }
    });

(function($) {
	"use strict";

	// var easing = 'jswing';

	var RedQ = {

		redQ_init : function() {
			// RedQ.redQ_nav_hover();
			RedQ.redQ_small_submenu();
			// RedQ.redQ_navbar_toggle();
		},

		// redQ_nav_hover : function() {
		// 	$('.dropdown').on('mouseenter', function() {
		// 		var self = $(this);

		// 		self.find('.dropdown-menu').stop().slideDown(300, easing);
		// 	});

		// 	$('.dropdown').on('mouseleave', function() {
		// 		var self = $(this);

		// 		self.find('.dropdown-menu').stop().slideUp(300, easing);
		// 	});
		// },
		redQ_small_submenu: function() {
			var sel = $('li.dropdown ul.sub-menu li.dropdown');
			sel.addClass('has-caret');
			sel.append('<span class="sub-caret fa fa-caret-right"></span>');

			// var caret = $('.has-caret').on('click', function(e) {
			// 	e.preventDefault();
			// 	console.log('work');
			// 	$(this).find('.sub-menu').css('display', 'block');
			// });
		},
		redQ_navbar_toggle: function() {
			// $('.navbar-toggle').on('click', function() {
			// 	console.log('hello');
			// 	$('.collapse.navbar-collapse').toggleClass('in');
			// });
		},


	};

	RedQ.redQ_init();

})(jQuery);








 $(document).ready(function() {
                // $('.navbar-toggle').click(function(e){
                    
                //     e.preventDefault();
                //     $('.collapse.navbar-collapse').addClass('in');

                //     $('body').addClass('mobile-menu-open');
                //     $('.collapse.navbar-collapse').show().prop('id', 'mobile-menu-wrap');
                    
                // });

                // $('.mobile-menu-close').click(function(e){
                //     e.preventDefault();
                //     // $('.collapse.navbar-collapse').removeClass('in');
                //     $('body').removeClass('mobile-menu-open');

                //     // $('.collapse.navbar-collapse').removeClass('in').hide();
                    
                // });

                $('.navbar-toggle').click(function(e){
                            
                    e.preventDefault();
                    $('.collapse.navbar-collapse').addClass('in');

                    $('body').addClass('mobile-menu-open');
                    $('.collapse.navbar-collapse').show().prop('id', 'mobile-menu-wrap');
                    
                });

                $('.mobile-menu-close').click(function(e){
                    e.preventDefault();
                    // $('.collapse.navbar-collapse').removeClass('in');
                    $('body').removeClass('mobile-menu-open');

                    // $('.collapse.navbar-collapse').removeClass('in').hide();
                    
                });

                    // var width = $(window).width();
                    // console.log('window width: ' + width);

                    // var totalWidth = $('ul.nav').width();
                    // var listWidth = [];
                    // var totalListWidth = 0;

                    // $('ul.nav > li').each(function(){
                    //     totalListWidth = totalListWidth + $(this).outerWidth();
                    //     listWidth.push($(this).outerWidth());
                    // });

                    // console.log('Total list width: ' + totalListWidth);
                    // console.log('list width: ' + listWidth);

                    // console.log('Total width: ' + totalWidth);

                    // if( (totalWidth ) >= width) {
                    //     $('body').removeClass('mobile-menu-open');
                    //     $('.collapse.navbar-collapse.in').removeAttr('id');
                    //     $('.collapse.navbar-collapse.in').removeClass('in');
                    // } else {
                    //     $('style').text('@media (min-width:' + width + 'px) {div{ color:red !important; }}');
                    // }


                $( window ).resize(function() {
                    var width = $(window).width();

                    if ((width>=768)) {
                        $('body').removeClass('mobile-menu-open');
                        $('.collapse.navbar-collapse.in').removeAttr('id');
                        $('.collapse.navbar-collapse.in').removeClass('in');
                        
                    }
                });

                

            });
			
			
			

// =============================================
// Animate on Appear
// =============================================
	var wow = new WOW(
	  {
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       10,          // distance to the element when triggering the animation (default is 0)
		mobile:       false       // trigger animations on mobile devices (true is default)
	  }
	);
	wow.init();
