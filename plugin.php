<?php
/*
Plugin Name: Viglink Redirect
Plugin URI: https://github.com/HeroCC/yourls-viglink
Description: Redirect links through viglink
Version: 1.0
Author: HeroCC
Author URI: https://herocc.com
*/

if( !defined( 'YOURLS_ABSPATH' ) ) die(); // No direct call

function viglink_redirect( $url, $code ) {
  $VIGLINK_DOMAIN = "https://redirect.viglink.com"; // Replace this with your custom redirect URL (if you have one)
  $VIGLINK_KEY = "180719f894d4b8ca366a1e2e75e94233"; // Replace this with your Campaign Key
  $builtLink = $VIGLINK_DOMAIN . "/?key=" . $VIGLINK_KEY . "&u=" . $url;
  return $builtLink;
}
yourls_add_filter( 'redirect_location', 'viglink_redirect' );