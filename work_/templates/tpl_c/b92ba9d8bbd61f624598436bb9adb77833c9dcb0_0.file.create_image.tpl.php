<?php
/* Smarty version 3.1.29, created on 2017-07-26 23:07:06
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\create_image.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5978f66a785034_53056407',
  'file_dependency' => 
  array (
    'b92ba9d8bbd61f624598436bb9adb77833c9dcb0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\create_image.tpl',
      1 => 1501099610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5978f66a785034_53056407 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Создание образа</title>
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
        <div class="col-md-3"></div>
        <div class="col-md-3">
          <br><br><br><br><br>
          <br><br><br><br><br>
          <fieldset>
            <legend>Создать образ</legend>
            <form name="createImageForm" method="POST">
              <div class="form-group">
                <input type="text" name="imageName" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="createImageButton" value="Создать образ" class="btn btn-default">
              </div>
            </form>
          </fieldset>
        </div>
        <div class="col-md-4">
          <br><br><br><br><br>
          <br><br><br><br><br>
          <fieldset>
            <legend>Выбрать существующий</legend>
            <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
              <table class="table table-hover">
                <thead>
                  <!--
                  <form method="POST">
                    <input type="submit" value="Обновить">
                  </form>
                  <br>
                  <br>
                  -->
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</td>
                      <td>
                        <form name="selectImageForm" method="POST">
                          <input type="hidden" name="imageName" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
">
                          <input type="submit" name="selectImageButton" value="Выбрать">
                        </form>
                      </td>
                    </tr>
                  <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                </tbody>
              </table>
            <?php } else { ?>
              <h3 align="center">Образов нет</h3>
            <?php }?>
          </fieldset>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </body>
</html><?php }
}
