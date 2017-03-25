<?php
/* Smarty version 3.1.29, created on 2017-03-25 05:49:59
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\windows\class_window.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d5dad7e07440_69198940',
  'file_dependency' => 
  array (
    'd43c2090d10d501212e1da0d4d09e70f54e99e61' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\windows\\class_window.tpl',
      1 => 1490409998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d5dad7e07440_69198940 ($_smarty_tpl) {
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="#class_hierarchia" data-toggle="tab">Иерархия</a></li>
  <li><a href="#classes" data-toggle="tab">Классы</a></li>
  <li><a href="#create_class" data-toggle="tab">Создать</a></li>
</ul>
<br>
<div class="tab-content">
  <div class="tab-pane active" id="class_hierarchia">
    <?php echo $_smarty_tpl->tpl_vars['classes_hierarchia']->value;?>

  </div>
  <div class="tab-pane" id="classes">
    <form name="work_with_classes" method="POST">
      <div class="form-group">
        <div class="content">
          <input type="submit" name="remove_class_button" class="btn btn-danger" value="Удалить">
        </div>
      </div>
      <div class="form-group">
        <table class="table table-hover">
          <tr>
            <th>Имя</th>
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
                <td><input type="checkbox" name="select_class[]" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
" class="form-control"></td>
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
    </form>
  </div>
  <div class="tab-pane" id="create_class">
    <form name="create_class" method="POST">
      <div class="form-group">
          <label>Имя:</label>
          <input name="class_name" type="text" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Суперкласс:</label>
          <select name="superclass" class="form-control">
                <option value="">nil</option>
              <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_1_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_1_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
              <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_local_item;
}
if ($__foreach_class_1_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_item;
}
?>
          </select>
      </div>
      <div class="form-group">
          <label>Тип:</label>
          <select name="class_type" class="form-control">
              <option value="1">Обычный</option>
              <option value="0">Абстрактный</option>
          </select>
      </div>
      <div class="form-group">
          <label>Константы</label>
          <table id="add_const_form">
              <tr>
                  <td><label>Имя</label></td>
                  <td><input id="const_name" type="text" class="form-control"></td>
                  <td><label>Значение</label></td>
                  <td><input id="const_value" type="text" class="form-control"></td>
                  <td><button id="add_const_to_table" type="button" class="btn btn-primary">+</button></td>
              </tr>
          </table>
          <br>
          <table id="consts_table" class="table table-hover">
              <tr>
                  <th>Имя</th>
                  <th>Значение</th>
              </tr>
          </table>
      </div>
      <div class="form-group">
          <label>Атрибуты (через , )</label>
          <div class="row">
              <div class="col-md-4">
                  <fieldset>
                      <legend id="public_var_legend">PUBLIC</legend>
                      <input name="public_vars" type="text" class="form-control">
                  </fieldset>
              </div>
              <div class="col-md-4">
                  <fieldset>
                      <legend id="private_var_legend">PRIVATE</legend>
                      <input name="private_vars" type="text" class="form-control">
                  </fieldset>
              </div>
              <div class="col-md-4">
                  <fieldset>
                      <legend id="protected_var_legend">PROTECTED</legend>
                      <input name="protected_vars" type="text" class="form-control">
                  </fieldset>
              </div>
          </div>
      </div>
      <div class="form-group">
				<input name="create_class_button" type="submit" class="btn btn-md btn-success" value="Создать класс">
      </div>
  </form>
  </div>
</div>
<?php }
}
