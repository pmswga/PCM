<?php
/* Smarty version 3.1.29, created on 2017-08-30 00:35:09
  from "C:\OpenServer\domains\PCM\test\genrate_code\code_templates\tpl\class.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a5de0d67a148_96131656',
  'file_dependency' => 
  array (
    '395b4c07ccd88517988c4ff75a016b0afc0545cb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\test\\genrate_code\\code_templates\\tpl\\class.tpl',
      1 => 1504042508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a5de0d67a148_96131656 ($_smarty_tpl) {
?>


<?php $_smarty_tpl->tpl_vars['class_name'] = new Smarty_Variable($_smarty_tpl->tpl_vars['class']->value->getClassName(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'class_name', 0);
$_smarty_tpl->tpl_vars['super_class'] = new Smarty_Variable($_smarty_tpl->tpl_vars['class']->value->getSuperClassName(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'super_class', 0);
$_smarty_tpl->tpl_vars['class_type'] = new Smarty_Variable($_smarty_tpl->tpl_vars['class']->value->getClassType(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'class_type', 0);?>



<?php if ($_smarty_tpl->tpl_vars['super_class']->value != '') {?>
  <?php $_smarty_tpl->tpl_vars['require_link'] = new Smarty_Variable(((("require_once ").('"')).(((string)$_smarty_tpl->tpl_vars['super_class']->value))).('.php";'), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'require_link', 0);?>
  <?php $_smarty_tpl->tpl_vars['_super_class_name'] = new Smarty_Variable("extends ".((string)$_smarty_tpl->tpl_vars['super_class']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_super_class_name', 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['class_type']->value == 0) {?>
  <?php $_smarty_tpl->tpl_vars['_class_type'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_class_type', 0);
} elseif ($_smarty_tpl->tpl_vars['class_type']->value == 1) {?>
  <?php $_smarty_tpl->tpl_vars['_class_type'] = new Smarty_Variable("abstract", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_class_type', 0);
}?>



<?php echo '<?php

  ';
echo $_smarty_tpl->tpl_vars['require_link']->value;?>

  
  <?php echo $_smarty_tpl->tpl_vars['_class_type']->value;?>
class <?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['_super_class_name']->value;?>

  {
  
  
  
  <?php
$_from = $_smarty_tpl->tpl_vars['class']->value->getConsts();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_const_0_saved_item = isset($_smarty_tpl->tpl_vars['const']) ? $_smarty_tpl->tpl_vars['const'] : false;
$_smarty_tpl->tpl_vars['const'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['const']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['const']->value) {
$_smarty_tpl->tpl_vars['const']->_loop = true;
$__foreach_const_0_saved_local_item = $_smarty_tpl->tpl_vars['const'];
?>
    const $<?php echo $_smarty_tpl->tpl_vars['const']->value->getConstName();?>
 = <?php echo $_smarty_tpl->tpl_vars['const']->value->getConstValue();?>
;
  <?php
$_smarty_tpl->tpl_vars['const'] = $__foreach_const_0_saved_local_item;
}
if ($__foreach_const_0_saved_item) {
$_smarty_tpl->tpl_vars['const'] = $__foreach_const_0_saved_item;
}
?>
  
  
  
  <?php
$_from = $_smarty_tpl->tpl_vars['class']->value->getVars();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_var_1_saved_item = isset($_smarty_tpl->tpl_vars['var']) ? $_smarty_tpl->tpl_vars['var'] : false;
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['var']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
$__foreach_var_1_saved_local_item = $_smarty_tpl->tpl_vars['var'];
?>
  
    
    
    <?php if ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 0) {?>
      <?php $_smarty_tpl->tpl_vars['access_var'] = new Smarty_Variable("public", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'access_var', 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 1) {?>
      <?php $_smarty_tpl->tpl_vars['access_var'] = new Smarty_Variable("private", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'access_var', 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 2) {?>
      <?php $_smarty_tpl->tpl_vars['access_var'] = new Smarty_Variable("protected", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'access_var', 0);?>
    <?php }?>
    
    

    <?php echo $_smarty_tpl->tpl_vars['access_var']->value;?>
 $<?php echo $_smarty_tpl->tpl_vars['var']->value->getVarName();?>
;
  <?php
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_1_saved_local_item;
}
if ($__foreach_var_1_saved_item) {
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_1_saved_item;
}
?>
  
  
  
  <?php
$_from = $_smarty_tpl->tpl_vars['class']->value->getMethods();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_method_2_saved_item = isset($_smarty_tpl->tpl_vars['method']) ? $_smarty_tpl->tpl_vars['method'] : false;
$_smarty_tpl->tpl_vars['method'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['method']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->_loop = true;
$__foreach_method_2_saved_local_item = $_smarty_tpl->tpl_vars['method'];
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
$__foreach_arg_3_saved_item = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['arg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value) {
$_smarty_tpl->tpl_vars['arg']->_loop = true;
$__foreach_arg_3_saved_local_item = $_smarty_tpl->tpl_vars['arg'];
?>
      <?php $_smarty_tpl->tpl_vars['_args'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['_args']->value).(((string)$_smarty_tpl->tpl_vars['arg']->value)), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_args', 0);?>
      <?php if (next($_smarty_tpl->tpl_vars['args']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['_args'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['_args']->value).(', '), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, '_args', 0);?>
      <?php }?>
    <?php
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_3_saved_local_item;
}
if ($__foreach_arg_3_saved_item) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_3_saved_item;
}
?>
       
    
    
    <?php echo $_smarty_tpl->tpl_vars['access_method']->value;?>
 function <?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
(<?php echo $_smarty_tpl->tpl_vars['_args']->value;?>
)
    {
      <?php echo $_smarty_tpl->tpl_vars['method']->value->getSrc();?>

    }
    
  <?php
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_2_saved_local_item;
}
if ($__foreach_method_2_saved_item) {
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_2_saved_item;
}
?>

  }
  
<?php echo '?>';?>

<?php }
}
