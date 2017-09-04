<?php
/* Smarty version 3.1.29, created on 2017-09-04 23:25:15
  from "C:\OpenServer\domains\PCM\templates\tpl\modals\create_var_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59adb6ab5a8094_86611922',
  'file_dependency' => 
  array (
    '13c001bfbdc6f58a5bfd84bac64f8b7c3d4b35b4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\modals\\create_var_modal.tpl',
      1 => 1504474082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adb6ab5a8094_86611922 ($_smarty_tpl) {
?>
<div class="ui small modal" id="createVarModal">
  <div class="header">
    Создание нового метода
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="sixteen wide column">
          <form name="createVarForm" method="POST" class="ui form">
            <?php if ($_smarty_tpl->tpl_vars['currentImage']->value != NULL) {?>
              <div class="field">
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
              <div class="field">
                <label>Имя</label>
                <input type="text" name="varName" class="form-control">
              </div>
              <div class="field">
                <label>Доступ</label>
                <select name="varAccessType" class="form-control">
                  <option value="1">PRIVATE</option>
                  <option value="0">PUBLIC</option>
                  <option value="2">PROTECTED</option>
                </select>
              </div>
              <div class="field">
                <label>Тип</label>
                <select name="varType" class="form-control">
                  <option value="0">Обычное</option>
                  <option value="1">Статическое</option>
                </select>
              </div>
              <div class="field">
                <input type="submit" name="createVarButton" value="Создать" class="ui button">
              </div>
            <?php } else { ?>
              <h3 align="center">Выберете образ по умолчанию</h3>
            <?php }?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
