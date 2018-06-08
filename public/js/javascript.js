$('a[href^="#"]').click(function() {
	var the_id = $(this).attr("href");
	if (the_id === '#') {
		return;
	}
	$('html, body').animate({
		scrollTop: $(the_id).offset().top - 50
	}, 'slow');
	return false;
});

$(document).ready(function() {
	$(window).scroll(function() {
		if ($(document).scrollTop() > 150) {
			$(".glyphicon-menu-up").css("right", "0px");
		} else {
			$(".glyphicon-menu-up").css("right", "-50px");
		}
	});
});