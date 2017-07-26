<?php
/* Smarty version 3.1.29, created on 2017-07-26 23:03:03
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\settings.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5978f57789ead0_17019636',
  'file_dependency' => 
  array (
    'a291c7c6a0f2162ca255f702ed359d2c1781fe33' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\settings.php',
      1 => 1501099374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5978f57789ead0_17019636 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Настройки</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form name="settingsForm" method="POST">
            <input type="submit" name="clearAllImagesButton" value="Удалить все образы">
            <input type="submit" name="resetCurrentImageButton" value="Сбросить выбранный образ">
          </form>
        </div>
      </div>
    </div>
  </body>
</html><?php }
}
