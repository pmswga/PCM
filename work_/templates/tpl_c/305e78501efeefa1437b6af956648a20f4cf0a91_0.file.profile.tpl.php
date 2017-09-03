<?php
/* Smarty version 3.1.29, created on 2017-09-03 18:34:42
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ac21128dee53_78322555',
  'file_dependency' => 
  array (
    '305e78501efeefa1437b6af956648a20f4cf0a91' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\profile.tpl',
      1 => 1504436021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ac21128dee53_78322555 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\OpenServer\\domains\\PCM\\work_\\engine\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Профиль</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/vt.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="css/semantic/semantic.js"><?php echo '</script'; ?>
>
    <style type="text/css">
      
      #images {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
      }
      
      .image {
        text-align: center;
      }
      
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-tabs tabs-left">
            <li><a href="index.php">Назад</a></li>
            <li class="active"><a href="#general" data-toggle="tab">Общее</a></li>
            <li><a href="#settings" data-toggle="tab">Настройки</a></li>
            <li><a href="php/logout.php">Выйти</a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <div class="tab-content">
            <div class="tab-pane active" id="general">
              <div class="row">
                <div class="col-md-4">                  
                  <fieldset>
                    <legend>Информация о профиле</legend>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>Логин</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->login();?>
</td>
                        </tr>
                        <tr>
                          <td>Тип акканута</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->accountType();?>
</td>
                        </tr>
                        <tr>
                          <td>Дата удаления акканута</td>
                          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->expirationDate(),'d.m.Y');?>
</td>
                        </tr>
                      </tbody>
                    </table>
                  </fieldset>
                  <fieldset>
                    <legend>Статистика</legend>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>Образов</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>Классов</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>Методов</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>Свойств</td>
                          <td>5</td>
                        </tr>
                      </tbody>
                    </table>
                  </fieldset>
                </div>
                <div class="col-md-8">
                  <fieldset>
                    <legend>Мои образы</legend>
                    <?php if ($_smarty_tpl->tpl_vars['imagesFiles']->value != NULL) {?>
                      <div id="images">
                        <?php
$_from = $_smarty_tpl->tpl_vars['imagesFiles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_imageFile_0_saved_item = isset($_smarty_tpl->tpl_vars['imageFile']) ? $_smarty_tpl->tpl_vars['imageFile'] : false;
$_smarty_tpl->tpl_vars['imageFile'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['imageFile']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imageFile']->value) {
$_smarty_tpl->tpl_vars['imageFile']->_loop = true;
$__foreach_imageFile_0_saved_local_item = $_smarty_tpl->tpl_vars['imageFile'];
?>
                          <figure class="image">
                            <img src="img/image.png" alt="image">
                            <figcaption><a href="#<?php echo $_smarty_tpl->tpl_vars['imageFile']->value;?>
" class="image"><?php echo basename($_smarty_tpl->tpl_vars['imageFile']->value);?>
</a></figcaption>
                            <input type="checkbox" name="selectImageFile[]" value="<?php echo $_smarty_tpl->tpl_vars['imageFile']->value;?>
">
                          </figure>
                        <?php
$_smarty_tpl->tpl_vars['imageFile'] = $__foreach_imageFile_0_saved_local_item;
}
if ($__foreach_imageFile_0_saved_item) {
$_smarty_tpl->tpl_vars['imageFile'] = $__foreach_imageFile_0_saved_item;
}
?>
                      </div>
                    <?php } else { ?>
                      <h3 align="center">Не найдено</h3>
                    <?php }?>
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="settings">
              <div class="row">
                <div class="col-md-2">
                  <fieldset>
                    <legend>Аккаунт</legend>
                    <form name="workWithAccountForm" method="POST" class="ui vertical buttons">
                      <input type="submit" value="Сменить тариф" class="ui basic orange button">
                      <br>
                      <input type="submit" value="Удалить акканут" name="removeAccountButton" class="ui basic negative button">
                    </form>
                  </fieldset>
                </div>
                <div class="col-md-4">
                  <fieldset>
                    <legend>Сменить пароль</legend>
                    <form name="changePassword" method="POST" class="ui form">
                      <div class="field">
                        <label>Текущий</label>
                        <input type="password">
                      </div>
                      <div class="field">
                        <label>Новый</label>
                        <input type="password">
                      </div>
                      <div class="field">
                        <label>Повторите ещё раз</label>
                        <input type="password">
                      </div>
                      <div class="field">
                        <input type="submit" class="ui primary button" value="Изменить">
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php echo '<script'; ?>
 type="text/javascript">
    
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
