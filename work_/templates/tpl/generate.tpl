<!DOCTYPE html>
<html>
  <head>
    <title>{$image->getImageName()} | Генерация кода</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/tabulation.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Smart PHP</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Назад</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <fieldset>
            <legend>Классы</legend>
            <table class="table table-hover">
              <tr>
                <th>Название класса</th>
              </tr>
              {foreach from=$image->getClasses() item=class}
                <tr>
                  <td>{$class->getClassName()}</td>
                </tr>
              {/foreach}
            </table>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset>
            <legend>Предосмотр кода</legend>
            <textarea rows="50" class="form-control" onkeydown="insertTab(this, event);">{$image}</textarea>
          </fieldset>
        </div>
      </div>
    </div>
  </body>
</html>