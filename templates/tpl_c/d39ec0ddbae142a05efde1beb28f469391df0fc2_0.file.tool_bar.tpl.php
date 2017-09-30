<?php
/* Smarty version 3.1.29, created on 2017-09-30 19:58:15
  from "C:\OpenServer\domains\PCM\templates\tpl\blocks\tool_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59cfcd27e65f13_41825360',
  'file_dependency' => 
  array (
    'd39ec0ddbae142a05efde1beb28f469391df0fc2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\blocks\\tool_bar.tpl',
      1 => 1506787460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfcd27e65f13_41825360 ($_smarty_tpl) {
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
