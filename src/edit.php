<?php
	require_once "start.php";
    
    use PCM\Structures\PClass;
    use PCM\Structures\PVar;
    use PCM\Structures\PConst;
    use PCM\Structures\PMethod;
    use PCM\Structures\PImage;
    
	const THIS = "index.php";
	
    $CT->assign("classes", $_SESSION['classes']);
    
	$CT->Show("edit.tpl");
    
?>