<?php
  
  require_once "../start.php";
  
	$TMP = new CTemplater("../templates/tpl", "../templates/tpl_c", "../templates/configs", "../templates/cache");
  
  $vars = $_SESSION['currentImage']->getClass($_POST['className'])['supclass']->getVars();
  
  $TMP->assign("vars", $vars);
  $TMP->Show("tables/vars_table.tpl");
  
?>
