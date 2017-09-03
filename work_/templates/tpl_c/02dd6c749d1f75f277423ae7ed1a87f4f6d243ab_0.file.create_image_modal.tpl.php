<?php
/* Smarty version 3.1.29, created on 2017-09-03 17:26:21
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\create_image_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ac110dc7e6e2_00605541',
  'file_dependency' => 
  array (
    '02dd6c749d1f75f277423ae7ed1a87f4f6d243ab' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\create_image_modal.tpl',
      1 => 1504448781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ac110dc7e6e2_00605541 ($_smarty_tpl) {
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
                  <td><a href="#<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</a></td>
                  <!-- <td><?php echo count($_smarty_tpl->tpl_vars['image']->value->getClasses());?>
</td> -->
                  <!-- <td>~</td> -->
                  <!-- <td>~</td> -->
                </tr>
              <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
            </tbody>
          </table>
        </div>
        <div class="eight wide column">
          <form name="createImageForm" method="POST" class="ui form">          
            <div class="field">
              <label>Имя образа</label>
              <input type="text" name="imageName">
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
