<?php
  
  require_once "../start.php";
  
	$TMP = new CTemplater("../templates/tpl", "../templates/tpl_c", "../templates/configs", "../templates/cache");
  
  $methods = $_SESSION['currentImage']->getClass($_POST['className'])['supclass']->getMethods();
  
  $TMP->assign("methods", $methods);
  $TMP->Show("tables/methods_table.tpl");
  
?>
