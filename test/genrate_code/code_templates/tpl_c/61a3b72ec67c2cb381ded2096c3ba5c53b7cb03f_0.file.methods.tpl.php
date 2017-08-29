<?php
/* Smarty version 3.1.29, created on 2017-08-30 00:33:14
  from "C:\OpenServer\domains\PCM\test\genrate_code\code_templates\tpl\methods.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a5dd9a1dff98_25833994',
  'file_dependency' => 
  array (
    '61a3b72ec67c2cb381ded2096c3ba5c53b7cb03f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\test\\genrate_code\\code_templates\\tpl\\methods.tpl',
      1 => 1504042383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a5dd9a1dff98_25833994 ($_smarty_tpl) {
?>

    
    
    <?php if ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 0) {?>
      <?php $_smarty_tpl->tpl_vars['access_method'] = new Smarty_Variable("public", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'access_method', 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 1) {?>
      <?php $_smarty_tpl->tpl_vars['access_method'] = new Smarty_Variable("private", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'access_method', 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 2) {?>
      <?php $_smarty_tpl->tpl_vars['access_method'] = new Smarty_Variable("protected", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'access_method', 0);?>
    <?php }?>
    
    
    <?php $_smarty_tpl->tpl_vars['args'] = new Smarty_Variable($_smarty_tpl->tpl_vars['method']->value->getArgs(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'args', 0);?>
    <?php
$_from = $_smarty_tpl->tpl_vars['args']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_arg_0_saved_item = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['arg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value) {
$_smarty_tpl->tpl_vars['arg']->_loop = true;
$__foreach_arg_0_saved_local_item = $_smarty_tpl->tpl_vars['arg'];
?>
      <?php $_smarty_tpl->tpl_vars['_args'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['_args']->value).(((string)$_smarty_tpl->tpl_vars['arg']->value)), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_args', 0);?>
      <?php if (next($_smarty_tpl->tpl_vars['args']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['_args'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['_args']->value).(', '), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_args', 0);?>
      <?php }?>
    <?php
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_0_saved_local_item;
}
if ($__foreach_arg_0_saved_item) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_0_saved_item;
}
}
}
