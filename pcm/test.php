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
  
  $class2 = new PClass(_NATIVE_, "Second");
  $class2->addVars([new PVar(_PRIVATE_, "a")]);
  $class2->addVars([new PVar(_PRIVATE_, "b")]);
  $class2->addVars([new PVar(_PRIVATE_, "c")]);
  
  $image = new PImage("Smalltalk-72", [$class, $class2]);
  $image2 = new PImage("Smalltalk-80", [$class]);
  
  //file_put_contents("img.php", $image);
  
  //$IM = new PImagesManager([$image, $image2]);
  
  $image->generate();
  
  echo "<pre>";
  print_r($image);
  echo "</pre>";
  
?>