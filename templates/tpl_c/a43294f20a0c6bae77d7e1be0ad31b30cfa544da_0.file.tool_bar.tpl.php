<?php
/* Smarty version 3.1.29, created on 2017-11-19 16:33:09
  from "E:\OpenServer\domains\PCM\templates\tpl\blocks\tool_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a118815864552_80353268',
  'file_dependency' => 
  array (
    'a43294f20a0c6bae77d7e1be0ad31b30cfa544da' => 
    array (
      0 => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl\\blocks\\tool_bar.tpl',
      1 => 1506787460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a118815864552_80353268 ($_smarty_tpl) {
?>
<div class="ui stackable menu">
  <a class="item" id="createClass">
    <i class="plus icon"></i>
    Класс
  </a>
  <a class="item" id="createVar">
    <i class="plus icon"></i>
    Свойство
  </a>
  <a class="item" id="createMethod">
    <i class="plus icon"></i>
    Метод
  </a><!--
  <a class="item">
    <i class="plus icon"></i>
    Константа
  </a>-->
  <div class="right menu">
    <div class="item">
      <div class="ui search">
        <div class="ui input">
          <input id="search_class" class="prompt" type="text" placeholder="Поиск класса...">
        </div>
        <div class="results"></div>
      </div>
    </div>
    <a class="item" id="createImage">
      <i class="plus icon"></i>
      Образ
    </a>
    <a class="item" id="selectCurrentImage">
      Выбрать образ
    </a>
  </div>
</div>
<?php }
}
