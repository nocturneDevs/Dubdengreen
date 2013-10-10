<?php get_header(); ?>

	<!-- <div id="title-wrapper">
		<h1><a href="<?php echo home_url(); ?>">Dubdengreen</a></h1>
		<h3>Organic Bounty. And other things Good.</h3>
	</div> -->
<!-- 
	<nav id="main-nav">
		<a href="<?php echo home_url(); ?>">Home</a>
		<a href="<?php echo home_url(); ?>">About Us</a>
		<a href="<?php echo home_url(); ?>">Shop Now</a>
		<a href="<?php echo home_url(); ?>">News</a>
		<a href="<?php echo home_url(); ?>">Contact Us</a>
	</nav> -->

	<div id="main-links" class="homepage-section">
		<div class="main-link-wrapper">
		<?php 
			// MAIN LINK LEFT
			$the_query = new WP_Query( 'category_name=main-link-left&posts_per_page=1&nopaging=true' );

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<h1 class="main-link-header">';
					the_title();
				echo '</h1>';

				echo '<div class="main-link-img-wrapper"></div>';

				the_content();
			}
		?>
		</div>

		<div class="main-link-wrapper">
		<?php 
			// MAIN LINK LEFT
			$the_query = new WP_Query( 'category_name=main-link-center&posts_per_page=1&nopaging=true' );

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<h1 class="main-link-header">';
					the_title();
				echo '</h1>';

				echo '<div class="main-link-img-wrapper"></div>';

				the_content();
			}
		?>
		</div>

		<div class="main-link-wrapper">
		<?php 
			// MAIN LINK LEFT
			$the_query = new WP_Query( 'category_name=main-link-right&posts_per_page=1&nopaging=true' );

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<h1 class="main-link-header">';
					the_title();
				echo '</h1>';

				echo '<div class="main-link-img-wrapper"></div>';

				the_content();
			}
		?>
		</div>

	
	</div>

	<!-- <div id="main-links" class="homepage-section">
		<div class="main-link-wrapper">
			<h1 class="main-link-header">Shop Now</h1>
			<div class="main-link-img-wrapper"></div>
			<p class="main-link-text">Shop from our wide range of organic products.</p>
		</div>

		<div class="main-link-wrapper">
			<h1 class="main-link-header">Who We Are</h1>
			<div class="main-link-img-wrapper"></div>
			<p class="main-link-text">Learn about our story.</p>
		</div>

		<div class="main-link-wrapper">
			<h1 class="main-link-header">News</h1>
			<div class="main-link-img-wrapper"></div>
			<p class="main-link-text">Find out what people have to say.</p>
		</div>
	</div> -->

	<div id="main-description" class="homepage-section">
		<p id="main-description-graphic">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/theTree.png" width="300px">
		</p>

	

	<?php 
		// MAIN DESCRIPTION TEXT
		$the_query = new WP_Query( 'category_name=main-description' );

		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			the_content();
		}
	?>

	</div>

	<div id="clients" class="homepage-section">
		<h4>We Eat Organic. Do You?</h4>
		<div id="clientLogos">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/madagascarPenguins.jpg" height="250px">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/madagascarAlex.jpg" height="250px">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/madagascarHippo.jpg" height="250px">
		</div>
	</div>
	
<?php get_footer(); ?>