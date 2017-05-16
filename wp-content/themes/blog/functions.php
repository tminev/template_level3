<?php
$args = ['name' => __( 'Sidebar_Right'),
	'id'        => 'right',
	'before_widget' => '<div>',
	'after_widget'  => '</div>'
	];
register_sidebar($args);


$args = ['name' => __( 'Sidebar_bottom'),
	'id'        => 'bottom',
	'before_widget' => '<div>',
	'after_widget'  => '</div>'
	];
register_sidebar($args);

register_nav_menu('header', 'header-menu');



register_nav_menu('bottom', 'bottom-menu');

add_theme_support( 'post-thumbnails' );



 $args_com = array(
	'author_email' => '',
	'author__in' => '',
	'author__not_in' => '',
	'include_unapproved' => '',
	'fields' => '',
	'ID' => '',
	'comment__in' => '',
	'comment__not_in' => '',
	'karma' => '',
	'number' => '',
	'offset' => '',
	'orderby' => '',
	'order' => 'DESC',
	'parent' => '',
	'post_author__in' => '',
	'post_author__not_in' => '',
	'post_ID' => '', // ignored (use post_id instead)
	'post_id' => 0,
	'post__in' => '',
	'post__not_in' => '',
	'post_author' => '',
	'post_name' => '',
	'post_parent' => '',
	'post_status' => '',
	'post_type' => '',
	'status' => 'all',
	'type' => '',
        'type__in' => '',
        'type__not_in' => '',
	'user_id' => '',
	'search' => '',
	'count' => false,
	'meta_key' => '',
	'meta_value' => '',
	'meta_query' => '',
	'date_query' => null, // See WP_Date_Query
);