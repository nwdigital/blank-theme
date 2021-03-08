<?php
/**
 * The template for displaying posts.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<p>I'm the single.php template.</p>

<?php the_content(); ?>

<?php get_search_form(); ?>

<?php get_sidebar(); ?>

<?php comment_form(); ?>

<?php get_footer(); ?>
