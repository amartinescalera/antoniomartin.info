<?php
/**
 * Theme asset loading with conditional enqueue for performance.
 *
 * @package WordPress
 * @subpackage AntonioMartin
 * @since 3.0.1
 */

/**
 * Whether the current page uses the stripped-down resume template.
 *
 * @return bool
 */
function mynote_is_resume_template() {
	return is_page_template( 'page-templates/resume.php' );
}

/**
 * Whether the current page uses an about/resume extended template.
 *
 * @return bool
 */
function mynote_is_about_template() {
	return is_page_template(
		array(
			'page-templates/about_en.php',
			'page-templates/about_es.php',
		)
	);
}

/**
 * Preconnect to Google Fonts origins.
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array
 */
function mynote_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type && ! mynote_is_resume_template() ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}

	return $urls;
}

add_filter( 'wp_resource_hints', 'mynote_resource_hints', 10, 2 );

/**
 * Register and enqueue front-end styles.
 *
 * @return void
 */
function mynote_enqueue_styles() {
	$theme_uri = get_template_directory_uri();

	wp_register_style( 'bootstrap', $theme_uri . '/assets/css/bootstrap.min.css', array(), '4.1.0' );
	wp_register_style( 'fontawesome', $theme_uri . '/assets/css/fontawesome-all.min.css', array(), '5.1.0' );
	wp_register_style(
		'mynote-font-roboto',
		'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap',
		array(),
		null
	);
	wp_register_style( 'mynote', $theme_uri . '/style.css', array( 'bootstrap' ), '3.0.0' );
	wp_register_style( 'mynote-yui-grids', $theme_uri . '/assets/css/reset-fonts-grids.css', array(), '2.7.0' );
	wp_register_style( 'mynote-resume', $theme_uri . '/assets/css/resume.css', array( 'mynote-yui-grids' ), '1.0.0' );

	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'mynote' );

	if ( mynote_is_resume_template() ) {
		wp_dequeue_style( 'mynote-font-roboto' );
		wp_enqueue_style( 'mynote-resume' );
	} else {
		wp_enqueue_style( 'mynote-font-roboto' );
	}
}

add_action( 'wp_enqueue_scripts', 'mynote_enqueue_styles' );

/**
 * Register and enqueue front-end scripts.
 *
 * @return void
 */
function mynote_enqueue_scripts() {
	if ( is_admin() || 'wp-login.php' === $GLOBALS['pagenow'] ) {
		return;
	}

	wp_register_script(
		'bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
		array( 'jquery' ),
		'4.1.0',
		true
	);
	wp_enqueue_script( 'bootstrap' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'mynote_enqueue_scripts' );

/**
 * Add defer to non-critical theme scripts.
 *
 * @param string $tag    Script tag HTML.
 * @param string $handle Script handle.
 * @return string
 */
function mynote_defer_scripts( $tag, $handle ) {
	if ( 'bootstrap' === $handle ) {
		return str_replace( ' src', ' defer src', $tag );
	}

	return $tag;
}

add_filter( 'script_loader_tag', 'mynote_defer_scripts', 10, 2 );
