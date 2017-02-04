<?php
  declare(strict_types = 1);
  namespace PCM\Classes;
  
  require_once $_SERVER['DOCUMENT_ROOT']."/pcm/classes/pimage.class.php";
  
  use PCM\Classes\PImage;
  
  class PImagesManager
  {
    private $images;
    
    public function __construct(array $images)
    {
      foreach ($images as $image) {
        $this->images[$image->getName()] = $image;
      }
    }
    
    
    
    public function getImage(string $image_name)
    {
      if (array_key_exists($image_name, $this->images)) return $this->images[$image_name];
      else return false;
    }
    
    public function addImage(array $images)
    {
      foreach ($images as $image) {
        $this->images[$image->getName()] = $image;
      }
    }
    
  }
  
  
?>