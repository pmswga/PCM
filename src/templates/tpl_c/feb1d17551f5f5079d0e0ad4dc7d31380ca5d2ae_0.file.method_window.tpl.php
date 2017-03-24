<?php
/* Smarty version 3.1.29, created on 2017-03-24 20:35:18
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\windows\method_window.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d558d6f30db6_20853861',
  'file_dependency' => 
  array (
    'feb1d17551f5f5079d0e0ad4dc7d31380ca5d2ae' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\windows\\method_window.tpl',
      1 => 1490376918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d558d6f30db6_20853861 ($_smarty_tpl) {
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="#class_methods" data-toggle="tab">Методы</a></li>
  <li><a href="#create_method" data-toggle="tab">Создать</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_methods">
    class_methods
  </div>
  <div class="tab-pane" id="create_method">
    <br>
    <form name="createMethodForm">
      <div class="form-group">
        <label>Название метода</label>
        <input type="text" name="method_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Модификатор доступа</label>
        <select name="method_type" class="form-control">
          <option value="standart">Обычный</option>
          <option value="static">Статический</option>
          <option value="abstract">Абстрактный</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Класс</label>
        <select name="class" class="form-control">
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
          <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Модификатор доступа</label>
        <select name="method_access_type" class="form-control">
          <option value="public">Public</option>
          <option value="private">Private</option>
          <option value="protected">Protected</option>
        </select>
      </div>
    </form>
  </div>
</div>
<?php }
}
