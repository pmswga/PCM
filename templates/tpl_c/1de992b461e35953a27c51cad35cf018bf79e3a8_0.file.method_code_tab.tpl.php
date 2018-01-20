<?php
/* Smarty version 3.1.29, created on 2017-11-19 16:33:09
  from "E:\OpenServer\domains\PCM\templates\tpl\pages\index.page\method_code_tab.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a11881588f4d0_47014871',
  'file_dependency' => 
  array (
    '1de992b461e35953a27c51cad35cf018bf79e3a8' => 
    array (
      0 => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl\\pages\\index.page\\method_code_tab.tpl',
      1 => 1505161388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a11881588f4d0_47014871 ($_smarty_tpl) {
?>
<div class="ui internally celled grid">
  <div class="row">
    <div class="ten wide column">
      <form name="editCodeMethodForm" method="POST" class="ui form">
        <div class="field">
          <h3>Редактирование метода <span id="currentEditMethod"></span></h3>
          <textarea rows="15" name="src" onkeydown="insertTab(this, event);" id="methodCode"></textarea>
        </div>
        <div class="field">
          <input type="hidden" name="editClass" value="">
          <input type="hidden" name="editMethod" value="">
          <input type="submit" name="saveCodeMethodButton" value="Сохранить" class="ui button">
        </div>
      </form>
    </div>
    <div class="six wide column">
       <div class="ui styled accordion">
        <div class="title">
          <i class="dropdown icon"></i>
          Свойства
        </div>
        <div class="content">                            
          <div class="panel-body" id="vars-table"></div>
        </div>
      </div>
      <div class="ui styled accordion">
        <div class="title">
          <i class="dropdown icon"></i>
          Методы
        </div>
        <div class="content">                            
          <div class="panel-body" id="methods-table"></div>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
