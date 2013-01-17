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
        <!-- Good spot for custom post types -->
        <ul class="slides">
            
            <?php
            $query = 'post_type=slide&posts_per_page=-1';
            $slideQuery = new WP_Query( $query );
            if( $slideQuery->have_posts() ) : while ( $slideQuery->have_posts() ) : $slideQuery->the_post();
                $slideImage = (object)get_field( 'slide_image' );
            ?>
            
            <li>
                <img src="<?php echo $slideImage->url ?>" width="1600" height="1200" />
                <div class="featured-wraper container container-twelve">
                    <div class="featured-content seven columns">
                        <h1 class="featured-title"><a href="#"><?php the_title(); ?></a></h1>
                        <div class="featured-entry">
                            <?php the_content(); ?>
                        </div><!-- .featured-entry-->
                    </div><!-- .featured-content -->
                </div><!-- .featured-wraper -->
            </li>
            
            <?php endwhile; endif; ?>
            
        </ul>
    </div>
</div><!-- #sliderWraper -->

<div id="twitterWraper">
    <div class="container container-twelve">
<!--        <div id="tweet" class="nine columns">
        </div> .nine -->
        <div id="topSocial" class="twelve columns">
            <ul>
                <li class="topTwitter"><a href="https://twitter.com/bigskydevcon">Twitter</a></li>
                <li class="topFacebook"><a href="https://www.facebook.com/MontanaProgrammers">Facebook</a></li>
                <li class="topMail"><a href="mailto:organizer@bigskydevcon.org">Mail</a></li>
            </ul>
        </div><!-- three -->
    </div><!-- .container -->
</div><!-- #twitterWraper -->

<div class="container container-twelve">
	
		<div id="front-left-column" class="six columns">
			<div class="container-box">
				<div class="container-box-inner">
                    
                <?php if ( !dynamic_sidebar('left-column-widget-area') ) : ?>
                    
                    <h2 class="heading">Our default left column</h2>
                    
                <?php endif; ?>
                    
				</div><!-- .container-box-inner -->
			</div><!-- .container-box -->
			<div class="box-bottom bottom-main"></div>
		</div><!-- .six -->
		
		<div id="front-right-column" class="six columns">
			<div class="container-box">
				<div class="container-box-inner">
                    
                <?php if ( !dynamic_sidebar('right-column-widget-area') ) : ?>
                    
                    <h2 class="heading">Our default right column</h2>
                        
                <?php endif; ?>
                        
				</div><!-- .container-box-inner -->
			</div><!-- .container-box -->
			<div class="box-bottom bottom-sidebar"></div>
		</div><!-- .six -->
		
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
