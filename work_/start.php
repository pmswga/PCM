<?php

	require_once "pcm/classes/pimage.class.php";
	require_once "pcm/classes/pworkspace.class.php";
	require_once "engine/ctemplater.php";
	require_once "engine/ctools.php";

	use PCM\Classes\PImage;

	session_start();
  
  if (!isset($_SESSION['images'])) {
    
    $_SESSION['images'] = array();
    
  }
  
  if (!isset($_SESSION['current_image'])) {
    
    $_SESSION['current_image'] = null;
    
  }
  
	$CT = new CTemplater("templates/tpl", "templates/tpl_c", "templates/configs", "templates/cache");
  
?>
