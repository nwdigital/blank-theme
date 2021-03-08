<?php
/**
 * The template for displaying the 404 page.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<p>I'm the 404 template.</p>

<?php

get_search_form();

get_sidebar();

get_footer();
