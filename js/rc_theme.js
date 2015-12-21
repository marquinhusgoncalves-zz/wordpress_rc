$(function() {
	$("li.menu-item-44").children("a").attr('href', "#");
});

$(function(){
	$(document).on( 'scroll', function(){        
		if ($(window).scrollTop() > 100) {
			$('.scroll-to-top').addClass('show');
		} else {
			$('.scroll-to-top').removeClass('show');
		}
	});
	$('.scroll-to-top').on('click', scrollToTop);
});
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

<!-- Transform icon toggle -->
$(document).ready(
	function() {
		$(".toggle i").click(function() {
			var $this = $(this);
			if ($this.hasClass("fa-bars")) {
				$this.removeClass("fa-bars").addClass("fa-times");
				return;
			}
			if ($this.hasClass("fa-times")) {
				$this.removeClass("fa-times").addClass("fa-bars");
				return;
			}
		});
	});