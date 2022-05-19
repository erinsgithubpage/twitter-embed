<?php

/*
  Plugin Name: Chapter 2 - Twitter Shortcode
  Plugin URI: https://erinswebsite.biz
  Description: Companion to recipe 'Creating a new simple shortcode'
  Author: Erin
  Version: 1.0
  Author URI: https://erinswebsite.biz
 */

add_shortcode( 'tl', 'ch2ts_twitter_link_shortcode' );

function ch2ts_twitter_link_shortcode( $atts ) {
	$output = '<a href="https://twitter.com/hazelwood_erin">';
	$output .= 'Twitter Feed</a>';
	return $output;
}