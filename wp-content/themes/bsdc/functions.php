<?php

/////////////////////////////////////////////
// Setup our sidebar and widgets

// register_sidebar();  If not inheriting from a parent theme you'll probably need to add this.

function bsdc_widgets_init()
{
    // The parent theme adds a ton of widget areas to the sidebar, we want to create some areas
    // that we can drop widgets into our child theme.
    register_sidebar( array(
                        'name'          => __( 'Left Column Front Page', 'bsdc' ),
                        'id'            => 'left-column-widget-area',
                        'description'   => __( 'Left column on the front page', 'bsdc' ),
                        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
                        'after_widget'  => '</li>',
                        'before_title'  => '<h3 class="widget-title">',
                        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
                        'name'          => __( 'Middle Column Front Page', 'bsdc' ),
                        'id'            => 'middle-column-widget-area',
                        'description'   => __( 'Middle column on the front page', 'bsdc' ),
                        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
                        'after_widget'  => '</li>',
                        'before_title'  => '<h3 class="widget-title">',
                        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
                        'name'          => __( 'Right Column Front Page', 'bsdc' ),
                        'id'            => 'right-column-widget-area',
                        'description'   => __( 'Right column on the front page', 'bsdc' ),
                        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
                        'after_widget'  => '</li>',
                        'before_title'  => '<h3 class="widget-title">',
                        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'bsdc_widgets_init' );
