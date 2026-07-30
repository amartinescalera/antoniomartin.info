<?php
/**
 * The Pagination section of Mynote theme.
 *
 * @author Antonio Martin
 * @link https://www.antoniomartin.info/
 *
 * @package WordPress
 * @subpackage AntonioMartin
 * @since 1.0.0
 * @version 1.0.7.0
 */

?>

<div class="pagination-container">
	<?php

	if ( function_exists( 'mynote_pagination' ) ) {
		mynote_pagination();
	} else {
		the_posts_pagination(
			array(
				'prev_text'          => '<i class="fas fa-angle-left"></i> <span class="screen-reader-text">' . __( 'Previous page', 'mynote' ) . '</span>',
				'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'mynote' ) . '</span> <i class="fas fa-angle-right"></i>',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'mynote' ) . ' </span>',
			)
		);
	}

	?>
</div>
