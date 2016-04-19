<?php

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 500, true );

	//MV: 11/30/15: adding custom image size
	add_image_size( 'mv-featured-large', 1050, 700, false ); // width, height, crop

	//http://wpshout.com/adding-using-custom-image-sizes-wordpress-guide-best-thing-ever/
	// Register the three useful image sizes for use in Add Media modal
	add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
	function wpshout_custom_sizes( $sizes ) {
	    return array_merge( $sizes, array(
	        'mv-featured-large' => __( 'Full Width' ),
	    ) );
	}