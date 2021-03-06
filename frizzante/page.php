<?php
/*
Template Name: Homepage
*/

get_header(); ?>


<div class="row">
        <div class="one-half column yellow-box">
          <header>
			<h2>New Opening Times</h2>
		</header><!-- .entry-header -->
			<div class="yellow-top hyphenate">
				<strong>Lunch, dinner &amp; takeaway</strong>
				
				<div class="container-header">

					<div class="col1">
						<p>Monday to Friday<br>
						12 noon&ndash;9pm</p> 
						
					</div>
					
					<div class="col2">
					<p>Saturday<br>
					11am&ndash;9pm</p>
					</div>

					<div class="col1">
					<p>Sunday<br>
					11am&ndash;6pm</p>

					</div>

				
				</div>

				
				
				
				

				<p style="margin: 0.5em 0 1em 0;">Frizzante cafe is styled on the agriturismo’s in Italy, where the farm restaurant offered all produce grown on the farm, meats, vegetables, wines and oils.</p>	
				
				<div id="slow-food"><a href="https://www.slowfood.org.uk/all-chefs/eddy-ambrosi/">We love Slow Food</a></div>

			</div>
			<div class="yellow-bottom hyphenate">
			
			</div>
        </div>


<?php /*  <!-- ?>
        <div class="one-half column yellow-box yellow-event">
	        <header>
				<h2>Eat at Hackney City Farm</h2>
				
			</header><!-- .entry-header -->

			<div class="yellow-top hyphenate">

			 <p style="margin: 0.5em 0 1em 0;">Frizzante cafe is styled on the agriturismo’s in Italy, where the farm restaurant offered all produce grown on the farm, meats, vegetables, wines and oils.</p>
			
			<p style="margin-bottom: 1em;">Find us at <a href="//www.hackneycityfarm.co.uk">Hackney City Farm</a> and enjoy freshly cooked seasonal dishes, where possible, using ingredients from the farm gardens.</p>

			<p style="margin-bottom: 1em;">From fresh pasta and salads to Sunday roasts, delicious homemade cakes, locally made Italian style ice-cream and English fruit juices.</p>

<?php --> */  ?>

<div class="one-half column yellow-box yellow-event">
	        <header>
				<?php 
					if (get_field('event-heading')) {
						echo '<h2>' . get_field('event-heading') . '</h2>';
				} ?>
			
			</header><!-- .entry-header -->

			<div class="yellow-top hyphenate">
							<?php 
					if (get_field('event-name')) {
						echo '<strong>' . get_field('event-name') . '</strong>';
				} ?>

				<?php
				if (get_field('event-description')) 
				{
				    the_field('event-description');
				}
				?>

<?php /*
				if (get_field('event-book-now')) 
				{
					echo '<a class="button button-primary" href="' . get_field('event-book-now') . '">' . get_field('button_text') . '</a>';
				}
				
		*/		?>
				




			</div>
			<div class="yellow-bottom u-cf addresswrap hyphenate">
			<!--	<div class="address map-marker">1a Goldsmiths Row, London E2 8QA<br />
			<a href="mailto:info@frizzantecafe.com">info@frizzantecafe.com</a></div>
			-->
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
				<h2 style="margin-bottom: 0.6em;">Photos</h2>
			</header>

			<?php // if ( function_exists( 'envira_album' ) ) { envira_album( '255' ); } ?>


			<?php echo do_shortcode( '[envira-gallery id="255"]' ); ?>


			</div>

			<div class="article-wrapper">

			<header>
				<h2 style="margin-top: 1em;"">Instagram</h2>
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

<p>
Thanks to <a href="https://www.facebook.com/cookmecoco/">@cookme.co</a> for interviewing Eddy about his passion for food. Music by bensound.com (Might take a few seconds to load)
</p>        
			<script>window.fbAsyncInit = function() {
  FB.init({
    xfbml      : true,
    version    : 'v2.5'
  });
  }; (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-video" data-href="https://www.facebook.com/cookmecoco/videos/1878001952516313/" data-width="800" data-allowfullscreen="true"></div>

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