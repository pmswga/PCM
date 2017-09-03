<?php
/* Smarty version 3.1.29, created on 2017-09-03 14:40:18
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\select_current_image_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59abea221e0ff4_79742246',
  'file_dependency' => 
  array (
    'fe8f9c5da1f5881b45ce02f794bf7f1624748e84' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\select_current_image_modal.tpl',
      1 => 1502561100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59abea221e0ff4_79742246 ($_smarty_tpl) {
?>
<div class="modal fade" id="selectCurrnetImageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Все образы</h4>
      </div>
      <div class="modal-body">
        <form name="selectCurrnetImageForm" method="POST">
          <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
            <div class="form-group">
              <label>Образ</label>
              <select name="currentImage" class="form-control">
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
                  <option value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</option>
                <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>                
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="selectCurrnetImageButton" value="Выбрать" class="btn btn-primary">
            </div>
          <?php } else { ?>
            <h3 align="center">Создайте образ</h3>
          <?php }?>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }
}
