<?php
  
  require_once "structures/pclass.class.php";
  require_once "classes/pimage.class.php";
  require_once "classes/pimagesmanager.class.php";
  
  use PCM\Classes\PImagesManager;
  use PCM\Classes\PImage;
  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PMethod;
  
  $class = new PClass(_NATIVE_, "First");
  $class->addVars([new PVar(_PRIVATE_, "a")]);
  $class->addVars([new PVar(_PRIVATE_, "b")]);
  $class->addVars([new PVar(_PRIVATE_, "c")]);
  
  $image = PImage::import("Smalltalk");
  $image2 = PImage::import("Smalltalk2");
  
  $IM = new PImagesManager([$image, $image2]);
  
  echo "<pre>";
  print_r($IM->getImage("Smalltalk3"));
  echo "</pre>";
  
?>