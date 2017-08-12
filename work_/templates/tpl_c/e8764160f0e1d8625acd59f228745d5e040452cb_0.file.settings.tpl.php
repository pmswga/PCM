<?php
/* Smarty version 3.1.29, created on 2017-08-12 23:27:05
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\settings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f64999a23c6_48242421',
  'file_dependency' => 
  array (
    'e8764160f0e1d8625acd59f228745d5e040452cb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\settings.tpl',
      1 => 1502569624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/status_bar.tpl' => 1,
  ),
),false)) {
function content_598f64999a23c6_48242421 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Настройки</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/vt.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <form name="settingsForm" method="POST">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">        
            <ul class="nav nav-tabs tabs-left">
              <li><a href="index.php">Назад</a></li>
              <li class="active"><a href="#general" data-toggle="tab">Общее</a></li>
              <li><a href="#images" data-toggle="tab">Образы</a></li>
              <li><a href="#debug" data-toggle="tab">Debug Window</a></li>
              <li><a href="#settings" data-toggle="tab">Настройки</a></li>
            </ul>
          </div>
          <div class="col-md-10">
            <div class="tab-content">
              <div class="tab-pane active" id="general">
                
              </div>
              <div class="tab-pane" id="images">
                <div class="row">
                  <div class="col-md-4">
                    <fieldset>
                      <legend>Действия</legend>
                        <input type="submit" name="exportSelectedImagesButton" value="Экспортировать выбранные образы" class="btn btn-primary btn-block">
                        <input type="submit" name="exportAllImagesButton" value="Экспортировать все образы" class="btn btn-primary btn-block">
                        <input type="submit" name="removeSelectedImagesButton" value="Удалить выбранные образы" class="btn btn-danger btn-block">
                        <input type="submit" name="clearAllImagesButton" value="Удалить все образы" class="btn btn-danger btn-block">
                        <hr>
                        <input type="submit" name="resetCurrentImageButton" value="Сбросить образ по умолчанию" class="btn btn-warning btn-block">
                    </fieldset>
                  </div>
                  <div class="col-md-8">
                    <fieldset>
                      <legend>Образ по умолчанию</legend>
                      <?php if ($_smarty_tpl->tpl_vars['session']->value['currentImage'] != NULL) {?>                      
                        <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['session']->value['currentImage']->getImageName();?>
</h3>
                      <?php } else { ?>
                        <h3 align="center">Не выбран</h3>
                      <?php }?>
                    </fieldset>
                    <table class="table table-striped">
                      <thead>
                        <h1>Образы в системе</h1>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Название</th>
                          <th>Кол-во классов</th>
                          <th>Выбрать</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['session']->value['images'];
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
                            <td><?php echo count($_smarty_tpl->tpl_vars['image']->value->getClasses());?>
</td>
                            <td><input type="checkbox" name="selectImage[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
" class="form-control"></td>
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
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="debug">
                <h1>Настройки</h1>
                <pre><?php echo print_r($_smarty_tpl->tpl_vars['session']->value['settings']);?>
</pre>
                <hr>
                <h1>Образы</h1>
                <pre><?php echo print_r($_smarty_tpl->tpl_vars['session']->value['images']);?>
</pre>
                <hr>
                <h1>Текущий образ</h1>
                <pre><?php echo print_r($_smarty_tpl->tpl_vars['session']->value['currentImage']);?>
</pre>
                <hr>
                <h1>Сообщения</h1>
                <pre><?php echo print_r($_smarty_tpl->tpl_vars['session']->value['msgs']);?>
</pre>
              </div>
              <div class="tab-pane" id="settings">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    
    <!-- Status Bar -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:blocks/status_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php echo '<script'; ?>
 type="text/javascript">
      
      $("[data-toggle='tooltip']").tooltip();
      $("[data-toggle='popover']").popover();
      
    <?php echo '</script'; ?>
>
    
  </body>
</html><?php }
}
