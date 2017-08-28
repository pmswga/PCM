<!DOCTYPE html>
<html>
  <head>
    <title>Профиль</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/vt.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
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
                          <td>{$user->login()}</td>
                        </tr>
                        <tr>
                          <td>Тип акканута</td>
                          <td>{$user->accountType()}</td>
                        </tr>
                        <tr>
                          <td>Дата удаленяи акканута</td>
                          <td>{$user->expirationDate()}</td>
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
                      </tbody>
                    </table>
                  </fieldset>
                </div>
                <div class="col-md-8">
                  <fieldset>
                    <legend>Образы в вашей папке</legend>
                    {if $imagesFiles != NULL}
                      <div id="images">
                        {foreach from=$imagesFiles item=imageFile}
                          <figure class="image">
                            <img src="images/image.jpg" alt="image">
                            <figcaption><a href="#{$imageFile}">{basename($imageFile)}</a></figcaption>
                            <input type="checkbox" name="selectImageFile[]" value="{$imageFile}">
                          </figure>
                        {/foreach}
                      </div>
                    {else}
                      <h3 align="center">Не найдено</h3>
                    {/if}
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
    
    <script type="text/javascript">
    
    </script>
  </body>
</html>