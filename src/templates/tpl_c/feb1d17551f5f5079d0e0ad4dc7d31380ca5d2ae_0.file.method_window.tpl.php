<?php
/* Smarty version 3.1.29, created on 2017-04-04 12:48:37
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\windows\method_window.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58e36bf5147403_67594815',
  'file_dependency' => 
  array (
    'feb1d17551f5f5079d0e0ad4dc7d31380ca5d2ae' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\windows\\method_window.tpl',
      1 => 1491299307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e36bf5147403_67594815 ($_smarty_tpl) {
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="#class_methods" data-toggle="tab">Методы</a></li>
  <li><a href="#create_method" data-toggle="tab">Создать</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_methods">
		<br>
		<div class="panel-group" id="methods">
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
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</a>
						</h4>
					</div>
					<div id="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
" class="panel-collapse collapse">
						<div class="panel-body">
							<table class="table table-bordered">
								<tr>
									<th>Метод</th>
									<th>Аргументы</th>
								</tr>
								<?php
$_from = $_smarty_tpl->tpl_vars['class']->value->getMethods();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_method_1_saved_item = isset($_smarty_tpl->tpl_vars['method']) ? $_smarty_tpl->tpl_vars['method'] : false;
$_smarty_tpl->tpl_vars['method'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['method']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->_loop = true;
$__foreach_method_1_saved_local_item = $_smarty_tpl->tpl_vars['method'];
?>
									<tr>
										<td><a href="#" onclick="editMethod('<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
', '<?php echo $_smarty_tpl->tpl_vars['method']->value->getName();?>
')"><?php echo $_smarty_tpl->tpl_vars['method']->value->getName();?>
</a></td>
										<td>
											<?php
$_from = $_smarty_tpl->tpl_vars['method']->value->getArgs();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_arg_2_saved_item = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['arg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value) {
$_smarty_tpl->tpl_vars['arg']->_loop = true;
$__foreach_arg_2_saved_local_item = $_smarty_tpl->tpl_vars['arg'];
?>
												<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
,
											<?php
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_2_saved_local_item;
}
if ($__foreach_arg_2_saved_item) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_2_saved_item;
}
?>
										</td>
									</tr>
								<?php
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_1_saved_local_item;
}
if ($__foreach_method_1_saved_item) {
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_1_saved_item;
}
?>
							</table>
						</div>
					</div>
				</div>
			<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
		</div>
  </div>
  <div class="tab-pane" id="create_method">
    <br>
    <form name="createMethodForm" method="POST">
      <div class="form-group">
        <label>Название метода</label>
        <input type="text" name="method_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Тип метода</label>
        <select name="method_type" class="form-control">
          <option value="0">Обычный</option>
          <option value="1">Статический</option>
          <option value="2">Абстрактный</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Класс</label>
        <select name="method_class" class="form-control">
          <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
          <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_3_saved_local_item;
}
if ($__foreach_class_3_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_3_saved_item;
}
?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Модификатор доступа</label>
        <select name="method_access_type" class="form-control">
          <option value="0">Public</option>
          <option value="1">Private</option>
          <option value="2">Protected</option>
        </select>
      </div>
			<div class="form-group">
				<label>Аргументы (через , )</label>
				<input type="text" name="method_args" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="createMethodButton" value="Создать" class="btn btn-primary">
			</div>
    </form>
  </div>
</div>
<?php }
}
