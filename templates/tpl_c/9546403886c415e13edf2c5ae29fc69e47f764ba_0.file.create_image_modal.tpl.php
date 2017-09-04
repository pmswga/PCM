<?php
/* Smarty version 3.1.29, created on 2017-09-04 23:25:15
  from "C:\OpenServer\domains\PCM\templates\tpl\modals\create_image_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59adb6ab53aa76_35948307',
  'file_dependency' => 
  array (
    '9546403886c415e13edf2c5ae29fc69e47f764ba' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\modals\\create_image_modal.tpl',
      1 => 1504474100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adb6ab53aa76_35948307 ($_smarty_tpl) {
?>
<div class="ui small modal" id="createImageModal">
  <div class="header">
    Создать новый образ
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="eight wide column">
          <table class="ui celled striped table">
            <thead>
              <tr>
                <th colspan="">Существующие образы</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>                
                <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>        
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</td>
                  </tr>
                <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
              <?php } else { ?>
                <tr><td>Образов нет</td></tr>
              <?php }?>
            </tbody>
          </table>
        </div>
        <div class="eight wide column">
          <form name="createImageForm" method="POST" class="ui form">          
            <div class="field">
              <label>Название</label>
              <input type="text" name="imageName">
            </div>
            <div class="field">
              <label>Описание</label>
              <textarea name="imageDescp"></textarea>
            </div>
            <div class="field">
              <input type="submit" name="createImageButton" value="Создать" class="ui button">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
