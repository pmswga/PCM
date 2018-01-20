<?php
/* Smarty version 3.1.29, created on 2017-11-19 16:33:09
  from "E:\OpenServer\domains\PCM\templates\tpl\modals\create_class_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1188158c2165_70359164',
  'file_dependency' => 
  array (
    '1cea63d413efc90240ad477c16ce6d0b131cdde7' => 
    array (
      0 => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl\\modals\\create_class_modal.tpl',
      1 => 1504474007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1188158c2165_70359164 ($_smarty_tpl) {
?>
<div class="ui small modal" id="createClassModal">
  <div class="header">
    Создать новый класс
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="sixteen wide column">
          <form class="ui form" method="POST">
            <?php if ($_smarty_tpl->tpl_vars['currentImage']->value != NULL) {?>
              <div class="field">
                <label>Суперкласс</label>
                <select name="superClassName" class="dropdown">
                  <option>nil</option>
                  <?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
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
                      <option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
                  <?php }?>
                </select>
              </div>
              <div class="field">
                <label>Имя класса</label>
                <input type="text" name="className" class="form-control" placeholder="">
              </div>
              <div class="field">
                <label>Тип</label>
                <select name="typeClass" class="form-control">
                  <option value="0">Обычный</option>
                  <option value="1">Абстрактный</option>
                </select>
              </div>
              <div class="field">         
                <input type="submit" name="createClassButton" value="Создать" class="ui button">
              </div>
            <?php } else { ?>
              <h3 align="center">Выбирете образ по умолчанию</h3>
            <?php }?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
