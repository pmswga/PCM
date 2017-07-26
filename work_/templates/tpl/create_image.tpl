<!DOCTYPE html>
<html>
  <head>
    <title>Создание образа</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
          <br><br><br><br><br>
          <br><br><br><br><br>
          <fieldset>
            <legend>Создать образ</legend>
            <form name="createImageForm" method="POST">
              <div class="form-group">
                <input type="text" name="imageName" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="createImageButton" value="Создать образ" class="btn btn-default">
              </div>
            </form>
          </fieldset>
        </div>
        <div class="col-md-4">
          <br><br><br><br><br>
          <br><br><br><br><br>
          <fieldset>
            <legend>Выбрать существующий</legend>
            {if $images != NULL}
              <table class="table table-hover">
                <thead>
                  <!--
                  <form method="POST">
                    <input type="submit" value="Обновить">
                  </form>
                  <br>
                  <br>
                  -->
                </thead>
                <tbody>
                  {foreach from=$images item=image}
                    <tr>
                      <td>{$image->getImageName()}</td>
                      <td>
                        <form name="selectImageForm" method="POST">
                          <input type="hidden" name="imageName" value="{$image->getImageName()}">
                          <input type="submit" name="selectImageButton" value="Выбрать">
                        </form>
                      </td>
                    </tr>
                  {/foreach}
                </tbody>
              </table>
            {else}
              <h3 align="center">Образов нет</h3>
            {/if}
          </fieldset>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </body>
</html>