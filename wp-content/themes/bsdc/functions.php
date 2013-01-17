<?php

/////////////////////////////////////////////////////////////////////////
// Setup our sidebar and widgets
/////////////////////////////////////////////////////////////////////////
// register_sidebar();  If not inheriting from a parent theme you'll probably need to add this.

function bsdc_widgets_init()
{
    // The parent theme adds a ton of widget areas to the sidebar, we want to create some areas
    // that we can drop widgets into our child theme.
    register_sidebar( array(
                        'name'          => 'Left Column Front Page',
                        'id'            => 'left-column-widget-area',
                        'description'   => 'Left column on the front page',
                        'before_widget' => '',
                        'after_widget'  => '',
                        'before_title'  => '<h2 class="heading">',
                        'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
                        'name'          => 'Right Column Front Page',
                        'id'            => 'right-column-widget-area',
                        'description'   => 'Right column on the front page',
                        'before_widget' => '',
                        'after_widget'  => '',
                        'before_title'  => '<h2 class="heading">',
                        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bsdc_widgets_init' );


/////////////////////////////////////////////////////////////////////////
// Widgets!!!
/////////////////////////////////////////////////////////////////////////

/**
 * Adds Facebook_Widget widget.
 * Must implement the constructor, widget, update, and form methods.
 */
class Facebook_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
                'facebook_widget', // Base ID
                'Facebook_Widget', // Name
                array( 'description' => 'A Widget to show a Facbook stream', ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance )
    {
        extract( $args );
        $widgetOutput = '';

        $widgetOutput .= $before_widget;
        if( !empty( $instance['title'] ) )
        {
            $widgetOutput .= $before_title . $instance['title'] . $after_title;
        }
        
        if( !empty( $instance['fb-account']) )
        {
            $widgetOutput .= '<div class="fb-like-box" data-href="https://www.facebook.com/' . $instance['fb-account'] . '" data-width="400" data-show-faces="true" data-stream="true" data-header="true"></div>';
        
            // Lazy - could add this to wp_footer
            $widgetOutput .= '<div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, "script", "facebook-jssdk"));</script>';
        }
        $widgetOutput .= $after_widget;
        
        echo $widgetOutput;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance )
    {
        $instance = array( );
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['fb-account'] = strip_tags( $new_instance['fb-account'] );

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance )
    {
        if( isset( $instance['title'] ) )
        {
            $title = $instance['title'];
        }
        else
        {
            $title = 'Facebook';
        }
        
        if( isset( $instance['fb-account']) )
        {
            $fbAccount = $instance['fb-account'];
        }
        else
        {
            $fbAccount = '';
        }
        ?>
        		<p>
        		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo 'Title:'; ?></label> 
        		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        		</p>
                
                <p>
        		<label for="<?php echo $this->get_field_id( 'fb-account' ); ?>"><?php echo 'Facebook Account:'; ?></label> 
        		<input class="widefat" id="<?php echo $this->get_field_id( 'fb-account' ); ?>" name="<?php echo $this->get_field_name( 'fb-account' ); ?>" type="text" value="<?php echo esc_attr( $fbAccount ); ?>" />
        		</p>
        <?php
    }

}
// register Foo_Widget widget
add_action( 'widgets_init', create_function( '', 'register_widget( "facebook_widget" );' ) );



/////////////////////////////////////////////////////////////////////////
// Post Types
/////////////////////////////////////////////////////////////////////////

/**
 * We need to tell WP to add a post type to the defaults
 */
function create_post_type()
{
    register_post_type( 'slide',
                        array(
                                'labels'        => array(
                                'name'          => __( 'Slides' ),
                                'singular_name' => __( 'Slide' )
                        ),
                        'public'        => true,
                        'has_archive'   => false
                        )           
    );
}
add_action( 'init', 'create_post_type' );