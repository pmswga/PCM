<?php
  
  require_once "structures/pclass.class.php";
  require_once "classes/pimage.class.php";
  require_once "classes/pimagesmanager.class.php";
  
  use PCM\Classes\PImagesManager;
  use PCM\Classes\PImage;
  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PMethod;
  
  $object = new PClass(_NATIVE_, "Object");
  
  $class = new PClass(_NATIVE_, "First", "Object");
  $class->addVars([new PVar(_PRIVATE_, "a")]);
  
  $class2 = new PClass(_NATIVE_, "Second", "First");
  $class2->addVars([new PVar(_PRIVATE_, "a")]);
  
  $c3 = new PClass(_NATIVE_, "Third", "Object");
  
  $image = new PImage("Smalltalk-72", [$object, $class, $class2, $c3]);
  $image2 = new PImage("Smalltalk-80", [$class]);
  
  
  $image->addToHierarchia("Object", "First");
  $image->addToHierarchia("First", "Second");
  
  //file_put_contents("img.php", $class2);
  
  //$IM = new PImagesManager([$image, $image2]);
  
  //$image->generate();
  
  echo "<pre>";
  print_r($image);
  echo "</pre>";
  
?>