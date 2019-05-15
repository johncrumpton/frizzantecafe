<?php


function quark_widgets_init() {
register_sidebar( array(
			'name' => esc_html__( 'Footer line', 'quark' ),
			'id' => 'footer-line',
			'description' => esc_html__( 'Line', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => ' ',
			'after_title' => ' '
		) );
}
add_action( 'widgets_init', 'quark_widgets_init' );

the_post_thumbnail( array(722, 467) );  // Our story