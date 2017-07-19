$(document).ready(function() {
	$(document).foundation()
});

var smoothScroll = {
	init: function() {
		$("a").on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;

				$('html, body').animate({
					scrollTop: $(hash).offset().top
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