<?php
/* Smarty version 3.1.29, created on 2017-11-19 16:33:09
  from "E:\OpenServer\domains\PCM\templates\tpl\pages\index.page\generate_code_tab.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a11881589b051_28574727',
  'file_dependency' => 
  array (
    '28cc375b772c820d9b1f538a0541b584949c7ea0' => 
    array (
      0 => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl\\pages\\index.page\\generate_code_tab.tpl',
      1 => 1505161442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a11881589b051_28574727 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['image']->value != NULL) {?>
  <div class="ui grid">
    <div class="row">
      <div class="six wide column">
        <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_Variable($_smarty_tpl->tpl_vars['image']->value->getClasses(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'classes', 0);?>
        <?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
          <table class="ui table striped">
            <thead>                          
              <tr>
                <th>Название класса</th>
              </tr>
            </thead>
            <tbody>
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
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</td>
                  </tr>
                <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
            </tbody>
          </table>
        <?php } else { ?>
          <h3 align="center">В образе нет классов</h3>
        <?php }?>
      </div>
      <div class="ten wide column">
        <div class="ui internally grid">
          <div class="row">
            <div class="sixteen wide column">
              <form name="generateForm" method="POST" class="ui form">
                <div class="field">
                  <input type="submit" name="generateImageButton" value="Сгенерировать" class="ui button">
                </div>
                <div class="field">
                  <textarea rows="50" id="generatedCode" width="100%"><?php echo $_smarty_tpl->tpl_vars['image']->value;?>
</textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } else { ?>
  <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['image_no_set']->value;?>
</h3>
<?php }
}
}
