<?php
/* Smarty version 3.1.29, created on 2017-04-19 14:37:07
  from "C:\OpenServer\domains\PCM\src\templates\tpl\windows\tools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f74be30ef046_28636130',
  'file_dependency' => 
  array (
    '11ad93c6266d5c8b2af6bfc33f3f051b519e7ab8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\src\\templates\\tpl\\windows\\tools.tpl',
      1 => 1492601783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f74be30ef046_28636130 ($_smarty_tpl) {
?>
<div class="ui top attached tabular menu">
	<a class="active item" data-tab="code"><i class="code icon"></i></a>
	<a class="item" data-tab="testing"><i class="terminal icon"></i></a>
	<a class="item" data-tab="generate">Генерация</a>
</div>
<div class="ui bottom attached active tab segment" data-tab="code">
	<form name="editMethodForm" class="ui form">
		<div class="field">
			<textarea rows="32" onkeydown="insertTab(this, event);"></textarea>
		</div>
		<div class="field">
			<button class="ui basic positive button" type="submit">Сохранить</button>
		</div>
	</form>
</div>
<div class="ui bottom attached tab segment" data-tab="testing">
	<form name="testCodeForm" class="ui form">
		<div class="field">
			<textarea name="test_code" rows="16" onkeydown="insertTab(this, event);"></textarea>
		</div>
		<div class="field">
			<label>Результат</label>
			<textarea id="result_of_code" rows="16" readonly></textarea>
		</div>
	</form>
</div>
<div class="ui bottom attached tab segment" data-tab="generate">
	Generate
</div><?php }
}
