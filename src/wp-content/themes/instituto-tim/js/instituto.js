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

        //Open description of post
        $('.global-open-description-post-here').each(function(){
            
            var close_or_open_description = $(this).find('> .description-post-here');

            $(this).find('.open-description-post-here').click(function(){
                close_or_open_description.slideToggle("fast");
            });
        
        });

        $('.highlight-container').cycle({
            fx: 'fade',
            timeout: 2000,
            speed: 300,
            pager: '#high-light-navigation'
            
        });

	});

})(jQuery);
