/*
 * Author: ArtStyles Brands (ArtTemplate / ArtIcons)
 * URL: http://themeforest.net/user/artstyles
 * Template Name: FORZO
 * Version: 1.0
 */

(function ($) {
	$(document).ready(function () {
		"use strict";


		/*-----------------------------------------------------------------
		Detect device mobile
		-------------------------------------------------------------------*/


		var isMobile = false;

		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			$('html').addClass('touch');
			isMobile = true;
		} else {
			$('html').addClass('no-touch');
			isMobile = false;
		}


	});
})(jQuery);