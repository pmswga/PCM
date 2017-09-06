<?php
/* Smarty version 3.1.29, created on 2017-09-06 02:37:03
  from "C:\OpenServer\domains\PCM\templates\tpl\blocks\status_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59af351f770ad4_50580836',
  'file_dependency' => 
  array (
    '0b1111d085d6d42ea0b8eced27e47f042e5fabcb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\blocks\\status_bar.tpl',
      1 => 1504448124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59af351f770ad4_50580836 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_msg_0_saved_item = isset($_smarty_tpl->tpl_vars['msg']) ? $_smarty_tpl->tpl_vars['msg'] : false;
$_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['msg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
$__foreach_msg_0_saved_local_item = $_smarty_tpl->tpl_vars['msg'];
?>
  <div class="ui <?php echo $_smarty_tpl->tpl_vars['msg']->value['type'];?>
 message">
    <i class="close icon"></i>
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['msg']->value['type'] == "negative") {?>
        Ошибка
      <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "warning") {?>
        Предупреждение
      <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "info") {?>
        Уведомление
      <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "success") {?>
        Успешно
      <?php }?>
    </div>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value['msg'];?>
</p>
  </div>
<?php
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_local_item;
}
if ($__foreach_msg_0_saved_item) {
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_item;
}
}
}
