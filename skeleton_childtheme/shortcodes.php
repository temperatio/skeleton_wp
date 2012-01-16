<?php
// Callouts

if ( !function_exists( 'st_callout' ) ) {

function st_callout( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'width' => '',
		'align' => '',
		'color' => ''
    ), $atts));
	$style;
	if ($width || $align || $color) {
	 $style .= 'style="';
	 if ($width) $style .= 'width:'.$width.';';
	 if ($align == 'left' || 'right') $style .= 'float:'.$align.';';
	 if ($align == 'center') $style .= 'margin:0px auto;';
	 if ($color) $style .= 'backgroun-color:'.$color.';';
	 $style .= '"';
	}
   return '<div class="cta" '.$style.'>' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('callout', 'st_callout');

}