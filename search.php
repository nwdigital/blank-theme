<?php
/**
 * The template for displaying the search results page.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <?php
  printf(
    /* translators: 1: Search query name */
    __( 'Search Results for: %s', 'generatepress' ),
    '<span>' . get_search_query() . '</span>'
  );
  ?>

<?php
get_search_form();

get_sidebar();

get_footer();
