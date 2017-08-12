<?php

	require_once "pcm/classes/pimage.class.php";
	require_once "pcm/classes/pimagesmanager.class.php";
	require_once "pcm/classes/pworkspace.class.php";
	require_once "engine/ctemplater.php";
	require_once "engine/ctools.php";

	use PCM\Classes\PImage;

	session_start();
  
  if (!isset($_SESSION['settigns'])) {
    if (file_exists("settings.ini")) {      
      $_SESSION['settings'] = parse_ini_file("settings.ini", true);
      
      $image_export_folder = $_SESSION['settings']['General']['image_export_folder'];
      /* Prepare settings */
      
      if (!is_dir($image_export_folder)) {
        if (!mkdir($image_export_folder)) {
          die("Error create dir ".$image_export_folder);
        }
      }
      
    } else {
      
    }
  }
  
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
