<?php
$args = ['name' => __( 'Sidebar_Right'),
	'id'        => 'right',
	'before_widget' => '<div>',
	'after_widget'  => '</div>'
	];
register_sidebar($args);

register_nav_menu('header', 'header menu');