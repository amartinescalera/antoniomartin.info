<!DOCTYPE html>

<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->

<head>
  <meta charset="UTF-8">

  <!-- Remove this line if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="viewport" content="width=device-width">

  <meta name="description" content="HTML5 / CSS3 template.">
  <meta name="author" content="Antonio Martín de la Escalera Hernández">

  <title>HOME // Antoniomeh</title>

  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="shortcut icon" type="image/png" href="../img/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a
  different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to
  experience this site.</p><![endif]-->
<div class="container">
	<?php

	if($user_language=='es') {
		include("es/header.html");
	} else {
		include("en/header.html");
	}
	?>
</div>