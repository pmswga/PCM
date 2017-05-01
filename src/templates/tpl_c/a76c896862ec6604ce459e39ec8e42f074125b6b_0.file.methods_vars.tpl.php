<?php
/* Smarty version 3.1.29, created on 2017-04-29 08:47:54
  from "C:\OpenServer\domains\PCM\src\templates\tpl\windows\methods_vars.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5904290ac3fa66_74411579',
  'file_dependency' => 
  array (
    'a76c896862ec6604ce459e39ec8e42f074125b6b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\src\\templates\\tpl\\windows\\methods_vars.tpl',
      1 => 1493444464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5904290ac3fa66_74411579 ($_smarty_tpl) {
?>
<div class="ui styled accordion">
	<div class="title">
		<i class="accordionMethods dropdown icon"></i>
		Методы
	</div>
	<div class="accordionMethods content">
		<div class="accordion">
			<div class="title">
					<i class="dropdown icon"></i>
					Просмотр
			</div>
			<div class="content">
				<form name="workWithMethodsForm" method="POST" class="ui form">
					<table class="ui compact celled definition table">
						<thead>
							<tr>
								<td colspan="4">
									<input type="submit" name="removeMethodButton" value="Удалить" class="ui basic right floated brown button">
									<button type="submit" class="ui basic right floated orange button">
										<i class="edit icon"></i>
									</button>
								</td>
							</tr>
							<tr>
								<th>Выбрать</th>
								<th>Метод</th>
								<th>Аргументы</th>
								<th>Тип</th>
							</tr>
						</thead>
						<tbody id="classMethods">
							
						</tbody>
					</table>
				</form>
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Создать метод
			</div>
			<div class="content">
				<form name="createMethodForm" method="POST" class="ui form">
					<div class="field">
						<label>Класс</label>
						<select name="class" class="dropdown">
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
								<option><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
							<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
						</select>
					</div>
					<div class="field">
						<label>Имя метода</label>
						<input type="text" name="methodName">
					</div>
					<div class="field">
						<label>Тип метода</label>
						<select name="methodType" class="dropdown">
							<option value="0" >Обычный</option>
							<option value="1" >Абстрактный</option>
						</select>
					</div>
					<div class="field">
						<label>Тип доступа</label>
						<select name="methodAccessType" class="dropdown">
							<option value="0" style="color: #6FC17A">PUBLIC</option>
							<option value="1" style="color: #E14976">PRIVATE</option>
							<option value="2" style="color: #FBA026">PROTECTED</option>
						</select>
					</div>
					<div class="field">
						<label>Аргументы (через ,)</label>
						<input type="text" name="methodArgs">
					</div>
					<div class="field">
						<input type="submit" name="createMethodButton" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="title">
		<i class="dropdown icon"></i>
		Свойства
	</div>
	<div class="content">
		<div class="accordion">
			<div class="title">
					<i class="dropdown icon"></i>
					Просмотр
			</div>
			<div class="content">
				<form name="workWithИVarsForm" method="POST" class="ui form">
					<table class="ui compact celled definition table">
						<thead>
							<tr>
								<td colspan="4">
									<input type="submit" name="removeVarButton" value="Удалить" class="ui basic right floated brown button">
									<button type="submit" class="ui basic right floated orange button">
										<i class="edit icon"></i>
									</button>
								</td>
							</tr>
							<tr>
								<th>Выбрать</th>
								<th>Имя</th>
								<th>Доступ</th>
								<th>Тип</th>
							</tr>
						</thead>
						<tbody id="classVarsConsts">
							
						</tbody>
					</table>
				</form>
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Добавить свойства
			</div>
			<div class="content">
				<form name="createVarForm" method="POST" class="ui form">
					<div class="field">
						<label>Класс</label>
						<select name="class" class="dropdown">
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
								<option><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
							<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_local_item;
}
if ($__foreach_class_1_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_item;
}
?>
						</select>
					</div>
					<div class="field">
						<label>Имя</label>
						<input type="text" name="varName">
					</div>
					<div class="field">
						<label>Доступ</label>
						<select name="varAccessType" class="dropdown">
							<option value="0">PUBLIC</option>
							<option value="1">PRIVATE</option>
							<option value="2">PROTECTED</option>
						</select>
					</div>
					<div class="field">
						<label>Тип</label>
						<select name="varType" class="dropdown">
							<option value="0">Обычное</option>
							<option value="1">Статическое</option>
						</select>
					</div>
					<div class="field">
						<input type="submit" name="createVarButton" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Добавить константу
			</div>
			<div class="content">
				<form name="createConstForm" method="POST" class="ui form">
					<div class="field">
						<label>Имя</label>
						<input type="text">
					</div>
					<div class="field">
						<label>Доступ</label>
						<select class="dropdown">
							<option>PUBLIC</option>
							<option>PRIVATE</option>
							<option>PROTECTED</option>
						</select>
					</div>
					<div class="field">
						<label>Тип</label>
						<select class="dropdown">
							<option>Обычное</option>
							<option>Статическое</option>
						</select>
					</div>
					<div class="field">
						<label>Значение</label>
						<input type="number">
					</div>
					<div class="field">
						<input type="submit" name="createConstButton" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="title">
		<i class="dropdown icon"></i>
		Образы
	</div>
	<div class="content">
		
	</div>
	<div class="title">
		<i class="dropdown icon"></i>
		XML
	</div>
	<div class="content">
		
	</div>
	<div class="title">
		<i class="dropdown icon"></i>
		Словари
	</div>
	<div class="content">
		<div class="accordion">
			<div class="title">
				<i class="dropdown icon"></i>
				Просмотр
			</div>
			<div class="content">
			
			</div>
			<div class="title">
				<i class="dropdown icon"></i>
				Создать словарь
			</div>
			<div class="content">
				<form name="createDictionary" method="POST" class="ui form">
					<div class="field">
						<label>Название</label>
						<input type="text" name="dictionaryName">
					</div>
					<div class="field">
						<label>Кол-во записей</label>
						<input type="number" name="countEntries" min="1" max="100">
					</div>
					<div class="field">
						<input type="submit" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
		</div>
	</div>
</div><?php }
}
