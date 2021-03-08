<?php
/**
 * The template for displaying the front page.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();?>

<h1>sadfsdfasd</h1>
<p>I'm the front-page.php template.</p>

<?php the_content(); ?>

<?php get_search_form(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
