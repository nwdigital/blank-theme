<?php
/**
 * The template for displaying pages.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<p>I'm the page.php template.</p>

<?php the_content(); ?>

<?php get_search_form(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
