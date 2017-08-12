<?php
/* Smarty version 3.1.29, created on 2017-08-13 01:11:07
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\generate.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f7cfb62b128_20073869',
  'file_dependency' => 
  array (
    'ba07b0cea9cab6971bfb529994eebb9631945d3b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\generate.tpl',
      1 => 1502575823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f7cfb62b128_20073869 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
 | Генерация кода</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <form name="generateForm" method="POST">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Smart PHP</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Назад</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <fieldset>
              <legend>Классы</legend>
              <table class="table table-hover">
                <tr>
                  <th>Название класса</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['image']->value->getClasses();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_0_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_0_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</td>
                  </tr>
                <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
              </table>
            </fieldset>
          </div>
          <div class="col-md-6">
            <input type="submit" name="generateImageButton" value="Сгенерировать образ" class="btn btn-primary">
            <fieldset>
              <legend>Предосмотр кода</legend>
              <textarea rows="50" class="form-control" onkeydown="insertTab(this, event);"><?php echo $_smarty_tpl->tpl_vars['image']->value;?>
</textarea>
            </fieldset>
          </div>
        </div>
      </div>
    </form>
  </body>
</html><?php }
}
