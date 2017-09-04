<!DOCTYPE html>
<html>
  <head>
    <title>IDE Smart PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style type="text/css">
      /*
      body {
        background-image: url("img/back.png");
        background-size: cover;
        font-family: 'Open Sans', sans-serif;
      }
      */
      .form-group:last-child {
        display: flex;
        justify-content: center;
      }
      
      .btn, .btn-default {
        width: 150px;
      }
      
      [name="loginUserButton"] {
        margin-left: 10px;
        margin-right: 10px;
      }
      
      [name="loginUserForm"] label {
        color: white;
        font-size: 20px;
      }
      
      [name="login"], [name="passwd"], [name="retry_password"], [name="account_type"], [name="sn"], [name="fn"] {
        border: 1px solid black;
      }
      
    </style>
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
                  <input type="email" name="login" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Пароль</label>
                  <input type="password" name="password" class="form-control" required>
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
            {if $account_types != NULL}
              <form name="registrationUserForm" method="POST">
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
                    {foreach from=$account_types item=account_type}
                      <option value="{$account_type['id_account_type']}">{$account_type['description']}</option>
                    {/foreach}
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="registrationUserButton" value="Зарегистрировать" class="btn btn-primary">
                </div>
              </form>
            {else}
              <h3 align="center">Регистрация временно закрыта</h3>
            {/if}
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script type="text/javascript">

      function setFieldState(field, status = "")
      {
        if (status == "") {
          $("#" + field).attr("class", "form-group");
        } else {        
          $("#" + field).attr("class", "form-group has-" + status);
        }
      }
      
      <!-- setFieldState("passwordDiv", "success"); -->
      
      $("[name='registrationUserForm']").on("submit", function(){
        var password = $("[name='passwd']").val();
        var retry_password = $("[name='retry_password']").val();
        
        if ((password != "") && (retry_password != "")) {
          if (password == retry_password) {
            setFieldState("passwordDiv", "success");
            setFieldState("retryPasswordDiv", "success");
            
            return true;
          }
        }
        
        setFieldState("passwordDiv", "error");
        setFieldState("retryPasswordDiv", "error");
        
        return false;
      });
      
    </script>
  </body>
</html>