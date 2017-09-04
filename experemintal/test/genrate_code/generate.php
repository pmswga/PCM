<?php
  
  require_once "../../work_/pcm/classes/pimage.class.php";
  require_once "../../work_/pcm/classes/pimagesmanager.class.php";
  require_once "../../work_/pcm/structures/pclass.class.php";
	require_once "../../work_/engine/ctemplater.php";
	require_once "../../work_/engine/ctools.php";
  
  use PCM\Classes\PImage;
  use PCM\Classes\PImagesManager;
  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PConst;
  use PCM\Structures\PMethod;
  
  $CT = new CTemplater("code_templates/tpl", 
                       "code_templates/tpl_c", 
                       "code_templates/configs", 
                       "code_templates/cache");
  
  $image = PImagesManager::import("Tools.pcm");
  
  $class = $image->getClass("INI")['supclass'];
  
  
  $CT->assign("class", $class);
  
  $code = $CT->fetch("class.tpl");
  
  $CT->Show("class.tpl");

  file_put_contents("test_code.php", $code);
  
?>
