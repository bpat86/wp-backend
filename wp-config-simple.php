<?php

// This constant loads only the minimal version of WordPress.
define( 'SHORTINIT', true );

// We need the wp-load.php to fetch the pages.
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );

require_once( $parse_uri[0] . 'wp-load.php' );
