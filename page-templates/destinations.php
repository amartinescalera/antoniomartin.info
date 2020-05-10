<?php
/**
 * Template Name: Destinations
 * Description: all destinations that we have
 *
 * EnjoySports S.L.
 * frontEnd
 *
 * User: antoniomeh
 * Date: 28/08/16
 *
 * @package EnjoySports
 * @since EnjoySports 1.0
 */

	$_GET['pageName'] = 'Destinos';

	get_header();
	global $wpdb;

	$base = dirname(__FILE__);
	require_once($base . '/../enjoysports/ApiService.php');
	$api = new ApiService();

	include $base . '/../cities.php';
	include $base . '/../citiesList.php';
	include $base . '/../suscriber.php';
	//    include $base . '/../products.php';
	include $base . '/../specialOffer.php';

	get_footer();