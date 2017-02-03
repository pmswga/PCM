<?php
  
  require_once "structures/pclass.class.php";
  require_once "classes/pimage.class.php";
  
  use PCM\Classes\PImage;
  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PMethod;
  
  $class = new PClass(_NATIVE_, "First");
  $class->addVars([new PVar(_PRIVATE_, "a")]);
  $class->addVars([new PVar(_PRIVATE_, "b")]);
  $class->addVars([new PVar(_PRIVATE_, "c")]);
  
  $image = new PImage("Smalltalk", [$class]);
  
  $image->export();
  
  echo "<pre>";
  print_r($image);
  echo "</pre>";
  
?>