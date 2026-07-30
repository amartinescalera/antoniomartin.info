<?php
/**
 * The sidebar part of Mynote theme.
 *
 * @author Antonio Martin
 * @link https://www.antoniomartin.info/
 *
 * @package WordPress
 * @subpackage AntonioMartin
 * @since 1.2.0
 * @version 1.2.0
 */

if ( ! is_active_sidebar( 'sidebar-7' ) ) {
	return;
}
?>

<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
	<div id="sidebar-archive" class="sidebar">
		<?php dynamic_sidebar( 'sidebar-7' ); ?>
	</div>
<?php endif; ?>

