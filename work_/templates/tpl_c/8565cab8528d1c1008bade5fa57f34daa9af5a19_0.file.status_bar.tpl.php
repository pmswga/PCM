<?php
/* Smarty version 3.1.29, created on 2017-08-12 23:42:59
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\blocks\status_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f6853795122_66401124',
  'file_dependency' => 
  array (
    '8565cab8528d1c1008bade5fa57f34daa9af5a19' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\blocks\\status_bar.tpl',
      1 => 1502570578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f6853795122_66401124 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value != NULL) {?>
  <div id="status_bar">
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
      <div class="message bg-<?php echo $_smarty_tpl->tpl_vars['msg']->value['type'];?>
"
        data-toggle="popover" 
        data-placement="top"                  
        data-html="true"
        <?php if ($_smarty_tpl->tpl_vars['msg']->value['type'] == "success") {?>
          title="Уведомление"
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "info") {?>
          title="Информация"
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "warning") {?>
          title="Предупреждение"
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "danger") {?>
          title="Ошибка"
        <?php }?>
        data-content="<?php echo $_smarty_tpl->tpl_vars['msg']->value['msg'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['msg']->value['type'] == "success") {?>
          <a href="#">S</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "info") {?>
          <a href="#">I</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "warning") {?>
          <a href="#">W</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "danger") {?>
          <a href="#">E</a>
        <?php }?>
      </div>
    <?php
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_local_item;
}
if ($__foreach_msg_0_saved_item) {
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_item;
}
?>
  </div>
<?php }
}
}
