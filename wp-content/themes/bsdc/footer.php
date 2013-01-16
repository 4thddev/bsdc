<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		<div id="footer-wraper">
		<footer class="container container-twelve">
			<div class="three columns">
				<div class="widget-container">
					<h3><span>About orcur</span></h3>
						<p>Orcur is a theme design for event planning and management.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet tortor id</p>
				</div><!-- .widget-container -->
			</div><!-- .three -->
			<div class="three columns">
				<div class="widget-container">
					<h3><span>Latest News</span></h3>
					<p>
						<a href="#">Sao Paublo recalls at the end of August</a>
						<br />
						<span class="small">by <a href="#">Joe Dows</a> on <strong>July 26</strong></span>
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet tortor id ligula vulputate. <a href="#">( Read More &rarr; )</a></p>
				</div><!-- .widget-container -->
			</div><!-- .three -->
			<div class="three columns">
				<div class="widget-container">
					<h3><span>When and Where?</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet</p>
					<p>Premium Club - 10:00a<br />
					Elites Membership - 10:30a<br />
					AM Package - 11:30</p>
				</div><!-- .widget-container -->
			</div><!-- .three -->
			<div class="three columns">
				<div class="widget-container">
					<h3><span>Newsletter</span></h3>
					<p>Fusce cursus aliquam aliquet. Sed pretium auctor nunc elandit estibulum</p>
					<div class="newsletter-box">
						<input type="text" name="email" id="email" placeholder="Your Email" />
						<input type="button" name="submit" id="submit" value="Submit" />
					</div>
				</div><!-- .widget-container -->
			</div><!-- .three -->
		</footer><!-- .container -->
		<div id="footer-bottom-wraper">
			<div id="footer-bottom" class="container container-twelve">
				<div id="footer-info" class="six columns">
					<span>&copy; 2012 <a href="#">Orcur</a>. Powered by <a href="#">HTML5/CSS3</a><br />
					<a href="#">Orcur Theme</a> by <a href="#">Rene Merino</a></span>
				</div><!-- #footer-info -->
				<div id="social" class="six columns">
		    		<ul>
		    			<li>Find Us on:</li>
		    			<li class="twitter"><a href="#">Twitter</a></li>
		    			<li class="facebook"><a href="#">Facebook</a></li>
		    			<li class="vimeo"><a href="#">Vimeo</a></li>
		    			<li class="youtube"><a href="#">Youtube</a></li>
		    			<li class="skype"><a href="#">Skype</a></li>
		    		</ul>
		    	</div><!-- end #social -->
			</div><!-- .container -->
		</div><!-- #footer-bottom-wraper -->
	</div><!-- #footer-wraper -->
		
		
		
	<!-- JavaScript
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>	

	<!-- All Scripts -->
	<script type="text/javascript" src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/js/scripts.js"></script>
	<!-- jQuery Countdown -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-countdown/1.6.0/jquery.countdown.min.js"></script>
	<!-- Easing plugin -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<!-- FlexSlider -->
	<script type="text/javascript" src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/js/jquery.flexslider-min.js"></script>
	<!-- prettyPhoto -->
	<script src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
	<link rel="stylesheet" href="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/js/prettyPhoto/css/prettyPhoto.css" media="screen" />
	
    
	
	<!-- Twitter -->
	<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
	<script>
	getTwitters('tweet', { 
		id: 'bigskydevcon', 
		count: 1, 
		enableLinks: true, 
		ignoreReplies: true, 
		clearContents: true,
		template: '"%text%" <a href="http://twitter.com/%user_screen_name%/statuses/%id_str%/">%time%</a>'
	});
    </script>

	
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>