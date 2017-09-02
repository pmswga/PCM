<?php
/* Smarty version 3.1.29, created on 2017-09-02 23:09:33
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\blocks\status_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ab0ffd8e3ed4_32369981',
  'file_dependency' => 
  array (
    '8565cab8528d1c1008bade5fa57f34daa9af5a19' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\blocks\\status_bar.tpl',
      1 => 1504382972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ab0ffd8e3ed4_32369981 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value != NULL) {?>
  <?php
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
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['msg']->value['type'];?>
 fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <p class="message bg-"><?php echo $_smarty_tpl->tpl_vars['msg']->value['msg'];?>
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
}
