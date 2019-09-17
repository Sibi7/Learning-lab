var header           = $('header'),
	gotop_btn        = $("#gotop-btn"),
	send_order_modal = $('#send-order-modal'),
	mobile_menu      = $('#mobile-menu'),
	thanks_modal     = $('#thanks-modal');

function header_fixed(){
	if($(window).scrollTop() > 50){
		header
			.addClass('fixed')
			.find('.main-menu')
			.removeClass('main-menu--white');
	}else{
		header
			.removeClass('fixed')
			.find('.main-menu')
			.addClass('main-menu--white');
	}
}

function gotop_btn_show() {
	if ($(window).scrollTop() > 50) {
		gotop_btn.addClass("show")
	} else {
		gotop_btn.removeClass("show")
	}
}

function phone_validate (phone) {
	return !/[_]/.test(phone) && phone !== "";
}

function show_input_error(input_element, error_message) {
	var error_block = input_element.data('error-block')
		? $('#' + input_element.data('error-block'))
		: input_element.prev('.input-error-block');

	if(error_block.length === 0){
		error_block = input_element
			.before('<div class="input-error-block"></div>')
			.prev('.input-error-block');
	}

	error_block
		.addClass('show')
		.html(error_message);
	input_element
		.addClass('input-error')
		.focus();

	setTimeout(function () {
		error_block
			.removeClass('show');
		input_element
			.removeClass('input-error');
	}, 7000);
}

function disable_button(button) {
	button
		.text(button.data('text-disabled'))
		.attr('disabled', 'disabled');
}

function enable_button(button) {
	button
		.text(button.data('text-default'))
		.removeAttr('disabled');
}

function show_mobile_menu() {
	mobile_menu
		.addClass("show");
}
function hide_mobile_menu() {
	mobile_menu
		.removeClass("show");
}

function send_order(form){
	form = $(form);
	var data        = form.find('input'),
		input_phone = data.filter('input[name=phone]'),
		submit_btn  = form.find('button[type=submit]');

	if(!phone_validate(input_phone.val())){
		show_input_error(input_phone, 'Пожалуйста, введите номер телефона корректно');
		return false;
	}

	disable_button(submit_btn);

	$.ajax({
		type: 'POST',
		url: '/assets/order.php',
		data: data,
		dataType: 'json',
		success: function (data, textStatus) {
			console.log(data);
			if(textStatus === "success"){
				switch (data['status']){
					case "success":
						input_phone.val("");
						send_order_modal.modal('hide');
						setTimeout(function () {
							thanks_modal.modal('show');
						}, 400);
						break;
					default:
						alert('ERROR');
				}
			}else{
				alert('ERROR');
			}
		},
		error: function (reply) {
			alert('ERROR');
			console.log(reply);

		},
		complete: function () {
			enable_button(submit_btn);
		}
	});
}


header_fixed();
gotop_btn_show();

$(window).on('scroll', function () {
	header_fixed();
	gotop_btn_show();
});

gotop_btn.on("click", function() {
	$("body, html").animate({
		scrollTop: 0
	}, 700)
});

$(".link__anchor").on("click", function() {
	var a = $(this).attr("href");
	hide_mobile_menu();
	$("body, html").animate({
		scrollTop: $(a).offset().top - 50
	}, 1000);
	return false
});

// $('.program__item__lessons__btn').on('click', function () {
// 	var program_item = $(this)
// 		.closest('.program__item');
//
// 	if(program_item.hasClass('show')){
// 		program_item.removeClass('show');
// 	}else{
// 		program_item.addClass('show');
// 	}
// });

send_order_modal.on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget),
		modael_title = button.data('modal-title');

	send_order_modal
		.find('.modal-title')
		.text(modael_title);
	send_order_modal
		.find('input[name=type]')
		.val(modael_title);
});

$('.fancybox__video').fancybox({
	type: 'iframe'
});
$('.fancybox__image').fancybox({
	animationEffect: "fade",
});

$('input[name=phone]').inputmask("+7(999)-999-9999", {
	placeholder: "_"
});

$('.last-video__items').owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	margin: 40,
	responsive: {
		320: {
			items: 1
		},
		768: {
			items: 2
		},
		980: {
			items: 3
		},
	}
});

$('.lecturers__items').owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	margin: 40,
	autoplay: true,
	responsive: {
		320: {
			items: 1
		},
		768: {
			items: 2
		}
	}
});

$('.reviews__items').owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	autoplay: true,
	margin: 40,
	responsive: {
		320: {
			items: 1
		},
		768: {
			items: 2
		},
		980: {
			items: 3
		},
	}
});

$('.gallery__items').owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	autoplay: true,
	margin: 20,
	responsive: {
		320: {
			items: 2
		},
		768: {
			items: 4
		},
		980: {
			items: 5
		},
	}
});