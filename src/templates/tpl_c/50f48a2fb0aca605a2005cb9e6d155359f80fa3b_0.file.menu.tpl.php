<?php
/* Smarty version 3.1.29, created on 2017-04-19 14:29:58
  from "C:\OpenServer\domains\PCM\src\templates\tpl\windows\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f74a365b32f0_06965313',
  'file_dependency' => 
  array (
    '50f48a2fb0aca605a2005cb9e6d155359f80fa3b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\src\\templates\\tpl\\windows\\menu.tpl',
      1 => 1492601397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f74a365b32f0_06965313 ($_smarty_tpl) {
?>
<div id="main_menu" class="ui small top menu">
	<div class="item">
		<div class="ui mini statistics">
			<div class="statistic">
				<div class="label">
					Образы
				</div>
				<div class="value">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countImages']->value)===null||$tmp==='' ? 0 : $tmp);?>

				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Классы
				</div>
				<div class="value">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countClasses']->value)===null||$tmp==='' ? 0 : $tmp);?>

				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Свойства
				</div>
				<div class="value">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countVars']->value)===null||$tmp==='' ? 0 : $tmp);?>

				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Методы
				</div>
				<div class="value">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countMethods']->value)===null||$tmp==='' ? 0 : $tmp);?>

				</div>
			</div>
			<div class="statistic">
				<div class="label">
					Словари
				</div>
				<div class="value">
					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countDictionaries']->value)===null||$tmp==='' ? 0 : $tmp);?>

				</div>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['messageStatus']->value != NULL) {?>
		<div class="item">
			<div class="ui <?php echo $_smarty_tpl->tpl_vars['messageStatus']->value;?>
 message">
				<i class="close icon"></i>
				<div class="header"><?php echo $_smarty_tpl->tpl_vars['messageHeader']->value;?>
</div>
				<p><?php echo $_smarty_tpl->tpl_vars['messageContent']->value;?>
</p>
			</div>
		</div>
	<?php }?>
	<div class="right menu">
		<a class="item">
			<i class="signal big icon" title="Метрика"></i>
		</a>
		<a class="item">
			<i class="idea big icon" title="Идеи"></i>
		</a>
		<a id="settingsLink" class="item">
			<i class="settings big icon" title="Настройки"></i>
		</a>
		<a class="item">
			<i class="help circle outline big icon" title="Справка"></i>
		</a>
	</div>
</div><?php }
}
