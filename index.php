<?php get_header(); ?>

	<div id="title-wrapper">
		<h1><a href="<?php echo home_url(); ?>">Dubdengreen</a></h1>
		<h3>Organic Bounty. And other things Good.</h3>
	</div>

	<nav id="main-nav">
		<a href="<?php echo home_url(); ?>">Home</a>
		<a href="<?php echo home_url(); ?>">About Us</a>
		<a href="<?php echo home_url(); ?>">Shop Now</a>
		<a href="<?php echo home_url(); ?>">News</a>
		<a href="<?php echo home_url(); ?>">Contact Us</a>
	</nav>

	<div id="main-description" class="homepage-section">
		<p id="main-description-graphic">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/theTree.png" width="300px">
		</p>

		<p id="main-description-text">
			<p>
			Dubdengreen was set up by Jayashree and Ganesh Eashwar, corporate executives who decided to give back something to the earth from which we have taken so much, for so long.
			</p>
			<p>
			Nearly twenty years ago, they bought land near Bangalore and developed it into an organic farm. Given that large departmental stores provided only token recognition to organic food products by assigning a shelf or two (and even these were rarely well stocked), they decided to open stores of their own.
			</p>
			<p>
			They set up their first outlet at Shahpur Jat in Delhi and launched their online store - www.organicbounty.com - to reach their products to a wider audience.
			</p>
			<p>
			<em>Dubdengreen – Organic Food. And Other Things Good.</em>
			</p>
			<p>
			Enjoy!
			</p>
		</p>
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