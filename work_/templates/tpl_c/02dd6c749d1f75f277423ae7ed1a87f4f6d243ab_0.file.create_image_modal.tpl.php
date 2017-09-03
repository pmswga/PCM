<?php
/* Smarty version 3.1.29, created on 2017-09-03 14:40:18
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\create_image_modal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59abea22196c69_78615697',
  'file_dependency' => 
  array (
    '02dd6c749d1f75f277423ae7ed1a87f4f6d243ab' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\create_image_modal.tpl',
      1 => 1502560961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59abea22196c69_78615697 ($_smarty_tpl) {
?>
<div class="modal fade" id="createImageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить образ</h4>
      </div>
      <div class="modal-body">
        <form name="createImageForm" method="POST">
          <div class="form-group">
            <label>Имя образа</label>
            <input type="text" name="imageName" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" name="createImageButton" value="Создать" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }
}
