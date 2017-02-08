<?php
	require_once "pcm/classes/pimage.class.php";
    require_once "engine/ctemplater.php";
    require_once "engine/ctools.php";

    use PCM\Classes\PImage;

    session_start();

    if (!isset($_SESSION['tmp_image'])) {      
      $_SESSION['tmp_image'] = new PImage("tmp");
    }
    

    $CT = new CTemplater("templates/tpl", "templates/tpl_c", "templates/configs", "templates/cache");
?>