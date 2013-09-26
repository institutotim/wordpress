(function($) {

	$(document).ready(function() {

		$('#main-nav > div > ul > li > ul.sub-menu').each(function() {
			$(this).parent().find('> a:first-child').append('<span class="plus"></span>');
		});

		$('#main-nav > div > ul > li > ul.sub-menu').hover(
			function() {
				$(this).parent().find('> a:first-child').css('background-color', 'white');
			},
			function() {
				$(this).parent().find('> a:first-child').css('background-color', 'transparent');	
			}
		);

		$('#main-nav > div > ul > li').hover(
			function() {
				$(this).find('> a:first-child').css('background-color', 'white');
			},
			function() {
				$(this).find('> a:first-child').css('background-color', 'transparent');	
			}
		);

		$('#secondary-nav').find('a').tooltip();

	});

})(jQuery);