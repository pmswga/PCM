<?php
/* Smarty version 3.1.29, created on 2017-08-28 13:04:09
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a3ea99ac9755_45580979',
  'file_dependency' => 
  array (
    'ad32328a6b2b38bae85b8500cb376381cedcf724' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\login.tpl',
      1 => 1503911489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a3ea99ac9755_45580979 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>IDE Smart PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
    <style type="text/css">
      
      label {
        color: white;
      }
      
      #body {
        justify-content: space-around;
        height: 100vh;
      }
      
      #left-side .row {
        display: flex;
        align-items: center;
        height: 100vh;
      }
      
      #left-side {
        border-right: 2px solid white;
      }
      
      #right-side {
      }
      
      .news {
        color: white;
        border: 1px solid white;
        padding: 15px;
        margin: 10px;
      }
      
      .news h2 {
        margin: 0px;
      }
      
      .news .content {
        padding: 15px;
      }
      
      .news .footer {
        display: flex;
        justify-content: flex-end;
        width: 100%;
      }
      
    </style>
  </head>
  <body>
    <div class="container-fluid" id="body">
      <div class="row">
        <div class="col-md-6" id="left-side">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
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
                  <input type="submit" name="loginUserButton" value="Войти" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6" id="right-side">
          <fieldset>
            <legend>Новости</legend>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                  <article class="news">
                    <h2>caption</h2>
                    <div class="content">
                      Content
                    </div>
                    <div class="footer">              
                      <time><?php echo date("d.m.Y");?>
</time>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </fieldset>
      </div>
    </div>
    
    <?php echo '<script'; ?>
 type="text/javascript">
    
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
}
