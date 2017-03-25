<?php
/* Smarty version 3.1.29, created on 2017-03-25 06:03:35
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\windows\tools_window.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d5de07668a88_61807596',
  'file_dependency' => 
  array (
    'f7f7db587890092a6e7cea7707ad6bf6ee4fd775' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\windows\\tools_window.tpl',
      1 => 1490411014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d5de07668a88_61807596 ($_smarty_tpl) {
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="#class_method_code" data-toggle="tab">Код</a></li>
  <li><a href="#images" data-toggle="tab">Образы</a></li>
  <li><a href="#generate_code" data-toggle="tab">Генерация кода</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_method_code">
    <form name="" method="POST">
      <textarea name="code" rows="25" class="form-control" onkeydown="insertTab(this, event);"></textarea>
    </form>
  </div>
  <div class="tab-pane" id="images">
    <div class="row">
      <div class="col-md-4">
        <fieldset>
          <legend>Создать образ</legend>
          <form name="create_image" method="POST">
            <div class="form-group">
                <label>Название:</label>
                <input name="image_name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Выберете классы:</label>
                <table class="table table-hover">
                    <tr>
                      <th>Класс</th>
                      <th>Выбрать</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
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
                          <td><input name="add_class[]" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
" type="checkbox" class="form-control"></td>
                      </tr>
                    <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
                </table>
            </div>
            <div class="form-group">
                <input name="create_image_button" type="submit" class="btn btn-md btn-success" value="Собрать">
            </div>
          </form>
        </fieldset>
      </div>
      <div class="col-md-4">
        <fieldset>
          <legend>Временный образ</legend>
          <form name="work_with_tmp_image" method="POST">
            <input type="submit" name="delete_tmp_image" value="Очистить образ" class="btn btn-danger">
            <br>
            <br>
            <table class="table table-hover">
              <tr>
                <th>Имя:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['tmp_image']->value->getName();?>
</td>
              </tr>
              <tr>
                <th>Классы:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['classes_hierarchia']->value;?>
</td>
              </tr>
              <tr>
                <th>Файлы классов:</th>
                <td>
                  <ul>
                  <?php
$_from = $_smarty_tpl->tpl_vars['tmp_image']->value->getFileNamesOfClasses();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_file_1_saved_item = isset($_smarty_tpl->tpl_vars['class_file']) ? $_smarty_tpl->tpl_vars['class_file'] : false;
$_smarty_tpl->tpl_vars['class_file'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class_file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class_file']->value) {
$_smarty_tpl->tpl_vars['class_file']->_loop = true;
$__foreach_class_file_1_saved_local_item = $_smarty_tpl->tpl_vars['class_file'];
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['class_file']->value;?>
</li>
                  <?php
$_smarty_tpl->tpl_vars['class_file'] = $__foreach_class_file_1_saved_local_item;
}
if ($__foreach_class_file_1_saved_item) {
$_smarty_tpl->tpl_vars['class_file'] = $__foreach_class_file_1_saved_item;
}
?>
                  </ul>
                </td>
              </tr>
            </table>
          </form>
        </fieldset>
      </div>
      <div class="col-md-4">
        <fieldset>
          <legend>Готовые образы</legend>
          <form name="work_with_images" method="POST">
            <div id="manage_images" class="form-group">
                <input name="delete_image_button" type="submit" class="btn btn-danger" value="Удалить">
                <input name="export_image_button" type="submit" class="btn btn-warning" value="Экспортировать">
            </div>
            <div class="form-group">
            <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
                <div class="panel-group" id="final_images">
                <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_2_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_2_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#final_images" href="#<?php echo $_smarty_tpl->tpl_vars['image']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getName();?>
</a>
                              <input name="select_image[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getName();?>
">
                            </h4>
                        </div>
                        <div id="<?php echo $_smarty_tpl->tpl_vars['image']->value->getName();?>
" class="panel-collapse collapse">
                            <div class="panel-body">
                                <label>Классы в составе образа:</label>
                                <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['image']->value->getClasses();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_3_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_3_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</li>
                                <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_3_saved_local_item;
}
if ($__foreach_class_3_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_3_saved_item;
}
?>
                                </ul>
                                <hr>
                                <input type="submit" class="btn btn-warning" value="Изменить">
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_local_item;
}
if ($__foreach_image_2_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_item;
}
?>
                </div>
            <?php } else { ?>
                <h3 align="center">Образов нет</h3>
            <?php }?>
            </div>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="generate_code">
    generate_code
  </div>
</div><?php }
}
