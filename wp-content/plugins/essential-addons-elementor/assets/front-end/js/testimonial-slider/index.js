/*=================================*/
/* 24. Testimonial Slider
/*=================================*/
var TestimonialSliderHandler = function($scope, $) {
	var $testimonialSlider = $scope.find(".eael-testimonial-slider-main").eq(0),
		$pagination =
			$testimonialSlider.data("pagination") !== undefined
				? $testimonialSlider.data("pagination")
				: ".swiper-pagination",
		$arrow_next =
			$testimonialSlider.data("arrow-next") !== undefined
				? $testimonialSlider.data("arrow-next")
				: ".swiper-button-next",
		$arrow_prev =
			$testimonialSlider.data("arrow-prev") !== undefined
				? $testimonialSlider.data("arrow-prev")
				: ".swiper-button-prev",
		$items =
			$testimonialSlider.data("items") !== undefined
				? $testimonialSlider.data("items")
				: 3,
		$items_tablet =
			$testimonialSlider.data("items-tablet") !== undefined
				? $testimonialSlider.data("items-tablet")
				: 3,
		$items_mobile =
			$testimonialSlider.data("items-mobile") !== undefined
				? $testimonialSlider.data("items-mobile")
				: 3,
		$margin =
			$testimonialSlider.data("margin") !== undefined
				? $testimonialSlider.data("margin")
				: 10,
		$margin_tablet =
			$testimonialSlider.data("margin-tablet") !== undefined
				? $testimonialSlider.data("margin-tablet")
				: 10,
		$margin_mobile =
			$testimonialSlider.data("margin-mobile") !== undefined
				? $testimonialSlider.data("margin-mobile")
				: 10,
		$effect =
			$testimonialSlider.data("effect") !== undefined
				? $testimonialSlider.data("effect")
				: "slide",
		$speed =
			$testimonialSlider.data("speed") !== undefined
				? $testimonialSlider.data("speed")
				: 400,
		$autoplay =
			$testimonialSlider.data("autoplay_speed") !== undefined
				? $testimonialSlider.data("autoplay_speed")
				: 999999,
		$loop =
			$testimonialSlider.data("loop") !== undefined
				? $testimonialSlider.data("loop")
				: 0,
		$grab_cursor =
			$testimonialSlider.data("grab-cursor") !== undefined
				? $testimonialSlider.data("grab-cursor")
				: 0,
		$centeredSlides = $effect == "coverflow" ? true : false,
		$pause_on_hover =
			$testimonialSlider.data("pause-on-hover") !== undefined
				? $testimonialSlider.data("pause-on-hover")
				: "",
		$testimonialSliderOptions = {
			direction: "horizontal",
			speed: $speed,
			effect: $effect,
			centeredSlides: $centeredSlides,
			slidesPerView: $items,
			spaceBetween: $margin,
			grabCursor: $grab_cursor,
			autoHeight: true,
			loop: $loop,
			autoplay: {
				delay: $autoplay
			},
			pagination: {
				el: $pagination,
				clickable: true
			},
			navigation: {
				nextEl: $arrow_next,
				prevEl: $arrow_prev
			},
			breakpoints: {
				// when window width is <= 480px
				480: {
					slidesPerView: $items_mobile,
					spaceBetween: $margin_mobile
				},
				// when window width is <= 640px
				768: {
					slidesPerView: $items_tablet,
					spaceBetween: $margin_tablet
				}
			}
		};

	var $testimonialSliderObj = new Swiper(
		$testimonialSlider,
		$testimonialSliderOptions
	);
	if ($autoplay === 0) {
		$testimonialSliderObj.autoplay.stop();
	}

	if ($pause_on_hover && $autoplay !== 0) {
		$testimonialSlider.on("mouseenter", function() {
			$testimonialSliderObj.autoplay.stop();
		});
		$testimonialSlider.on("mouseleave", function() {
			$testimonialSliderObj.autoplay.start();
		});
	}

	var $tabContainer = $('.eael-advance-tabs'),
		nav = $tabContainer.find('.eael-tabs-nav li'),
		tabContent = $tabContainer.find('.eael-tabs-content > div');

	
	nav.on('click', function() {
		var currentContent = tabContent.eq($(this).index()),
			sliderExist = $(currentContent).find('.swiper-container-wrap.eael-testimonial-slider');
		if(sliderExist.length) {
			new Swiper($testimonialSlider, $testimonialSliderOptions);
		}
	});

	$testimonialSliderObj.update();
	
};

jQuery(window).on("elementor/frontend/init", function() {
	elementorFrontend.hooks.addAction(
		"frontend/element_ready/eael-testimonial-slider.default",
		TestimonialSliderHandler
	);
});
