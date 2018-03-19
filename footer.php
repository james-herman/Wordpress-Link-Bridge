		
		</div>

		<footer>
			<!-- <p>This is the footer</p> -->
			<?php 
			  // wp_nav_menu(array('theme_location'=>'secondary'));  



				global $wp_query; // you can remove this line if everything works for you
 
				// don't display the button if there are not enough posts
				if (  $wp_query->max_num_pages > 1 )
				echo '<div class="loading">Loading</div>'; // you can use <a> as well



			?>
		</footer>
	
	


	<?php wp_footer(); ?>
			<!-- <script type="text/javascript">
			

console.log('will this ever work?');

document.getElementById('load-more-button').innerHTML = "test";

		</script> -->

	</body>
</html>
