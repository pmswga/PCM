<?php
/* Smarty version 3.1.29, created on 2017-09-03 14:40:18
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\create_var_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59abea22208109_01882091',
  'file_dependency' => 
  array (
    '6c7f1a99d3aea43f0d2d6eef3c13384500219f28' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\create_var_modal.tpl',
      1 => 1502561151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59abea22208109_01882091 ($_smarty_tpl) {
?>
<div class="modal fade" id="createVarModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить свойство</h4>
      </div>
      <div class="modal-body">
        <form name="createVarForm" method="POST">
          <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
            <div class="form-group">
              <label>Класс</label>
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
                  <option><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
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
              <label>Имя</label>
              <input type="text" name="varName" class="form-control">
            </div>
            <div class="form-group">
              <label>Доступ</label>
              <select name="varAccessType" class="form-control">
                <option value="0">PUBLIC</option>
                <option value="1">PRIVATE</option>
                <option value="2">PROTECTED</option>
              </select>
            </div>
            <div class="form-group">
              <label>Тип</label>
              <select name="varType" class="form-control">
                <option value="0">Обычное</option>
                <option value="1">Статическое</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="createVarButton" value="Создать" class="btn btn-primary">
            </div>
          <?php } else { ?>
            <h3 align="center">Создайте образ</h3>
          <?php }?>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }
}
