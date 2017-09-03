<?php
/* Smarty version 3.1.29, created on 2017-09-04 00:27:45
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\create_method_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ac73d10de557_41152672',
  'file_dependency' => 
  array (
    '3ab5e06d7e23392d61c0e20576b04dc7ea763bdd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\create_method_modal.tpl',
      1 => 1504474041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ac73d10de557_41152672 ($_smarty_tpl) {
?>
<div class="ui small modal" id="createMethodModal">
  <div class="header">
    Создать новый метод
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="sixteen wide column">
          <form name="createMethodForm" method="POST" class="ui form">
            <?php if ($_smarty_tpl->tpl_vars['currentImage']->value != NULL) {?>
              <div class="field">
                <label>Класс</label>
                <select name="class" class="dropdown">
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
                <label>Имя метода</label>
                <input type="text" name="methodName">
              </div>
              <div class="field">
                <label>Тип метода</label>
                <select name="methodType">
                  <option value="0" >Обычный</option>
                  <option value="1" >Абстрактный</option>
                </select>
              </div>
              <div class="field">
                <label>Тип доступа</label>
                <select name="methodAccessType">
                  <option value="0" style="color: #6FC17A">PUBLIC</option>
                  <option value="1" style="color: #E14976">PRIVATE</option>
                  <option value="2" style="color: #FBA026">PROTECTED</option>
                </select>
              </div>
              <div class="field">
                <label>Аргументы (через ,)</label>
                <input type="text" name="methodArgs">
              </div>
              <div class="field">
                <input type="submit" name="createMethodButton" value="Создать" class="ui button">
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
