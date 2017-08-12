<?php
/* Smarty version 3.1.29, created on 2017-08-12 21:06:30
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\create_method_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f43a642dd95_64761103',
  'file_dependency' => 
  array (
    '3ab5e06d7e23392d61c0e20576b04dc7ea763bdd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\create_method_modal.tpl',
      1 => 1502561188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f43a642dd95_64761103 ($_smarty_tpl) {
?>
<div class="modal fade" id="createMethodModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить метод</h4>
      </div>
      <div class="modal-body">
        <form name="createMethodForm" method="POST">
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
              <label>Имя метода</label>
              <input type="text" name="methodName" class="form-control">
            </div>
            <div class="form-group">
              <label>Тип метода</label>
              <select name="methodType" class="form-control">
                <option value="0" >Обычный</option>
                <option value="1" >Абстрактный</option>
              </select>
            </div>
            <div class="form-group">
              <label>Тип доступа</label>
              <select name="methodAccessType" class="form-control">
                <option value="0" style="color: #6FC17A">PUBLIC</option>
                <option value="1" style="color: #E14976">PRIVATE</option>
                <option value="2" style="color: #FBA026">PROTECTED</option>
              </select>
            </div>
            <div class="form-group">
              <label>Аргументы (через ,)</label>
              <input type="text" name="methodArgs" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" name="createMethodButton" value="Создать" class="btn btn-primary">
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
