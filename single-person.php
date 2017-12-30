<?php
/*
Template Name: Single Person
*/
?>

<?php get_header(); ?>

<?php

wp_register_style( 'millenium_single-product', plugin_dir_url( __FILE__ ) . '/library/css/single.css', false, '1.0.0' );
wp_enqueue_style( 'millenium_single-product' );

wp_register_script( 'carousel_script', plugin_dir_url( __FILE__ ) . '/library/js/jquery.carouFredSel-6.1.0-packed.js', array( 'jquery' ), 'all', true );
wp_enqueue_script( 'carousel_script' );

wp_register_script( 'cp_script', plugin_dir_url( __FILE__ ) . '/library/js/chatpress.js', array( 'jquery' ), 'all', true );
wp_enqueue_script( 'cp_script' );

?>

			<div class="container">

				<div id="content" class="clearfix row">

					<div id="main" class="col-md-12 clearfix" role="main">


						<div class="span12" style="text-align: center; overflow: hidden; padding-bottom: 5px;">
						<img style="width: 250px; overflow: hidden;" src="<?php echo get_post_meta( get_the_ID(), 'br_portrait', true ); ?>" />
						<p style="overflow: hidden; text-align: center;" class="title-text"><?php echo esc_attr( get_post_meta( get_the_ID(), 'br_title', true ) ); ?></p>
						<div style="overflow: hidden; text-align: center;" class="name-text span12"><?php echo esc_attr( get_post_meta( get_the_ID(), 'br_name', true ) ); ?></div>
					</div>

								<div class="bio-text" style="text-align: center; width: 100%;"><?php echo esc_attr( get_post_meta( get_the_ID(), 'br_bio', true ) ); ?></div>
						</div>

				</div>


					</div> <!-- end #main -->

				</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
