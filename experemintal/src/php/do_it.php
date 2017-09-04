<?php
	
	require_once "../start.php";
	
	use PCM\Classes\PWorkspace;
	
	if (!empty($_POST['code'])) {
		
    if (isset($_SESSION['tmp_image'])) {
      $classes = array_reverse($_SESSION['tmp_image']->getClasses());
      foreach ($classes  as $class) {
        
        PWorkspace::setClass($class->for_test());
      }
    }
    
		echo PWorkspace::run($_POST['code']);
		
	}
	
?>