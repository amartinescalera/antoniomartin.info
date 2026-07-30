/**
 * Customize_Image_Radio_Control
 *
 * Use the image instead of origin radio button.
 *
 * @package   WordPress
 * @author    Antonio Martin <amartinescalera>
 * @license   GPLv3 (or later)
 * @link      https://www.antoniomartin.info/
 * @copyright 2026 Antonio Martin
 */
jQuery( document ).ready( function( $ ) {
    $( '.radio-controls li img' ).click (function () {
        $( '.radio-controls li' ).each( function () {
            $( this ).find( 'img' ).removeClass( 'radio-img-selected' );
        });
        $( this ).addClass( 'radio-img-selected' );
    });
});
