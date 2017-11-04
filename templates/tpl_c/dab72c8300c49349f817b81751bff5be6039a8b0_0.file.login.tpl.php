<?php
/* Smarty version 3.1.29, created on 2017-10-23 22:32:00
  from "E:\OpenServer\domains\PCM\templates\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ee43b05d3096_76817710',
  'file_dependency' => 
  array (
    'dab72c8300c49349f817b81751bff5be6039a8b0' => 
    array (
      0 => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl\\login.tpl',
      1 => 1506801012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee43b05d3096_76817710 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>IDE Smart PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
        <figure>
          <img src="img/logo.png" width="100%" height="" alt="">
        </figure>
      </div>
      <div class="row">
        <div class="col-md-12" id="body">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" id="center">
              <form name="loginUserForm" method="POST">
                <div class="form-group">
                  <label>Логин</label>
                  <input type="email" name="login" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Пароль</label>
                  <input type="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                  <input type="submit" name="loginUserButton" value="Войти" class="btn btn-default">
                  <a href="#" data-toggle="modal" data-target="#registrationUser" class="btn btn-default">Регистрация</a>
                </div>
              </form>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modals -->
    
    <div class="modal fade" id="registrationUser">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Регистрация</h4>
          </div>
          <div class="modal-body">
            <?php if ($_smarty_tpl->tpl_vars['account_types']->value != NULL) {?>
              <form name="registrationUserForm" method="POST">
                <div class="form-group" id="message"></div>
                <div class="form-group">
                  <label>Фамилия</label>
                  <input type="text" name="sn" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Имя</label>
                  <input type="text" name="fn" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Почта</label>
                  <input type="email" name="login" class="form-control" required>
                </div>
                <div class="form-group" id="passwordDiv">
                  <label>Пароль</label>
                  <input type="password" name="passwd" class="form-control" required>
                </div>
                <div class="form-group" id="retryPasswordDiv">
                  <label>Повторите пароль</label>
                  <input type="password" name="retry_password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Тип аккаунта</label>
                  <select name="account_type" class="form-control">
                    <?php
$_from = $_smarty_tpl->tpl_vars['account_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_account_type_0_saved_item = isset($_smarty_tpl->tpl_vars['account_type']) ? $_smarty_tpl->tpl_vars['account_type'] : false;
$_smarty_tpl->tpl_vars['account_type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['account_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['account_type']->value) {
$_smarty_tpl->tpl_vars['account_type']->_loop = true;
$__foreach_account_type_0_saved_local_item = $_smarty_tpl->tpl_vars['account_type'];
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['account_type']->value['id_account_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['account_type']->value['description'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['account_type'] = $__foreach_account_type_0_saved_local_item;
}
if ($__foreach_account_type_0_saved_item) {
$_smarty_tpl->tpl_vars['account_type'] = $__foreach_account_type_0_saved_item;
}
?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="registrationUserButton" value="Зарегистрировать" class="btn btn-primary">
                </div>
              </form>
            <?php } else { ?>
              <h3 align="center">Регистрация временно закрыта</h3>
            <?php }?>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <?php echo '<script'; ?>
 type="text/javascript">

      $(document).ready(function(){

        $("#message").hide();
        
        function setFieldState(field, status = "")
        {
          if (status == "") {
            $("#" + field).attr("class", "form-group");
          } else {        
            $("#" + field).attr("class", "form-group bg-" + status);
          }
        }
        
        $("[name='passwd']").on("change", function(){
          var password = $(this).val();
          if (password.length < 6) {
            setFieldState("message", "warning");
            $("#message").text("Пароль должен состоять не менее из 6 символов");
            $("#message").show();
          } else {
            $("#message").hide();
          }
        });

        $("[name='registrationUserForm']").on("submit", function(){

          var sn = $("[name='sn']");
          var fn = $("[name='fn']");
          var login = $("[name='login']");
          var password = $("[name='passwd']").val();
          var retry_password = $("[name='retry_password']").val();

          if ((sn != "") && (fn != "") && (login != "") &&
              (password != "") && (retry_password != "")) {
            if (password === retry_password) {
              return true;
            } else {
              setFieldState("message", "danger");
              $("#message").text("Пароли не совпадают");
            }
          } else {
            setFieldState("message", "danger");
            $("#message").text("Заполните необходимые поля");
          }

          $("#message").show();

          return false;
        });

      });
      
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
