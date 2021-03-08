<?php
/**
 * Template Name: Snarfer.php
 * Template Post Type: post, page, product
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<p>I'm the custom page template snarfer.php template.</p>

<?php the_content(); ?>

<?php get_search_form(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
