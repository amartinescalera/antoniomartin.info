<?php
	//Make a function to detect the navigator  
	function getUserLanguage() {  
		$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
		return $idioma;  
	} 
  
	//Set the language
	$user_language=getUserLanguage();

	include("header.php");
	print("<div class=\"container\">");
		include("menu.php");
	print("</div>");
	include("footer.php");

?>
