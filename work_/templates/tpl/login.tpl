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
      
      [name="login"], [name="password"], [name="retry_password"], [name="account_type"] {
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
                  <input type="text" name="login" class="form-control">
                </div>
                <div class="form-group">
                  <label>Пароль</label>
                  <input type="password" name="password" class="form-control">
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
            <form name="registrationUserForm" method="POST">
              <div class="form-group">
                <label>Логин</label>
                <input type="text" name="login" class="form-control">
              </div>
              <div class="form-group">
                <label>Пароль</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <label>Повторите пароль</label>
                <input type="password" name="retry_password" class="form-control">
              </div>
              <div class="form-group">
                <label>Тип аккаунта</label>
                <select name="account_type" class="form-control">
                  <option value="1">Free</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" name="registrationUserButton" value="Зарегистрировать" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script type="text/javascript">
    
    </script>
  </body>
</html>