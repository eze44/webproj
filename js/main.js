var modal = document.getElementById('id01');

	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}

function openNav() {
  document.getElementById("myNav").style.width = "100%";
  document.body.classList.add("body__responsive");
  var root = document.getElementsByTagName( 'html' )[0];
  root.classList.add("body__responsive");
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.body.classList.remove("body__responsive");
  var root = document.getElementsByTagName( 'html' )[0];
  root.classList.remove("body__responsive");
}

(function($) {
  if ( $('#generalAboutUs').css('display') == 'none') {
     console.log('heyoossss');
  }


	 $(window).scroll(function() {
	    300 <= $(this).scrollTop() ? $("#return-to-top").fadeIn(200) : $("#return-to-top").fadeOut(200)
	}), $("a#return-to-top").on('click', function(e){
	    e.preventDefault();
	    setTimeout(function(){
	            $(window).scrollTop(0);
	        },3);
	    })
	windowWidth = $( window ).width();
	if(windowWidth < 450  ) {
		$('.tablinks').on('click', function(){
		        setTimeout(function() {
			  document.getElementById('Contenttabs').scrollIntoView()
			}, 3);
    	});
	}
	$('#log-btn').on('click', function(){
		$('#id02').hide();
		$('#id01').show();
	})
	$('#reg-btn').on('click', function(){
		$('#id01').hide();
		$('#id02').show();
	})

	$( ".responsive__item" ).click(function() {
	  $(this).find(".responsive__dropdown-items").toggle();
	});

	"use strict";

	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() {
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});
		$('.carousel-testimony').owlCarousel({
			autoplay: true,
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 1
				},
				1000:{
					items: 2
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');
				}
			}
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			}
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');
				}

				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

})(jQuery);
