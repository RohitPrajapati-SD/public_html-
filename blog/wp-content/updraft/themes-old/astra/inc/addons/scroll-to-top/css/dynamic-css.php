<?php
/**
 * Scroll To Top - Dynamic CSS
 *
 * @package Astra
 */

add_filter( 'astra_dynamic_theme_css', 'astra_scroll_to_top_dynamic_css', 11 );

/**
 * Dynamic CSS
 *
 * @param  string $dynamic_css          Astra Dynamic CSS.
 * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
 * @return string
 */
function astra_scroll_to_top_dynamic_css( $dynamic_css, $dynamic_css_filtered = '' ) {

	if ( true !== astra_get_option( 'scroll-to-top-enable', true ) ) {
		return $dynamic_css;
	}

	$link_color                    = astra_get_option( 'link-color' );
	$scroll_to_top_icon_size       = astra_get_option( 'scroll-to-top-icon-size', 15 );
	$scroll_to_top_icon_radius     = astra_get_option( 'scroll-to-top-icon-radius' );
	$scroll_to_top_icon_color      = astra_get_option( 'scroll-to-top-icon-color' );
	$scroll_to_top_icon_h_color    = astra_get_option( 'scroll-to-top-icon-h-color' );
	$scroll_to_top_icon_bg_color   = astra_get_option( 'scroll-to-top-icon-bg-color', $link_color );
	$scroll_to_top_icon_h_bg_color = astra_get_option( 'scroll-to-top-icon-h-bg-color' );

	$scroll_to_top = array(
		'#ast-scroll-top'       => array(
			'color'            => $scroll_to_top_icon_color,
			'background-color' => $scroll_to_top_icon_bg_color,
			'font-size'        => astra_get_css_value( $scroll_to_top_icon_size, 'rem' ),
			'border-radius'    => astra_get_css_value( $scroll_to_top_icon_radius, 'px' ),
		),
		'#ast-scroll-top:hover' => array(
			'color'            => $scroll_to_top_icon_h_color,
			'background-color' => $scroll_to_top_icon_h_bg_color,
		),
	);

	$scroll_css = astra_parse_css( $scroll_to_top );

	if ( is_rtl() ) {
		$scroll_to_top_rtl = array(
			'#ast-scroll-top .ast-icon.icon-arrow svg' => array(
				'margin-right' => '0px',
			),
		);

		$scroll_css .= astra_parse_css( $scroll_to_top_rtl );
	}

	if ( false === Astra_Icons::is_svg_icons() ) {
		$scroll_to_top_icon = array(
			'.ast-scroll-top-icon::before' => array(
				'content'         => '"\e900"',
				'font-family'     => 'Astra',
				'text-decoration' => 'inherit',
			),
			'.ast-scroll-top-icon'         => array(
				'transform' => 'rotate(180deg)',
			),

		);

		$scroll_css .= astra_parse_css( $scroll_to_top_icon );
	}

	// Only if responsive devices is selected.
	$svg_width = array(
		/**
		 * Add spacing based on padded layout spacing
		 */
		'#ast-scroll-top .ast-icon.icon-arrow svg' => array(
			'width' => '1em',
		),
	);

	$scroll_css .= astra_parse_css( $svg_width, '', astra_get_tablet_breakpoint() );

	return $dynamic_css . $scroll_css;
}
