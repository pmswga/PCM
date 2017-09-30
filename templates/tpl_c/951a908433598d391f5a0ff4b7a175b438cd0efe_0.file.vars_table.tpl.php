<?php
/* Smarty version 3.1.29, created on 2017-09-30 19:58:16
  from "C:\OpenServer\domains\PCM\templates\tpl\tables\vars_table.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59cfcd285a3d99_57574621',
  'file_dependency' => 
  array (
    '951a908433598d391f5a0ff4b7a175b438cd0efe' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\tables\\vars_table.tpl',
      1 => 1504668868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfcd285a3d99_57574621 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['vars']->value != NULL) {?>
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
$_from = $_smarty_tpl->tpl_vars['vars']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_var_0_saved_item = isset($_smarty_tpl->tpl_vars['var']) ? $_smarty_tpl->tpl_vars['var'] : false;
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['var']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
$__foreach_var_0_saved_local_item = $_smarty_tpl->tpl_vars['var'];
?>
        <tr>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 0) {?>
              <span class="public">PUBLIC</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 1) {?>
              <span class="private">PRIVATE</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 2) {?>
              <span class="protected">PROTECTED</span>
            <?php }?>
          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['var']->value->getVarName();?>
</td>
        </tr>
      <?php
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_0_saved_local_item;
}
if ($__foreach_var_0_saved_item) {
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_0_saved_item;
}
?>
    </tbody>
  </table>
<?php } else { ?>
  <h3 align='center'>Свойства не объявлены</h3>
<?php }
}
}
