<!DOCTYPE html>
<html>
  <head>
    <title>Настройки</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/vt.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <form name="settingsForm" method="POST">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">        
            <ul class="nav nav-tabs tabs-left">
              <li><a href="index.php">Назад</a></li>
              <li class="active"><a href="#general" data-toggle="tab">Общее</a></li>
              <li><a href="#images" data-toggle="tab">Образы</a></li>
              <li><a href="#debug" data-toggle="tab">Debug Window</a></li>
              <li><a href="#settings" data-toggle="tab">Настройки</a></li>
            </ul>
          </div>
          <div class="col-md-10">
            <div class="tab-content">
              <div class="tab-pane active" id="general">
                
              </div>
              <div class="tab-pane" id="images">
                <div class="row">
                  <div class="col-md-4">
                    <fieldset>
                      <legend>Действия</legend>
                        <input type="submit" name="exportSelectedImagesButton" value="Экспортировать выбранные образы" class="btn btn-primary btn-block">
                        <input type="submit" name="exportAllImagesButton" value="Экспортировать все образы" class="btn btn-primary btn-block">
                        <input type="submit" name="removeSelectedImagesButton" value="Удалить выбранные образы" class="btn btn-danger btn-block">
                        <input type="submit" name="clearAllImagesButton" value="Удалить все образы" class="btn btn-danger btn-block">
                        <hr>
                        <input type="submit" name="resetCurrentImageButton" value="Сбросить образ по умолчанию" class="btn btn-warning btn-block">
                    </fieldset>
                  </div>
                  <div class="col-md-8">
                    <fieldset>
                      <legend>Образ по умолчанию</legend>
                      {if $session['currentImage'] != NULL}                      
                        <h3 align="center">{$session['currentImage']->getImageName()}</h3>
                      {else}
                        <h3 align="center">Не выбран</h3>
                      {/if}
                    </fieldset>
                    <table class="table table-striped">
                      <thead>
                        <h1>Образы в системе</h1>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Название</th>
                          <th>Кол-во классов</th>
                          <th>Выбрать</th>
                        </tr>
                        {foreach from=$session['images'] item=image}
                          <tr>
                            <td>{$image->getImageName()}</td>
                            <td>{count($image->getClasses())}</td>
                            <td><input type="checkbox" name="selectImage[]" value="{$image->getImageName()}" class="form-control"></td>
                          </tr>
                        {/foreach}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="debug">
                <h1>Настройки</h1>
                <pre>{print_r($session['settings'])}</pre>
                <hr>
                <h1>Образы</h1>
                <pre>{print_r($session['images'])}</pre>
                <hr>
                <h1>Текущий образ</h1>
                <pre>{print_r($session['currentImage'])}</pre>
                <hr>
                <h1>Сообщения</h1>
                <pre>{print_r($session['msgs'])}</pre>
              </div>
              <div class="tab-pane" id="settings">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    
    <!-- Status Bar -->
    {include "blocks/status_bar.tpl"}
    
    <script type="text/javascript">
      
      $("[data-toggle='tooltip']").tooltip();
      $("[data-toggle='popover']").popover();
      
    </script>
    
  </body>
</html>