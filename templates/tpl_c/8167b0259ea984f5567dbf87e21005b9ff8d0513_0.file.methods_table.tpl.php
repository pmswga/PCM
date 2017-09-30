<?php
/* Smarty version 3.1.29, created on 2017-09-30 19:58:16
  from "C:\OpenServer\domains\PCM\templates\tpl\tables\methods_table.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59cfcd286a1c50_28936799',
  'file_dependency' => 
  array (
    '8167b0259ea984f5567dbf87e21005b9ff8d0513' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\tables\\methods_table.tpl',
      1 => 1504668990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfcd286a1c50_28936799 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['methods']->value != NULL) {?>
  <table class="ui table striped">
    <thead>
      <tr>
        <th>Доступ</th>     
        <!-- <th>Тип</th> -->
        <th>Имя</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['methods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_method_0_saved_item = isset($_smarty_tpl->tpl_vars['method']) ? $_smarty_tpl->tpl_vars['method'] : false;
$_smarty_tpl->tpl_vars['method'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['method']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->_loop = true;
$__foreach_method_0_saved_local_item = $_smarty_tpl->tpl_vars['method'];
?>
        <tr>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 0) {?>
              <span class="public">PUBLIC</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 1) {?>
              <span class="private">PRIVATE</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 2) {?>
              <span class="protected">PROTECTED</span>
            <?php }?>
          </td>
          <td>
            <a href="#<?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
" class="method"><?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
 (
              <?php $_smarty_tpl->tpl_vars['methods'] = new Smarty_Variable($_smarty_tpl->tpl_vars['method']->value->getArgs(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'methods', 0);?>
              <?php
$_from = $_smarty_tpl->tpl_vars['methods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_arg_1_saved_item = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['arg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value) {
$_smarty_tpl->tpl_vars['arg']->_loop = true;
$__foreach_arg_1_saved_local_item = $_smarty_tpl->tpl_vars['arg'];
?>
                <?php echo $_smarty_tpl->tpl_vars['arg']->value->getArgName();
if (next($_smarty_tpl->tpl_vars['methods']->value)) {?>,<?php }?>
              <?php
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_1_saved_local_item;
}
if ($__foreach_arg_1_saved_item) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_1_saved_item;
}
?>
            )</a>
          </td>
        </tr>
      <?php
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_0_saved_local_item;
}
if ($__foreach_method_0_saved_item) {
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_0_saved_item;
}
?>
    </tbody>
  </table>
<?php } else { ?>
  <h3 align='center'>Методы не объявлены</h3>
<?php }
}
}
