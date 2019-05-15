<?php
/*
Template Name: Homepage
*/

get_header(); ?>




      <div class="row">
        <div class="one-half column yellow-box">
          <header>
			<h2>Opening Times</h2>
		</header><!-- .entry-header -->
			<div class="yellow-top hyphenate">
				<strong>Breakfast &amp; Lunch</strong>
				<p>Tuesday to Sunday</p>
				<p>10am&ndash;4.30pm*</p>

				<strong>Evenings: Thursday &amp; Friday</strong>
				<p>Thursdays Supper Night &amp; Friday BBQ </p>
				<p>7pm&ndash;11pm</p>
				<div id="slow-food"><a href="https://www.slowfood.org.uk/all-chefs/eddy-ambrosi/">We love Slow Food</a></div>

			</div>
			<div class="yellow-bottom hyphenate">
			* Kitchen closes at 3pm during the week and 4pm on the weekend
			</div>
        </div>

<?php /* ?>
        <div class="one-half column yellow-box yellow-event">
	        <header>
				<h2>Frizzante @ Hackney City Farm</h2>
			</header>

			<div class="yellow-top hyphenate">
				<?php
					if (get_field('event-name')) {
						echo '<strong>' . get_field('event-name') . '</strong>';
				} ?>

				<?php
				if (get_field('event-date')) 
				{
				    echo '<p>' . get_field('event-date') . '</p>';
				}
				?>

				<?php
				if (get_field('event-time')) 
				{
				    echo '<p>' . get_field('event-time') . '</p>';
				}
				?>

				<?php
				if (get_field('event-book-now')) 
				{
					echo '<a class="button button-primary" href="' . get_field('event-book-now') . '">' . get_field('button_text') . '</a>';
				}
				
				?>
			</div>


<?php */ ?>-->

        <div class="one-half column yellow-box yellow-event">
	        <header>
				<h2>Next Event</h2>
			</header>

			<div class="yellow-top hyphenate">
				<?php
					if (get_field('event-name')) {
						echo '<strong>' . get_field('event-name') . '</strong>';
				} ?>

				<?php
				if (get_field('event-date')) 
				{
				    echo '<p>' . get_field('event-date') . '</p>';
				}
				?>

				<?php
				if (get_field('event-time')) 
				{
				    echo '<p>' . get_field('event-time') . '</p>';
				}
				?>

				<?php
				if (get_field('event-book-now')) 
				{
					echo '<a class="button button-primary" href="' . get_field('event-book-now') . '">' . get_field('button_text') . '</a>';
				}
				
				?>
			</div>
			


			<div class="yellow-bottom u-cf addresswrap hyphenate">
				<div class="address map-marker">1a Goldsmiths Row, London E2 8QA<br />
			<a href="mailto:bookings@frizzantecafe.com">bookings@frizzantecafe.com</a></div>
			</div>
		</div>

        </div>
      </div>
    </div>
  </div>

  </header><!-- #masthead -->

<main role="main" id="main" class="site-main">

	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">

		<article id="gallery" >
			

			<?php echo do_shortcode('[masterslider id="1"]'); ?>

			           
		</article><!-- / #gallery -->

		<article id="menus" class="homepage-block">
			
			<div class="article-wrapper">

			<header>
				<h2 class="white">Sample menus</h2>
			</header>			

			<?php
			if (get_field('menu')) 
			{
			    echo ' ' . get_field('menu') . ' ';
			}
			?>

			</div>

		</article><!-- / #menus -->

		<article id="photos" class="homepage-block"><!-- aka instagram -->
			
			<div class="article-wrapper">

			<header>
				<h2>Instagram</h2>
			</header>

		
			<?php echo do_shortcode('[instagram-feed]'); ?>

			
			
		</article><!-- / #photos -->


<section class="header homepage-block" id="bookings">
      <h2 class="title white">Bookings</h2> 
      <div class="row article-wrapper ">
        <div class="four columns hyphenate">
			<?php
				if (get_field('bookings_one')) 
				{
					echo ' ' . get_field('bookings_one') . ' ';
				}
			?>
        </div>
        <div class="four columns hyphenate">
          	<?php
				if (get_field('bookings_two')) 
				{
					echo ' ' . get_field('bookings_two') . ' ';
				}
			?>
        </div>
        <div class="four columns hyphenate">
        	<?php
				if (get_field('bookings_three')) 
				{
					echo ' ' . get_field('bookings_three') . ' ';
				}
			?>
        </div>
      </div>
    </section>

	<!-- / #bookings -->

<section class="header homepage-block" id="our-story">
      
      <h2 class="title">Our story</h2>
   
      <div class="article-wrapper ">
        
			<?php
				if (get_field('our-story_text')) 
				{
					echo ' ' . get_field('our-story_text') . ' ';
				}
			?>
        
      </div>

</section>

<!-- old our story

<section class="header homepage-block" id="our-story">
      
      <h2 class="title">Our story</h2>
   
      <div class="row article-wrapper ">
        <div class="four columns">
			<?php
				if (get_field('our-story_text')) 
				{
					echo ' ' . get_field('our-story_text') . ' ';
				}
			?>
        </div>        
        <div class="eight columns">
        

				<?php 

					$image = get_field('image');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {

						echo wp_get_attachment_image( $image, $size );

					}

				?>
        </div>

        
      </div>

</section>

 -->

<section class="header homepage-block" id="contact">
      
      <h2 class="title">Contact</h2>
   
      <div class="row article-wrapper">
        <div class="seven columns">
			<div class="google-maps">
				<?php echo do_shortcode('[flexiblemap address="1a Goldsmiths Row London E2 8Q" maptype="roadmap" region="uk" zoom="16" width="100%" title="Frizzante Cafe"]'); ?>
			</div>

        </div>        
        <div class="five columns contact-text">

        	<?php
				if (get_field('contact_text')) 
				{
					echo ' ' . get_field('contact_text') . ' ';
				}
			?>
			
			<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{ }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//frizzanteltd.us8.list-manage.com/subscribe/post?u=c147a88c5e0dbfc8238d06f21&amp;id=40ea4481a2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    
	<strong>Join our mailing list</strong>
	<div id="mc_embed_signup_scroll">
	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_c147a88c5e0dbfc8238d06f21_40ea4481a2" tabindex="-1" value=""></div>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>    
    <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button">
    </div>
</form>
</div>

<!--End mc_embed_signup-->

			<strong class="contact-follow">Follow us</strong>

			<a href="https://twitter.com/Frizzantecafe"><img alt="Social-twitter" class="h-iblock social" height="65" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-twitter.svg" width="65"></a>

			<a href="https://www.facebook.com/FrizzanteLDN"><img alt="Social-facebook" class="h-iblock social" height="65" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-facebook.svg" width="65"></a>
		
			<a href="http://instagram.com/frizzantecafe"><img alt="Social-instagram" class="h-iblock social" height="65" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social-instagram.svg" width="65"></a>

        </div>

        
      </div>
      
</section>

		</div><!-- #content -->
	</div><!-- #primary -->
</main>

<?php get_footer(); ?>