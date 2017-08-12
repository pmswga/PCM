<?php
/* Smarty version 3.1.29, created on 2017-08-12 21:35:18
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\tables\methods_table.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f4a661eb0d6_65912399',
  'file_dependency' => 
  array (
    'ae331c4b2eb7b4d9a515c0c469111fd23868507f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\tables\\methods_table.tpl',
      1 => 1502562916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f4a661eb0d6_65912399 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['methods']->value != NULL) {?>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Доступ</th>     
        <th>Тип</th>
        <th>Имя</th>
        <th>Аргументы</th>
      </tr>
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
              PUBLIC
            <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 1) {?>
              PRIVATE
            <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 2) {?>
              PROTECTED
            <?php }?>
          </td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['method']->value->getMethodType() == 0) {?>          
              NATIVE
            <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getMethodType() == 1) {?>
              STATIC
            <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getMethodType() == 2) {?>
              ABSTRACT
            <?php }?>
          </td>
          <td>
            <a href="#<?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
" class="method"><?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
</a>
          </td>
          <td>
            <?php
$_from = $_smarty_tpl->tpl_vars['method']->value->getArgs();
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
              <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['arg']->value->getArgName();?>
</li>
              </ul>
            <?php
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_1_saved_local_item;
}
if ($__foreach_arg_1_saved_item) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_1_saved_item;
}
?>
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
