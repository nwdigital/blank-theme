<?php
/**
 * The template for displaying the sidebar.
 *
 * @package NWDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<p>I'm the sidebar.php template.</p>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </ul>
<?php } ?>
