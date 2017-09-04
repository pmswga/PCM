<?php
/* Smarty version 3.1.29, created on 2017-09-03 19:52:23
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\blocks\tool_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ac3347ec1359_03836514',
  'file_dependency' => 
  array (
    'c1cf94016d1191e76d97cf94b0373b29c5e31e64' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\blocks\\tool_bar.tpl',
      1 => 1504457543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ac3347ec1359_03836514 ($_smarty_tpl) {
?>
<div class="ui menu">
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
