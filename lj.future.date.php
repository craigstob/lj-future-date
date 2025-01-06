<?php

/**
 * Plugin Name:   Local Jungle Future Date Shortcode
 * Plugin URI:    https://www.mrwpress.com
 * Description:   Display date by adding days to the current day.
 * Version:       1.0.0
 * Author:        Local Jungle
 * Author URI:    https://www.localjungle.com
 * Text Domain:   ljfd
 *
 * ------------------------------------------------------------------------
 * Copyright 2022 Mr. WPress
 *
 */

// No direct access allowed.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_shortcode('future_date', 'lj_future_date');
function lj_future_date($atts) {
	extract(shortcode_atts(array(
		'days' => '14',
	), $atts));
	return '<span class="lj_future_date">' . date("m-d-Y", strtotime('+ ' . $days . ' days')) . '</span>';
}