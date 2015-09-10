(function($, window){


	var wb = {
		setup : {
			test : function() {
				return true;
			},
			run : function() {

			}
		},
		slickjs : {
			test : function() {
				return true;
			},
			run : function() {
				$(document).ready(function() {
					$('.img-slider').slick({
						adaptiveHeight: false,
						autoplay: true,
						autoplaySpeed: 800,
						draggable: false,
						infinite: true,
						dots: false,
						fade: true,
						cssEase: 'linear',
						arrows: false,
						accessibility: false,
					});
				});
			}
		},slickNav : {
			test : function() {
				return true;
			},
			run : function() {
				$(document).ready(function(){
					$('#nav').slicknav({
						prependTo:'.mobile-nav',
						label: '',
					});
				});
			}
		},stickyHeader : {
			test : function() {
				return true;
			},
			run : function() {
				$(window).scroll(function(){
		      if ($(this).scrollTop() > 40) {
		          $('.site-header').addClass('fixed-header');
		      } else {
		          $('.site-header').removeClass('fixed-header');
		      }
		  	});
			}
		},
	};

	for (var key in wb){
		if (wb[key].test()){
			wb[key].run();
		}
	}

}(jQuery, window));
