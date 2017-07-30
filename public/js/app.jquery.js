$(document).ready(function() {
	$(document).foundation();
});

var slickSlider = {
	init: function() {
		$('.equipments-slider').slick({
			infinite: true,
	  		slidesToShow: 1,
	  		lazyLoad: 'ondemand',
	  		prevArrow: '.equipments-prev',
	  		nextArrow: '.equipments-next',
	  	});
	  	$('.products-slider').slick({
			infinite: true,
	  		slidesToShow: 1,
	  		lazyLoad: 'ondemand',
	  		prevArrow: '.products-prev',
	  		nextArrow: '.products-next',
	  	});
	}
};

var smoothScroll = {
	init: function() {
		$("a").on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;

				$('html, body').animate({
					scrollTop: $(hash).offset().top - 75
				}, 800, function(){
					window.location.hash = hash;
				});
			}
		});
	}
}

var scrollToTop = {
	init: function() {
		$(window).scroll(function () {
	        if ($(this).scrollTop() > 100) {
	            $('.scrollup').slideDown();
	        } else {
	            $('.scrollup').slideUp();
	        }
	    });

	    $('.scrollup').click(function () {
	        $("html, body").animate({
	            scrollTop: 0
	        }, 600);
	        return false;
	    });
	}
}