<?php
    require_once "../start.php";
    
    if (!empty($_POST['image_name'])) {
        
        echo (string)$_SESSION['images'][$_POST['image_name']];
        
    }
    
?>