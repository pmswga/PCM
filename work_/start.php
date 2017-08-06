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
  
  if (!isset($_SESSION['currentImage'])) {
    $_SESSION['currentImage'] = null;
  }
  
	$CT = new CTemplater("templates/tpl", "templates/tpl_c", "templates/configs", "templates/cache");
  
  function setMessage(string $msg, string $type)
  {
    global $CT;
    
    $_SESSION['msgs'][] = array(
      "type" => $type,
      "msg" => $msg
    );
  }

  function unsetMessage()
  {
    unset($_SESSION['msgs']);
  }
  
?>
