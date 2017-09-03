<?php
/* Smarty version 3.1.29, created on 2017-09-03 18:57:58
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\modals\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ac2686b89ed6_77879996',
  'file_dependency' => 
  array (
    'f08a456c7b306648930f5499b69548203ad7f813' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\modals\\profile.tpl',
      1 => 1504454277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ac2686b89ed6_77879996 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\PCM\\work_\\engine\\smarty\\plugins\\modifier.date_format.php';
?>
<div class="ui big modal" id="profileModal">
  <div class="header">
    Профиль: <?php echo $_smarty_tpl->tpl_vars['profile']->value->login();?>

  </div>
  <div class="actions" id="profile_tool_bar">
    <div class="ui labeled button" tabindex="0">
      <div class="ui button">
        Образов
      </div>
      <a class="ui basic red left pointing label">
        1,048
      </a>
    </div>
    <div class="ui labeled button" tabindex="0">
      <div class="ui button">
        Классов
      </div>
      <a class="ui basic red left pointing label">
        1,048
      </a>
    </div>
    <div class="ui labeled button" tabindex="0">
      <div class="ui button">
        Методов
      </div>
      <a class="ui basic red left pointing label">
        1,048
      </a>
    </div>
    <div class="ui labeled button" tabindex="0">
      <div class="ui button">
        Свойств
      </div>
      <a class="ui basic red left pointing label">
        1,048
      </a>
    </div>
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="six wide column">
          <table class="ui table striped">
            <thead>
              <tr>
                <th colspan="2">Основная информация</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Тип акканута</td>
                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value->accountType();?>
</td>
              </tr>
              <tr>
                <td>Дата удаления акканута</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value->expirationDate(),'d.m.Y');?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="ten wide column">
          <div class="ui styled accordion">
            <div class="title">
              Изменить тип акканута
            </div>
            <div class="content">
              <div class="ui three column internally celled grid">
                <div class="row">
                  <div class="column">
                    Free
                  </div>
                  <div class="column">
                    Standart
                  </div>
                  <div class="column">
                    Developer 
                  </div>                
                </div>
                <div class="row">
                  <div class="column">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>
                  <div class="column">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>
                  <div class="column">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>                
                </div>
              </div>
            </div>
            <div class="title">
              Сменить логин
            </div>
            <div class="content">
              <form class="ui form">
                <div class="field">
                  <label>Новый логин</label>
                  <input type="password">
                </div>
                <div class="field">
                  <input type="submit" value="Изменить" class="ui orange button">
                </div>
              </form>
            </div>
            <div class="title">
              Сменить пароль
            </div>
            <div class="content">
              <form class="ui form">
                <div class="field">
                  <label>Старый пароль</label>
                  <input type="password">
                </div>
                <div class="field">
                  <label>Новый пароль</label>
                  <input type="password">
                </div>
                <div class="field">
                  <label>Повторите пароль</label>
                  <input type="password">
                </div>
                <div class="field">
                  <input type="submit" value="Изменить" class="ui orange button">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="actions">
    <form name="workWithProfile" method="POST">
      <input type="submit" name="removeAccountButton" value="Удалить акканут" class="ui negative button">
      <a href="php/logout.php" value="Выйти" class="ui button">Выйти</a>
    </form>
  </div>
</div><?php }
}
