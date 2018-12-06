///////////////////////////////////
// menu-mobile behavior
//////////////////////////////////

(function($)
{

	$(document).ready(function()
	{
		var modMobile = $('.menu-mobile-container');
		modMobile.find('.panel-toggle .hamburger').click(function()
		{
			var bodyMenu = $('.body-menu');
			bodyMenu.slideFadeToggle();
			modMobile.toggleClass('Active');

			if(!bodyMenu.length) return;
			var hvp = $(window).outerHeight(true);
			bodyMenu.animate({
				height:hvp-100,
				overflow:'auto'
			}, 1);
			// var hContainer = bodyMenu.outerHeight(true);
			// var hcontentModule = hvp - 40;
			// if (hvp < hContainer){
			// 	bodyMenu.css('overflow-y','auto');
			// }else{
			// 	bodyMenu.css('overflow-y','initial');
			// }

		});

		//fix bug menu mobile
		var item = $('.menu-mobile .item');
		item.click(function(){
			var bodyMenu = $('.body-menu');
			bodyMenu.slideUp();
			modMobile.removeClass('Active');
		});
		//////////////////////////////////////


		$(window).resize(function() {
			//resize window
			var menuMobile = $('.menu-mobile-container');
			if (!menuMobile.length){
				return;
			}else{
				var bodyMenu = $('.body-menu');
				if(!bodyMenu.length) return;
				var hvp = $(window).outerHeight(true);
				bodyMenu.animate({
					height:hvp-100,
					overflow:'auto'
				}, 1);
				// var hContainer = bodyMenu.outerHeight(true);
				// var hcontentModule = hvp - 40;
				// if (hvp < hcontentModule){
				// 	bodyMenu.css('overflow-y','auto');
				// }else{
				// 	bodyMenu.css('overflow-y','initial');
				// }
			}

		}).resize();

	});

	$.fn.slideFadeToggle  = function(fast) {
		return this.animate({opacity: 'toggle', height: 'toggle'}, 300);
	}
})(jQuery);
