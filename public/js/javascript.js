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
	$('#header-1').click(function() {
		$('#detail-1').toggle(300);
		$('#header-1 .glyphicon-chevron-up').toggle(300);
		$('#header-1 .glyphicon-chevron-down').toggle(300);
	});
	$('#header-2').click(function() {
		$('#detail-2').toggle(300);
		$('#header-2 .glyphicon-chevron-up').toggle(300);
		$('#header-2 .glyphicon-chevron-down').toggle(300);
	});
	$('#header-3').click(function() {
		$('#detail-3').toggle(300);
		$('#header-3 .glyphicon-chevron-up').toggle(300);
		$('#header-3 .glyphicon-chevron-down').toggle(300);
	});
	$('#header-4').click(function() {
		$('#detail-4').toggle(300);
		$('#header-4 .glyphicon-chevron-up').toggle(300);
		$('#header-4 .glyphicon-chevron-down').toggle(300);
	});
	$('#header-5').click(function() {
		$('#detail-5').toggle(300);
		$('#header-5 .glyphicon-chevron-up').toggle(300);
		$('#header-5 .glyphicon-chevron-down').toggle(300);
	});
});