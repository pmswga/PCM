<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  use PCM\Classes\PImagesManager;
  
  $update = function () {
    CTools::Redirect("settings.php");
  };
  
  if (empty($_SESSION['currentImage'])) {
    setMessage("Не выбран образ по умолчанию", "danger");
  }
  
  $CT->assign("session", $_SESSION);
  $CT->assign("settings", $_SESSION['settings']);
  $CT->assign("imagesFiles", PImagesManager::scanDir($_SESSION['settings']['General']['image_import_folder']."/*.pcm"));
  
  $CT->assign("msgs", $_SESSION['msgs']);
  $CT->Show("settings.tpl");
  
  unsetMessage();
  
  if (!empty($_POST['clearAllImagesButton'])) {
    
    if (!empty($_SESSION['images'])) {
            
      unset($_SESSION['images']);
      
      if (empty($_SESSION['images'])) {
        setMessage("Удаление образов прошло успешно", "success");
      }
      
    } else {
      setMessage("Невозможно удалить несуществующие образы", "danger");
    }
    
    $update();
  }
  
  if (!empty($_POST['resetCurrentImageButton'])) {
    
    if (!empty($_SESSION['currentImage'] && ($_SESSION['currentImage'] instanceof PImage))) {
      
      unset($_SESSION['currentImage']);
      
      if (empty($_SESSION['currentImage'])) {
        setMessage("Образ по умолчанию был сброшен", "warning");
      } else {
        setMessage("Не удалось сбросить образ по умолчанию", "danger");
      }
      
    } else {
        setMessage("Не удалось сбросить образ по умолчанию", "danger");
    }
    
    $update();
  }
  
  if (!empty($_POST['removeSelectedImagesButton'])) {
    $images = $_POST['selectImage'];
    
    if (!empty($images)) {
      
      for ($i = 0; $i < count($images); $i++) {
        unset($_SESSION['images'][$images[$i]]);
      }
      
      setMessage("Выбранные образы были удалены", "success");
    } else {
      setMessage("Вы не выбрали образ/образы", "warning");
    }
    
    $update();
  }

  if (!empty($_POST['exportSelectedImagesButton'])) {
    $images = $_POST['selectImage'];
    
    if (!empty($images)) {
      
      for ($i = 0; $i < count($images); $i++) {
        $_SESSION['images'][$images[$i]]->export($_SESSION['settings']['General']['image_export_folder']);
      }
      
      setMessage("Выбранные образы были экспортированны", "success");
    } else {
      setMessage("Вы не выбрали образ/образы", "warning");
    }
    
    $update();
  }
  
  if (!empty($_POST['exportAllImagesButton'])) {
    
    if (!empty($_SESSION['images'])) {
      foreach ($_SESSION['images'] as $image_name => $image) {
        $image->export($_SESSION['settings']['General']['image_export_folder']);
      }
      
      setMessage("Все образы были экспортированны в папку ".$export_folder, "success");
    } else {
      setMessage("Невозможно экспортировать несуществующие образы", "danger");
    }
    
    $update();
  }
  
  if (!empty($_POST['importSelectedImagesButton'])) {
    $imagesFiles = $_POST['selectImageFile'];
    
    if (!empty($imagesFiles)) {
      
      for ($i = 0; $i < count($imagesFiles); $i++) {
        $image = PImagesManager::import($imagesFiles[$i]);
        
        if ($image !== false) {
          $_SESSION['images'][$image->getImageName()] = $image;
        }
        
      }
      
      setMessage("Выбранные образы успешно импортированы", "success");
      
    } else {
      setMessage("Вы не выбрали файл/файлы", "warning");
    }
    
    $update();
  }
  
  if (!empty($_POST['importAllImagesButton'])) {
    $imagesFiles = PImagesManager::scanDir($_SESSION['settings']['General']['image_import_folder']."/*.pcm");
    
    if (!empty($imagesFiles)) {
      
      for ($i = 0; $i < count($imagesFiles); $i++) {
        $image = PImagesManager::import($imagesFiles[$i]);
        
        if ($image !== false) {
          $_SESSION['images'][$image->getImageName()] = $image;
        }
        
      }
      
      setMessage("Выбранные образы успешно импортированы", "success");
      
    } else {
      setMessage("Вы не выбрали файл/файлы", "warning");
    }
    
    $update();
  }
  
  if (!empty($_POST['changeImageExportFolderButton'])) {
    $export_folder = $_POST['imageExportFolder'];
    
    //Implement execution code ...
    
    $update();
  }
  
?>