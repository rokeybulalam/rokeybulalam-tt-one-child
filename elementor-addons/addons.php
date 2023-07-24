<?php

function rokeybulalam_tt_one_child_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world.php' );
	
	$widgets_manager->register( new \Rokeybulalam_Elementor_Addon_Hello_World() );

}
add_action( 'elementor/widgets/register', 'rokeybulalam_tt_one_child_widget' );