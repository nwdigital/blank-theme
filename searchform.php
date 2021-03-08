<?php
/**
 * The template for displaying the search results page.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"></span>
		<input type="search" class="search-field" placeholder="" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:">
	</label>
	<input type="submit" class="search-submit" value="Search">
</form>

<?php

  printf(
    /* translators: 1: Search query name */
    __( 'Search Results for: %s', 'nwdigital' ),
    '<span>' . get_search_query() . '</span>'
  );
