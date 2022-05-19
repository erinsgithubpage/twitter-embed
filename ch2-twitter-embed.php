<?php

/*
  Plugin Name: Twitter Embed
  Plugin URI: https://erinswebsite.biz
  Description: Embedded Twitter Feed
  Author: Erin
  Version: 1.0
  Author URI: https://erinswebsite.biz
 */

add_shortcode( 'twitterfeed', 'ch2te_twitter_embed_shortcode' );

function ch2te_twitter_embed_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'user_name' => 'hazelwood_erin'
    ), $atts ) );
	
	if ( empty( $user_name ) ) {
        $user_name = 'hazelwood_erin';
    } else {
		$user_name = sanitize_text_field( $user_name );
	}
    
	$output = '<p><a class="twitter-timeline" href="';
	$output .= esc_url( 'https://twitter.com/' . $user_name );
	$output .= '">Tweets by ' . esc_html( $user_name );
	$output .= '</a></p><script async ';
	$output .= 'src="//platform.twitter.com/widgets.js" ';
	$output .= 'charset="utf-8"></script>';
    
    return $output;
}

add_shortcode('twitter_embed', 'execute_twitter_embed');

/* add shortcode [twitterfeed] to shortcode widget for plugin