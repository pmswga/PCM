<?php
/* Smarty version 3.1.29, created on 2017-08-17 00:47:42
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\blocks\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5994bd7e247132_97964022',
  'file_dependency' => 
  array (
    'ace7d7f9b9850490ce6dba804897dffebd524644' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\blocks\\menu.tpl',
      1 => 1502920061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5994bd7e247132_97964022 ($_smarty_tpl) {
?>
<br>
<div class="navbar-header menu">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <ul class="nav navbar-nav">
    <li class="dropdown">
      <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Smart PHP <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#" accesskey="c" data-toggle="modal" data-target="#createClassModal">Класс</a></li>
        <li><a href="#" accesskey="m" data-toggle="modal" data-target="#createMethodModal">Метод</a></li>
        <li><a href="#" accesskey="v" data-toggle="modal" data-target="#createVarModal">Свойство</a></li>
        <li><a href="#">Константа</a></li>
        <li class="divider"></li>
        <li><a href="#" accesskey="d">Словарь</a></li>
      </ul>
    </li>
    <li><a href="settings.php">Настройки</a></li>
    <li><a href="#docs.php">Справка</a></li>
    <!-- <?php if ($_smarty_tpl->tpl_vars['countOfClasses']->value > 0) {?>               -->
      <!-- <li class="image-statistic"><a href="#count_of_classes">Классов: <?php echo $_smarty_tpl->tpl_vars['countOfClasses']->value;?>
</a></li> -->
    <!-- <?php }?> -->
    <!-- <?php if ($_smarty_tpl->tpl_vars['countOfMethods']->value > 0) {?>               -->
      <!-- <li class="image-statistic"><a href="#count_of_methods">Методов: <?php echo $_smarty_tpl->tpl_vars['countOfMethods']->value;?>
</a></li> -->
    <!-- <?php }?> -->
    <!-- <?php if ($_smarty_tpl->tpl_vars['countOfVariables']->value > 0) {?>               -->
      <!-- <li class="image-statistic"><a href="#count_of_variables">Методов: <?php echo $_smarty_tpl->tpl_vars['countOfVariables']->value;?>
</a></li> -->
    <!-- <?php }?> -->
  </ul>
</div>
<div class="collapse navbar-collapse menu">
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Образы <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#" accesskey="i" data-toggle="modal" data-target="#createImageModal">Создать</a></li>
        <li><a href="#" data-toggle="modal" data-target="#selectCurrnetImageModal">Выбрать по умолчанию</a></li>
        <li></li>
        <li><a href="#viewImages" data-toggle="modal" data-target="#viewImagesModal">Просмотр</a></li>
      </ul>
    </li>
    <li><a href="generate.php">Генерация</a></li>
  </ul>
</div><!-- /.navbar-collapse -->
<br><?php }
}
