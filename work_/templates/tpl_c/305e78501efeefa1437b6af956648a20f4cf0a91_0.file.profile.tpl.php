<?php
/* Smarty version 3.1.29, created on 2017-08-28 13:12:05
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a3ec7589f9f3_19040648',
  'file_dependency' => 
  array (
    '305e78501efeefa1437b6af956648a20f4cf0a91' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\profile.tpl',
      1 => 1503915123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a3ec7589f9f3_19040648 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Профиль</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/vt.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-tabs tabs-left">
            <li><a href="index.php">Назад</a></li>
            <li class="active"><a href="#general" data-toggle="tab">Общее</a></li>
            <li><a href="#settings" data-toggle="tab">Настройки</a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <div class="tab-content">
            <div class="tab-pane active" id="settings">
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
                          <td>Дата истечения срока работы акканута</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->expirationDate();?>
</td>
                        </tr>
                      </tbody>
                    </table>
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="general">
              <div class="row">
              
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