<?php
/*
Plugin Name: Search Widget
Description: Widget for searching words from an API values
Version: 0.1
Author: Lucas Pineda Metz
*/

class search_words_API extends WP_Widget {
     
    function __construct() {
		parent::__construct('search_words_API','Search Words API',
			array (
				'description' => __( 'Used for searching word from the information fetched by an API.', 'tutsplus' )
        )
         
    );
    }
     
    function form( $instance ) {    
	//outputs the options form on admin       
	$title = ( !empty( $instance['title'] ) ) ? $instance['title'] : '';
        ?>
 
        <label for="<?php echo $this->get_field_name( 'title' ); ?>">Title: </label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
          name="<?php echo $this->get_field_name( 'title' ); ?>"
          type="text" value="<?php echo esc_attr( $title ); ?>" />
         
        <?php 
    }
     
    function widget( $args, $instance ) {
                 //change this url to the WP-API endpoint for your site!
        $response = wp_remote_get( 'https://api.github.com/users/wordpress' );
 
        if( is_wp_error( $response ) ) {
            return;
        }
 
        $posts =  json_decode(wp_remote_retrieve_body( $response,'login' )) ;
 
        if( empty( $posts ) ) {
            return;
        }
 
        echo $args['before_widget'];
        if( !empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base ) . $args['after_title'];
        }
		
				//echo $posts;
		//echo $response;
        //main widget content
        if( !empty( $posts ) ) {
         
            echo '<ul>';      
            foreach( $posts as $post ) {
                echo '<li>' . $post. '"</li> ';
            }
             
        }
 
        echo $args['after_widget'];
    }
}
function register_search_words_API() {
 
    register_widget( 'search_words_API' );
 
}
add_action( 'widgets_init', 'register_search_words_API' );

