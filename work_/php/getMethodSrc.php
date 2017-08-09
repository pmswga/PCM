<?php

  require_once "../start.php";

  $method = $_SESSION['currentImage']->getClass($_POST['className'])['supclass']->getMethod($_POST['methodName']);
  
  echo $method->getSrc();
  
?>
