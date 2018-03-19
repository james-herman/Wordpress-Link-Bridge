jQuery(function($){
	var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
	    bottomOffset = 2000; // the distance (in px) from the page bottom when you want to load more posts
 
	$(window).scroll(function(){
		var button = $('.loading'),
			post_body = $(document.body),
			data = {
			'action': 'loadmore',
			'query': misha_loadmore_params.posts,
			'page' : misha_loadmore_params.current_page
		};
		// This line stops the autoload if a single post is being view
		// For some reason on single posts it loops the same post
		// Will look into this and find a better fix 
		if ((post_body).hasClass("single")) {
			return;
		} 

		if( $(document).scrollTop() > ( $(document).height() - bottomOffset ) && canBeLoaded === true ){
			$.ajax({
				url : misha_loadmore_params.ajaxurl,
				data:data,
				type:'POST',
				beforeSend: function( xhr ){
					// you can also add your own preloader here
					// you see, the AJAX call is in process, we shouldn't run it again until complete
					canBeLoaded = false; 
				},
				success:function(data){
					if( data ) {
						$('#photos').find('div:last-of-type').after( data ); // where to insert posts
						canBeLoaded = true; // the ajax is completed, now we can run it again
						misha_loadmore_params.current_page++;
						if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
						
					}
				}
			});
		
		} 

	});

});