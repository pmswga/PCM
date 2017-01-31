<?php
	require_once "pcm/classes/pimage.class.php";
    require_once "engine/ctemplater.php";
    require_once "engine/ctools.php";
    
	session_start();
    
    $CT = new CTemplater("templates/tpl", "templates/tpl_c", "templates/configs", "templates/cache");
?>