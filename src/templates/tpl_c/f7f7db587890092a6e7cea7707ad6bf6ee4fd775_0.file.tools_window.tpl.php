<?php
/* Smarty version 3.1.29, created on 2017-04-08 22:02:00
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\windows\tools_window.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58e933a8709a99_21739721',
  'file_dependency' => 
  array (
    'f7f7db587890092a6e7cea7707ad6bf6ee4fd775' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\windows\\tools_window.tpl',
      1 => 1491678119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e933a8709a99_21739721 ($_smarty_tpl) {
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="#class_method_code" data-toggle="tab"><img src="img/code.png" width="20" alt=""></a></li>
  <li><a href="#images" data-toggle="tab"><img src="img/image.png" width="20" alt=""></a></li>
  <li><a href="#testing" data-toggle="tab"><img src="img/testing.png" width="20" alt=""></a></li>
  <li><a href="#generate_code" data-toggle="tab">Генерация кода</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_method_code">
    <form name="editCodeForm" method="POST">
      <textarea id="codeEditor" name="code" rows="25" class="form-control" onkeydown="insertTab(this, event);"></textarea>
			<input type="hidden" name="for_class" value="">
			<input type="hidden" name="for_method" value="">
			<input type="submit" name="editCodeButton" value="Изменить" class="btn btn-primary pull-right">
		</form>
  </div>
  <div class="tab-pane" id="images">
    <div class="row">
      <div class="col-md-4">
				<br>
        <fieldset>
          <legend>Создать образ</legend>
          <form name="create_image" method="POST">
            <div class="form-group">
                <label>Название:</label>
                <input name="image_name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Выберете классы:</label>
                <table class="table table-hover">
                    <tr>
                      <th>Класс</th>
                      <th>Выбрать</th>
                    </tr>
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
                          <td><input name="add_class[]" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
" type="checkbox" class="form-control"></td>
                      </tr>
                    <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
                </table>
            </div>
            <div class="form-group">
                <input name="create_image_button" type="submit" class="btn btn-md btn-success" value="Собрать">
            </div>
          </form>
        </fieldset>
      </div>
			<div class="col-md-4">
				<br>
        <fieldset>
					<legend>Импортировать образ</legend>
					<form name="importImageForm" method="POST">
						<div class="form-group">
							<label>Найденные образы</label>
							<table class="table table-hover">
								<tr>
									<th>Образ</th>
									<th>Выбрать</th>
								</tr>
								<?php
$_from = $_smarty_tpl->tpl_vars['images_files']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_file_1_saved_item = isset($_smarty_tpl->tpl_vars['image_file']) ? $_smarty_tpl->tpl_vars['image_file'] : false;
$_smarty_tpl->tpl_vars['image_file'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image_file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image_file']->value) {
$_smarty_tpl->tpl_vars['image_file']->_loop = true;
$__foreach_image_file_1_saved_local_item = $_smarty_tpl->tpl_vars['image_file'];
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['image_file']->value;?>
</td>
										<td><input type="checkbox" name="image_file[]" value="<?php echo $_smarty_tpl->tpl_vars['image_file']->value;?>
" class="form-control"></td>
									</tr>
								<?php
$_smarty_tpl->tpl_vars['image_file'] = $__foreach_image_file_1_saved_local_item;
}
if ($__foreach_image_file_1_saved_item) {
$_smarty_tpl->tpl_vars['image_file'] = $__foreach_image_file_1_saved_item;
}
?>
							</table>
						</div>
						<div class="form-group">
							<input name="importImageButton" type="submit" class="btn btn-warning" value="Импорт">		
						</div>
					</form>
				</fieldset>
			</div>
      <div class="col-md-4">
				<br>
        <fieldset>
          <form name="work_with_images" method="POST">
						<legend>
							<div class="row">
								<div class="col-md-7">
									<p>Готовые образы</p>								
								</div>
								<div class="col-md-5">
									<input name="delete_image_button" type="submit" class="btn btn-sm btn-danger" value="-">
									<input name="export_image_button" type="submit" class="btn btn-sm btn-warning" value="Экспорт">				
								</div>
							</div>
						</legend>
            <div id="manage_images" class="form-group">
            </div>
            <div class="form-group">
            <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
							<div class="panel-group" id="final_images">
							<?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_2_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_2_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
								<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#final_images" href="#<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</a>
												<input name="select_image[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
">
											</h4>
										</div>
										<div id="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
" class="panel-collapse collapse">
												<div class="panel-body">
														<label>Классы в составе образа:</label>
														<ul>
														<?php
$_from = $_smarty_tpl->tpl_vars['image']->value->getClasses();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_3_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_3_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
																<li><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</li>
														<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_3_saved_local_item;
}
if ($__foreach_class_3_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_3_saved_item;
}
?>
														</ul>
														<hr>
														<input type="submit" class="btn btn-warning" value="Изменить">
												</div>
										</div>
								</div>
							<?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_local_item;
}
if ($__foreach_image_2_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_item;
}
?>
							</div>
            <?php } else { ?>
                <h3 align="center">Образов нет</h3>
            <?php }?>
            </div>
          </form>
        </fieldset>
      </div>
    </div>
		<div class="row">
      <div class="col-md-12">
				<br>
        <fieldset>
          <legend>Временный образ</legend>
          <form name="work_with_tmp_image" method="POST">
            <input type="submit" name="delete_tmp_image" value="Очистить образ" class="btn btn-danger">
            <br>
            <br>
            <table class="table table-hover">
              <tr>
                <th>Имя:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['tmp_image']->value->getImageName();?>
</td>
              </tr>
              <tr>
                <th>Классы:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['classes_hierarchia']->value;?>
</td>
              </tr>
              <tr>
                <th>Файлы классов:</th>
                <td>
                  <ul>
                  <?php
$_from = $_smarty_tpl->tpl_vars['tmp_image']->value->getFileNamesOfClasses();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_file_4_saved_item = isset($_smarty_tpl->tpl_vars['class_file']) ? $_smarty_tpl->tpl_vars['class_file'] : false;
$_smarty_tpl->tpl_vars['class_file'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class_file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class_file']->value) {
$_smarty_tpl->tpl_vars['class_file']->_loop = true;
$__foreach_class_file_4_saved_local_item = $_smarty_tpl->tpl_vars['class_file'];
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['class_file']->value;?>
</li>
                  <?php
$_smarty_tpl->tpl_vars['class_file'] = $__foreach_class_file_4_saved_local_item;
}
if ($__foreach_class_file_4_saved_item) {
$_smarty_tpl->tpl_vars['class_file'] = $__foreach_class_file_4_saved_item;
}
?>
                  </ul>
                </td>
              </tr>
            </table>
          </form>
        </fieldset>
      </div>
		</div>
  </div>
	<div class="tab-pane" id="testing">
		<br>
		<div class="row">
			<div class="col-md-6">
				<form name="doItForm" method="POST">
					<div class="form-group">
						<label>Код</label>
						<textarea name="test_code" rows="15" class="form-control"></textarea>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<div id="result_of_code">
				
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="generate_code">
		<br>
		<div class="row">
			<form name="generateCodeForm" method="POST">
				<div class="col-md-10">
					<select name="changeImageForGenerate" class="form-control">
						<?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_5_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_5_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</option>
						<?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_5_saved_local_item;
}
if ($__foreach_image_5_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_5_saved_item;
}
?>
					</select>
				</div>
				<div class="col-md-2">
					<input type="submit" name="generateImageButton" value="Сгенерировать" class="btn btn-success">
				</div>
			</form>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">			
				<textarea id="previewCode" name="code" rows="25" class="form-control" onkeydown="insertTab(this, event);"></textarea>
			</div>
		</div>
  </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

	$("document").ready(function(){
		
		$("[name='test_code']").change(function(){
			
			var code = $("[name='test_code']").val();
			
			$.ajax({
				url: "php/do_it.php",
				type: "POST",
				data: "code=" + code,
				success: function(replay) {
					$("#result_of_code").html("");
					$("#result_of_code").html(replay);
				}
			});
			
		});
		
		
	})

<?php echo '</script'; ?>
><?php }
}
