<?php
	//Make a function to detect the navigator  
	function getUserLanguage() {  
		$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
		return $idioma;  
	} 
  
	//Set the language
	$user_language=getUserLanguage(); 
   
	//De acuerdo al idioma hacemos una o varias redirecciones. 
	if($user_language=='en') { 
		header('Location: http://www.antoniomeh.info/en'); 
	} else { 
		header('Location: http://www.antoniomeh.info/es'); 
	} 
?>
