<?php
/* Smarty version 3.1.29, created on 2017-08-12 21:04:24
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\view_images_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f4328375702_16901611',
  'file_dependency' => 
  array (
    '1c9f432e7549afa23bc2855d6bf8ddcd185e2a8d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\view_images_modal.tpl',
      1 => 1502561061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f4328375702_16901611 ($_smarty_tpl) {
?>
<div class="modal fade" id="viewImagesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Все образы</h4>
      </div>
      <div class="modal-body">
        <form name="workWithImageForm" method="POST">
          <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
            <table class="table table-bordered">
              <tr>
                <th>Имя</th>
                <th>Классов</th>
                <th>Методов</th>
                <th>Свойств</th>
              </tr>
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
                  <td><?php echo count($_smarty_tpl->tpl_vars['image']->value->getClasses());?>
</td>
                  <td>~</td>
                  <td>~</td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
            </table>
          <?php } else { ?>
            <h3 align="center">Образов нет</h3>
          <?php }?>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }
}
