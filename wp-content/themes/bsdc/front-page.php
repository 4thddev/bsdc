<?php
/**
 * Template for home page.
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<div id="sliderWraper">
    <div id="featuredSlider" class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/ny2.jpg" width="1600" height="1200" alt="" />
                <div class="featured-wraper container container-twelve">
                    <div class="featured-content seven columns">
                        <h1 class="featured-title"><a href="#">This is a featured post</a></h1>
                        <div class="featured-entry">
                            <p>Ut molestie dictum volutpat. Nam volutpat fermentum vestibulum. Vivamus molestie fringilla nibh non fermentum. Pellentesque sodales magna et lectus euismod consequat in sed libero.<a href="#">( Read More &rarr; )</a></p>
                        </div><!-- .featured-entry-->
                    </div><!-- .featured-content -->
                </div><!-- .featured-wraper -->
            </li>
            <li>
                <img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/ny3.jpg" width="1600" height="1200" alt="" />
                <div class="featured-wraper container container-twelve">
                    <div class="featured-content seven columns">
                        <h1 class="featured-title"><a href="#">Another great post that wraps</a></h1>
                        <div class="featured-entry">
                            <p>Pellentesque sodales magna et lectus euismod consequat in sed libero. In non mollis tortor. Sed libero augue, venenatis vitae lobortis vel, lobortis id dolor. Curabitur iaculis varius elit, accumsan malesuada urna vulputate eget... <a href="#">( Read More &rarr; )</a></p>
                        </div><!-- .featured-entry-->
                    </div><!-- .featured-content -->
                </div><!-- .featured-wraper -->
            </li>
            <li>
                <img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/ny1.jpg" width="1600" height="1200" alt="" />
                <div class="featured-wraper container container-twelve">
                    <div class="featured-content seven columns">
                        <h1 class="featured-title"><a href="#">Full width featured image</a></h1>
                        <div class="featured-entry">
                            <p> In non mollis tortor. Sed libero augue, venenatis vitae lobortis vel, lobortis id dolor. Curabitur iaculis varius elit, accumsan malesuada urna vulputate eget. Etiam et velit et diam congue vestibulum. Phasellus commodo... <a href="#">( Read More &rarr; )</a></p>
                        </div><!-- .featured-entry-->
                    </div><!-- .featured-content -->
                </div><!-- .featured-wraper -->
            </li>
        </ul>
    </div>
</div><!-- #sliderWraper -->

<div id="twitterWraper">
    <div class="container container-twelve">
        <div id="tweet" class="nine columns">
        </div><!-- .nine -->
        <div id="topSocial" class="three columns">
            <ul>
                <li class="topTwitter"><a href="https://twitter.com/bigskydevcon">Twitter</a></li>
                <li class="topFacebook"><a href="https://www.facebook.com/MontanaProgrammers">Facebook</a></li>
                <li class="topMail"><a href="mailto:organizer@bigskydevcon.org">Mail</a></li>
            </ul>
        </div><!-- three -->
    </div><!-- .container -->
</div><!-- #twitterWraper -->

<div class="container container-twelve">
	
		<div id="counter-container" class="twelve columns container-box">
			<div class="seven columns alpha">
				<div class="container-box-inner em-large">
					<p>Meet other techies, developers, designers, and tech-preneurs at MSU in Bozeman, MT</p>
				</div>
			</div>
			<div class="five columns omega">
				<div class="container-box-inner">
					<div class="counter">
					</div><!-- #counter -->
					<div class="buy-tickets">
						<a href="#">Buy Tickets Now</a>
					</div>
				</div>
			</div>
		</div><!-- .twelve -->
		<div class="clear"></div>
		<div class="box-bottom bottom-full"></div>		
		<div id="speakers-wraper" class="container container-twelve">
			<div class="twelve columns">
				<div class=" container-box">
					<div class="container-box-inner">
						<h2 class="heading center"><span>The speakers</span></h2>
						<div id="speakers">
							<div id="carousel" class="flexslider">
								<ul class="slides">
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker1.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Johnathan Doe</a><br />
						    	    		<span class="small">Designer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker2.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Janice Doe</a><br />
						    	    		<span class="small">Java Developer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker3.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Rebecca Diaz</a><br />
						    	    		<span class="small">PHP Guru</span>
						    	    	</div><!-- .speaker-desc -->									
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker4.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Juan Lienson</a><br />
						    	    		<span class="small">Ruby Guru</span>
						    	    	</div><!-- .speaker-desc -->										
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker5.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Mark Davison</a><br />
						    	    		<span class="small">Python Developer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker6.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Matt Skerlson</a><br />
						    	    		<span class="small">Designer/Developer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker1.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Johnathan Doe</a><br />
						    	    		<span class="small">Designer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker2.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Janice Doe</a><br />
						    	    		<span class="small">Java Developer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker3.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Rebecca Diaz</a><br />
						    	    		<span class="small">PHP Guru</span>
						    	    	</div><!-- .speaker-desc -->									
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker4.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Juan Lienson</a><br />
						    	    		<span class="small">Ruby Guru</span>
						    	    	</div><!-- .speaker-desc -->										
									</li>
									<li>
										<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/speaker5.jpg" alt="speaker2" width="150" height="150" /></a>
										<div class="speaker-desc">
						    	    		<a href="#">Mark Davison</a><br />
						    	    		<span class="small">Python Developer</span>
						    	    	</div><!-- .speaker-desc -->
									</li>
								</ul>
							</div><!-- .flexslider -->
						</div><!-- #speakers -->
					</div><!-- .container-box.inner -->	
				</div><!-- .container-box -->
				<div class="box-bottom bottom-full"></div>
			</div>
		</div><!-- #speakers-wraper -->
	
		<div class="eight columns">
			<div class="container-box">
				<div class="container-box-inner">
					<h2 class="heading"><span>What is this event all about?</span></h2>
						<ul class="check">
							<li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in. Vulputate sem tristique cursus.</li>
							<li>Magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.</li>
							<li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula.</li>
							<li>Vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo.</li>
							<li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut.</li>
						</ul>
				</div><!-- .container-box-inner -->
			</div><!-- .container-box -->
			<div class="box-bottom bottom-main"></div>
		</div><!-- .eight -->
		
		<div class="four columns">
			<div class="container-box">
				<div class="container-box-inner">
					<h2 class="heading"><span>News</span></h2>
						<ul class="calendar">
							<li>
								<a href="#">Lorem ipsum dolor sit amet, 
	consectetur adipiscing elit.</a>
								<br />
								<span class="small">June 18th</span>
							</li>
							<li>
								<a href="#">Vonsectetur adipiscing elit</a>
								<br />
								<span class="small">June 13th</span>
							</li>
							<li>
								<a href="#">Dolor sit amet, consectetur adip</a>
								<span class="small">May 27th</span>
							</li>
						</ul>
				</div><!-- .container-box-inner -->
			</div><!-- .container-box -->
			<div class="box-bottom bottom-sidebar"></div>
		</div><!-- .four -->
		
		<div class="twelve columns">
			<div class="container-box">
				<div class="container-box-inner">
					<h2 class="heading"><span>Bozeman, Montana</span></h2>
						<img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/placeholders/msg.jpg" alt="msg" width="278" height="210" class="left" />
						<div class="em-large">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet tortor id ligula vulputate volutpat.</p>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet tortor id ligula vulputate volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tempor vehicula porta. Phasellus magna arcu, commodo non porta vulputate, mattis eget lacus. Nulla eget leo ipsum.<a href="venue.html">( Read More &rarr; )</a></p>
				</div>
			</div><!-- .container-box -->
			<div class="box-bottom bottom-full"></div>
		</div><!-- .twelve -->
		
	</div><!-- container -->
	
	<div id="sponsors" class="container container-twelve">
		<h2 class="heading-bg-less center">Presented by:</h2>
		<div class="three columns">
			<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/sponsor-1.png" alt="sponsor-1" /></a>
		</div><!-- .four -->
		<div class="three columns">
			<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/sponsor-2.png" alt="sponsor-1" /></a>
		</div><!-- .four -->
		<div class="three columns">
			<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/sponsor-3.png" alt="sponsor-1" /></a>
		</div><!-- .four -->
		<div class="three columns">
			<a href="#"><img src="<?php echo get_bloginfo( 'wpurl' ) ?>/wp-content/themes/bsdc/images/sponsor-4.png" alt="sponsor-1" /></a>
		</div><!-- .four -->
	</div><!-- .container -->

<?php get_footer(); ?>