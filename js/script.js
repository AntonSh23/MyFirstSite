var main = function() {

	$('.icon-menu button').click(function() {
		$('.menu').animate({
			top : "0px"
		}, 200);
		$('.icon-menu button').fadeOut();
	});

	$('.icon-close button').click(function() {
		$('.menu').animate({
			top : "-285px"
		}, 200);
		$('.icon-menu button').fadeIn();
		$('body').animate({
			top : "0px"
		}, 200);

		$('.icon-menu').fadeIn();
	});

	$('.icon-close em').click(function() {
		$('.menu').animate({
			top : "-285px"
		}, 200);
		$('.icon-menu button').fadeIn();
		$('body').animate({
			top : "0px"
		}, 200);

		$('.icon-menu').fadeIn();
	});

	$('.icon-menu').mouseenter(function() {
		$(this).animate({
			opacity : 1
		});
	});

	$('.icon-menu').mouseleave(function() {
		$(this).animate({
			opacity : 0.5
		});
	});

	$('.arrow-next').click(function() {
		var currentSlide = $('.active-slide');
		var nextSlide = currentSlide.next();

		var currentDot = $('.active-dot');
		var nextDot = currentDot.next();

		if (nextSlide.length === 0) {
			nextSlide = $('.slide').first();
			nextDot = $('.dot').first();
		}

		currentSlide.fadeOut(0).removeClass('active-slide');
		nextSlide.fadeIn(0).addClass('active-slide');

		currentDot.removeClass('active-dot');
		nextDot.addClass('active-dot');
	});

	$('.arrow-prev').click(function() {
		var currentSlide = $('.active-slide');
		var prevSlide = currentSlide.prev();

		var currentDot = $('.active-dot');
		var prevDot = currentDot.prev();

		if (prevSlide.length === 0) {
			prevSlide = $('.slide').last();
			prevDot = $('.dot').last();
		}

		currentSlide.fadeOut(0).removeClass('active-slide');
		prevSlide.fadeIn(0).addClass('active-slide');

		currentDot.removeClass('active-dot');
		prevDot.addClass('active-dot');
	});

	$('.Titles').click(function() {
		$('.descr').slideUp(800);
		$('.description').slideUp(800);
	});

	$('.Titles').click(function() {
		$(this).children('.descr').slideDown(800);
		$(this).children('.description').slideDown(800);
	});

	$(".square .col-md-3").click(function() {
		$(this).animate({
			height : "30%"
		}, 1000);
	});

	$(".SMe button").click(function() {
		$(".jumFoot .jumbotron").slideToggle();
		$("#contact-wrapper").slideToggle();

	});

};

$(document).ready(main); 