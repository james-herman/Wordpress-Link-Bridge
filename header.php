<!doctype html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo( 'name' ); ?></title>
		<?php wp_head(); ?>
			
	</head>


	<?php 

		if( is_front_page() ):
			$linkbridge_classes = array('linkbridge-class' , 'my-class' );

		else:
			$linkbridge_classes = array('no-linkbridge-class' );

		endif;

	 ?>
	<body <?php body_class($linkbridge_classes); ?> >

		<header class="menu">

			
				<nav>
					<ul>
						<li>
							<h1>
								<a href="https://www.etsy.com/shop/troyanvintage/"><?php bloginfo( 'name' ); ?></a>
							</h1>
						</li>
						<li>
							<a href="https://www.instagram.com/troyanvintage/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png">
							</a>
						</li>
					</ul>
				</nav>	
			

			<!-- <h1><a href="http://troyanvintage.etsy.com"> -->
				<?php /* bloginfo( 'name' ); */ ?>

			<!-- </a></h1> -->

			<?php  /*wp_nav_menu(array('theme_location'=>'primary')); */ ?>

			

		</header>
		<input type="checkbox" id="view-change"></input>

				<label for="view-change" class="toggle-button" id="block-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/block.svg" id="block">
				</label>	
				<label for="view-change" class="toggle-button" id="grid-img">	
					<img src="<?php echo get_template_directory_uri(); ?>/img/grid.svg" id="grid">
				</label>	
					<p id="change-view">Click pic to buy on Etsy</p>
		<div class="photos" id="photos">