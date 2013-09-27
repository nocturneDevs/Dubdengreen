<?php get_header(); ?>

	<div id="title-wrapper">
		<h1><a href="<?php echo home_url(); ?>">Softrade</a></h1>
		<h3>25 years of Code</h3>
	</div>

	<nav id="main-nav">
		<a href="<?php echo home_url(); ?>">Home</a>
		<a href="<?php echo home_url(); ?>">Portfolio</a>
		<a href="<?php echo home_url(); ?>">Contact Us</a>
	</nav>

	<div id="main-description" class="homepage-section">
		<p id="main-description-graphic">
			25
		</p>
		<p id="main-description-text">
			For twenty five years, Softrade has been in the business of delivering quality software tailored to the needs of its customers. From elegant end to end solutions for chit funds and family owned businesses to huge cash management systems for corporates like Deutsche Bank, Softrade has carved a niche for itself in delivering robust and flexible customised software solutions. That much of our software is still in use even 15 years after it was written stands testament to the stamp of quality on each of these carefully crafted products.
		</p>
	</div>

	<div id="mantras" class="homepage-section">
		
		<div class="a-mantra">
			<h4>Bulletproof systems</h4>
			<p>
				It just works. We're not kidding!
			</p>
		</div>

		<div class="a-mantra">
			<h4>Perfect, snug fit</h4>
			<p>
				No ready-made stuff. We know the importance of writing our code from scratch for each of our customers.
			</p>
		</div>
		
		<div class="a-mantra">
			<h4>Small is big</h4>
			<p>
				We believe in churning out tailored masterpieces rather than make big bucks on volumes that help no one.
			</p>
		</div>

		<div class="a-mantra">
			<h4>Quality quality quality</h4>
			<p>
				Our clients have stood by us for decades now and that's because we believe in quality.
			</p>
		</div>

		<div class="a-mantra">
			<h4>Always on time</h4>
			<p>
				We've been defying the industry standard for 25 years.
			</p>
		</div>

	</div>


	<div id="clients" class="homepage-section">
		<h4>Our Clients</h4>
		<div id="clientLogos">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/DB.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/SCB.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/Total.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/clientLogos/SKS.jpg">
		</div>
	</div>
	
<?php get_footer(); ?>