<?php
	require_once "pcm/classes/image.class.php";
	
    use PCM\Structures\PClass;
    use PCM\Structures\PVar;
    use PCM\Structures\PConst;
    use PCM\Structures\PMethod;
    use PCM\Structures\PImage;
    
	session_start();
    
    $class = new PClass(_NATIVE_, "Test");
?>