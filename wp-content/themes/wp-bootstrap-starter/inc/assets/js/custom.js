(function($){
    $(document).ready(function() {
			$('#main-slider').slick();
			$('#history-slider').slick({
			  autoplay: true,
			  autoplaySpeed: 3000,
			  dots: true,
			  arrows: false
			});
			$('.success-slider-for').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  dots: false,
			  fade: true,
			  asNavFor: '.success-slider-nav'
			});
			$('.success-slider-nav').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  asNavFor: '.success-slider-for',
			  dots: false,
			  centerMode: true,
			  focusOnSelect: true
			});
			$('.events-slider-for').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  dots: false,
			  fade: true,
			  asNavFor: '.events-slider-nav'
			});
			$('.events-slider-nav').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  asNavFor: '.events-slider-for',
			  dots: false,
			  centerMode: true,
			  focusOnSelect: true
			});
			baguetteBox.run('.tz-gallery');
			$('.courses-slider').slick({
				dots: true,
				infinite: true
			});			
    });
})(jQuery);
