<?php
/* Smarty version 3.1.29, created on 2017-08-09 21:57:05
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\settings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598b5b011f0816_42156290',
  'file_dependency' => 
  array (
    'e8764160f0e1d8625acd59f228745d5e040452cb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\settings.tpl',
      1 => 1501099374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598b5b011f0816_42156290 ($_smarty_tpl) {
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
