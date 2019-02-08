
$('a[href^="#"]').on("click", function() {
	var the_id = $(this).attr("href");
	if (the_id === '#') {
		return;
	}
	$('html, body').animate({
		scrollTop: $(the_id).offset().top - 50
	}, 'slow');
	return false;
});

$(function() {
	$('#btn-all').on("click", function() {
		clear();
		$('#table-chapter-filter').css('display', 'none');
		$('#table-name-filter').css('display', 'none');
		$('.article').css('display', 'block');
	});
	$('#btn-opt-chapter').on("click", function() {
		clear();
		$('#table-chapter-filter').css('display', 'block');
		$('#table-name-filter').css('display', 'none');
	});
	$('#btn-opt-name').on("click", function() {
		clear();
		$('#table-name-filter').css('display', 'block');
		$('#table-chapter-filter').css('display', 'none');
	});

	$('#btn-notify').on("click", function() {
		clear();
		$('#table-chapter-filter').css('display', 'none');
		$('#table-name-filter').css('display', 'none');
		notify_comment();
	});

	//bouton de filtre comment chapter
	$(".select").on('change', function() {
		$('.article').hide(500);
		var selection = $("#select").val();
		var sel = 'id' + selection;
		if ($('.article').hasClass(sel)) {
			$('.' + sel).show(500);
		};
	});

	//bouton de filtre comment auteur
	$(".selAuthor").on('change', function() {
		$('.article').hide(500);
		var selection = $("#selAuthor").val();
		if ($('.article').hasClass(selection)) {
			$('.' + selection).show(500);
		};
	});
	//connect show/hide form
	$('.btn-forgot').on('click', function() {
		$('.main-forgot').show(500);
		$('.main-connect').hide(500);
		clear_form();
	});
	$('.btn-cancel').on('click', function() {
		$('.main-forgot').hide(500);
		$('.main-connect').show(500);
	});

});

function clear_form() {
	$('form').find("input, :text, select").val("").end().find(":checked").prop("checked", false);
}

//bouton de filtre comment notify
function notify_comment() {
	if ($('.n0').length < 1) {
		warning = '<div class="alert alert-warning">';
		warning += 'Il n\'y a aucun message signalé';
		warning += '</div>';
		document.getElementById('message').innerHTML = warning;
	};

	$('.article').hide(500);
	if ($('.article').hasClass('n0')) {
		$('.n0').show(500);
	};
}

function clear() {
	document.getElementById('message').innerHTML = '';
	$('.article').show(500);
}


function sure() {
	return (confirm('Etes-vous sûr de vouloir supprimer cet élément ?'));
}