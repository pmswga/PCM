<?php
/* Smarty version 3.1.29, created on 2017-08-12 21:07:06
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\create_class_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f43caa3cf35_65239544',
  'file_dependency' => 
  array (
    '07ca98d0f0b2b3a121d7a4ac97c6f9af2159d599' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\create_class_modal.tpl',
      1 => 1502561225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f43caa3cf35_65239544 ($_smarty_tpl) {
?>
<div class="modal fade" id="createClassModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить класс</h4>
      </div>
      <div class="modal-body">
        <form name="createClassForm" method="POST">
          <div class="form-group">
            <label>Суперкласс</label>
            <select name="superClassName" class="form-control">
              <option>nil</option>
              <?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
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
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Имя класса</label>
            <input type="text" name="className" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label>Тип</label>
            <select name="typeClass" class="form-control">
              <option value="0">Обычный</option>
              <option value="1">Абстрактный</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="createClassButton" value="Создать" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }
}
