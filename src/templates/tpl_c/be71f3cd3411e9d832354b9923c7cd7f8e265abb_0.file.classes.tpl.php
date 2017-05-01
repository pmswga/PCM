<?php
/* Smarty version 3.1.29, created on 2017-04-29 08:47:54
  from "C:\OpenServer\domains\PCM\src\templates\tpl\windows\classes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5904290abf56d2_39704810',
  'file_dependency' => 
  array (
    'be71f3cd3411e9d832354b9923c7cd7f8e265abb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\src\\templates\\tpl\\windows\\classes.tpl',
      1 => 1493444464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5904290abf56d2_39704810 ($_smarty_tpl) {
?>
<div class="ui styled accordion">
	<div class="active title">
		<i class="dropdown icon"></i>
		Классы
	</div>
	<div class="active content">
		<div class="accordion">
			<div class="active title">
					<i class="dropdown icon"></i>
					Иерархия
			</div>
			<div class="active content">
				<?php if ($_smarty_tpl->tpl_vars['classHierarchia']->value != NULL) {?>
					<div id="hierarchia" class="ui bulleted list">
						<?php echo $_smarty_tpl->tpl_vars['classHierarchia']->value;?>

					</div>
				<?php } else { ?>
					<h2 align="center">Классы не объявлены</h2>
				<?php }?>
					<!-- <div class="item"> -->
						<!-- <div>Object</div> -->
						<!-- <div class="list"> -->
							<!-- <div class="item"> -->
								<!-- <div>GraphicsTools</div> -->
								<!-- <div class="list"> -->
									<!-- <div class="item">AcceleratorTable</div> -->
									<!-- <div class="item"> -->
										<!-- <div>Brush</div> -->
										<!-- <div class="list"> -->
											<!-- <div class="item">StockBrush</div> -->
										<!-- </div> -->
									<!-- </div> -->
									<!-- <div class="item">Font</div> -->
									<!-- <div class="item">Image</div> -->
									<!-- <div class="item">Menu</div> -->
									<!-- <div class="item">Pen</div> -->
									<!-- <div class="item">Region</div> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- <div class="item">File</div> -->
							<!-- <div class="item">Dir</div> -->
						<!-- </div> -->
					<!-- </div> -->
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Управление классами
			</div>
			<div class="content">
				<?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
					<form name="removeClassForm" method="POST" class="ui form">
						<table class="ui compact celled definition table">
							<thead>
								<tr>
									<td colspan="3">
										<input type="submit" name="removeClassButton" value="Удалить" class="ui basic right floated brown button">
										<button type="submit" class="ui basic right floated orange button">
											<i class="edit icon"></i>
										</button>
									</td>
								</tr>
								<tr>
									<th>Выбрать</th>
									<th>Класс</th>
									<th>Суперкласс</th>
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
										<td><input type="checkbox" name="selectedClass[]" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
" class="form-control"></td>
										<td><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</td>
										<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value->getSuperClassName())===null||$tmp==='' ? "nil" : $tmp);?>
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
					</form>
				<?php } else { ?>
					<h2 align="center">Классы не объявлены</h2>
				<?php }?>
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Создать класс
			</div>
			<div class="content">
				<form name="createClassForm" method="POST" class="ui form">
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
$__foreach_class_1_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_1_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
								<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_local_item;
}
if ($__foreach_class_1_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_item;
}
?>
							<?php }?>
						</select>
					</div>
					<div class="field">
						<label>Имя класса</label>
						<input type="text" name="className" placeholder="">
					</div>
					<div class="field">
						<label>Тип</label>
						<select name="typeClass" class="dropdown">
							<option value="0">Обычный</option>
							<option value="1">Абстрактный</option>
						</select>
					</div>
					<div class="field">
						<input type="submit" name="createClassButton" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
		</div>
	</div>
</div><?php }
}
