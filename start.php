<?php
	require_once "pcm/classes/pimage.class.php";
    require_once "engine/ctemplater.php";
	
    use PCM\Structures\PClass;
    use PCM\Structures\PVar;
    use PCM\Structures\PConst;
    use PCM\Structures\PMethod;
    use PCM\Structures\PImage;
    
	session_start();
    
    $CT = new CTemplater("templates/tpl", "templates/tpl_c", "templates/configs", "templates/cache");
?>