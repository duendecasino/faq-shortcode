<?php

su_add_shortcode( array(
		'id' => 'faq',
		'callback' => 'su_shortcode_faq',
		'image' => su_get_plugin_url() . 'admin/images/shortcodes/accordion.svg',
		'name' => __( 'FAQ', 'shortcodes-ultimate' ),
		'type' => 'wrap',
		'group' => 'box',
		'required_child' => 'spoilerfaq',
		'atts' => array(
			'class' => array(
				'type' => 'extra_css_class',
				'name' => __( 'Extra CSS class', 'shortcodes-ultimate' ),
				'desc' => __( 'Additional CSS class name(s) separated by space(s)', 'shortcodes-ultimate' ),
				'default' => '',
			),
		),
		'content' => array(
			'id'     => 'spoilerfaq',
			'number' => 3,
		),
		'desc' => __( 'FAQ with spoilers', 'shortcodes-ultimate' ),
		'note' => __( 'Did you know that you can wrap multiple FAQ with [accordion] shortcode to create accordion effect?', 'shortcodes-ultimate' ),
		'example' => 'spoilers',
		'icon' => 'list',
	) );

function su_shortcode_faq( $atts = null, $content = null ) {

	$atts = shortcode_atts( array( 'class' => '' ), $atts, 'faq' );

	return '<div class="su-faq' . su_get_css_class( $atts ) . '" itemscope itemtype="http://schema.org/FAQPage">' . do_shortcode( $content ) . '</div>';

}
