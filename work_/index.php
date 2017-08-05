<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  
  $update = function () {
    CTools::Redirect("index.php");
  };
  
  if (empty($_SESSION['currentImage'])) {
    setMessage("Не выбран образ по умолчанию", "danger");
  } else {
    $CT->assign("currentImage", $_SESSION['currentImage']->getImageName());
  }
  
  $CT->assign("images", $_SESSION['images']);
  
  $CT->Show("index.tpl");

  unsetMessage();
  
  if (!empty($_POST['createClassButton'])) {
    
    $superClassName = $_POST['superClassName'];
    $className = $_POST['className'];
    $typeClass = $_POST['typeClass'];
    
  }
  
  if (!empty($_POST['createImageButton'])) {
    
    $imageName = $_POST['imageName'];
    
    if (!empty($imageName)) {
      $_SESSION['images'][$imageName] = new PImage($imageName);
      setMessage("Образ ".$imageName." был успешно создан", "success");
    } else {
      setMessage("Невозможно создать безымянный образ", "danger");
    }
    
    $update();
  }
  
  if (!empty($_POST['selectCurrnetImageButton'])) {
    $currentImage = $_POST['currentImage'];
    
    if (!empty($currentImage)) {
      
      if (array_key_exists($currentImage, $_SESSION['images'])) {
        $_SESSION['currentImage'] = $_SESSION['images'][$currentImage];
        setMessage("Образ ".$currentImage." был выбран в качестве по умолчанию", "info");
      } else {
        setMessage("Невозможно выбрать несуществующий образ", "danger");
      }
      
    } else {
      setMessage("Невозможно выбрать безымянный образ", "danger");
    }
    
    $update();
  }
  
?>