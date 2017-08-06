<!DOCTYPE html>
<html>
  <head>
    <title>{$currentImage} | Workspace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style rel="stylesheet">
      
      table tr th {
        text-align: center;
      }
      
    </style>
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
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Создать <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" accesskey="c" data-toggle="modal" data-target="#createClassModal">Класс</a></li>
                  <li><a href="#" accesskey="m">Метод</a></li>
                  <li><a href="#" accesskey="v" data-toggle="modal" data-target="#createVarModal">Свойство</a></li>
                  <li><a href="#">Константа</a></li>
                  <li class="divider"></li>
                  <li><a href="#" accesskey="d">Словарь</a></li>
                </ul>
              </li>
              {if $countOfClasses > 0}              
                <li><a href="#count_of_classes">Классов: {$countOfClasses}</a></li>
              {/if}
              {if $countOfMethods > 0}              
                <li><a href="#count_of_methods">Методов: {$countOfMethods}</a></li>
              {/if}
              {if $countOfVariables > 0}              
                <li><a href="#count_of_variables">Методов: {$countOfVariables}</a></li>
              {/if}
              <li class="dropdown">
                {if $msgs != NULL}
                  <a href="#" class="dropdown-toggle" style="color: black;" data-toggle="dropdown">Сообщений {count($msgs)} <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    {foreach from=$msgs item=msg}                  
                      <li><a href="#info" class="bg-{$msg['type']}">{$msg['msg']}</a></li>
                    {/foreach}
                  </ul>
                {else}  
                  <a href="#" class="dropdown-toggle" style="color: black;" data-toggle="dropdown">Сообщений нет</b></a>
                {/if}
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="settings.php">Настройки</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Образы <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" accesskey="i" data-toggle="modal" data-target="#createImageModal">Создать</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#selectCurrnetImageModal">Выбрать по умолчанию</a></li>
                  <li></li>
                  <li><a href="#viewImages" data-toggle="modal" data-target="#viewImagesModal">Просмотр</a></li>
                </ul>
              </li>
              <li><a href="#">Генерация</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <fieldset>
                <legend>Иерархия классов</legend>
                {if $classHierarchia != NULL}
                  <div id="hierarchia" class="ui bulleted list">
                    {$classHierarchia}
                  </div>
                {else}
                  <h3 align="center">Классы не объявлены</h3>
                {/if}
              </fieldset>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#vars">Свойства</a>
                            </h4>
                          </div>
                          <div id="vars" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <table class="table table-bordered">
                                <tbody id="vars-table">
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#methods">Методы</a>
                            </h4>
                          </div>
                          <div id="methods" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <th>Имя</th>
                                    <th>Тип</th>
                                    <th>Доступ</th>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <textarea rows="15" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modals -->
    
    <div class="modal fade" id="createClassModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Добавить класс</h4>
          </div>
          <div class="modal-body">
            <form name="createClassForm" method="POST">
              <div class="form-group">
                <label>Суперкласс</label>
                <select name="superClassName" class="form-control">
                  <option>nil</option>
                  {if $classes != NULL}
                    {foreach from=$classes item=class}
                      <option value="{$class->getClassName()}">{$class->getClassName()}</option>
                    {/foreach}
                  {/if}
                </select>
              </div>
              <div class="form-group">
                <label>Имя класса</label>
                <input type="text" name="className" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label>Тип</label>
                <select name="typeClass" class="form-control">
                  <option value="0">Обычный</option>
                  <option value="1">Абстрактный</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" name="createClassButton" value="Создать" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div class="modal fade" id="createImageModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Добавить образ</h4>
          </div>
          <div class="modal-body">
            <form name="createImageForm" method="POST">
              <div class="form-group">
                <label>Имя образа</label>
                <input type="text" name="imageName" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="createImageButton" value="Создать" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    
    <div class="modal fade" id="viewImagesModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Все образы</h4>
          </div>
          <div class="modal-body">
            <form name="workWithImageForm" method="POST">
              {if $images != NULL}
                <table class="table table-bordered">
                  <tr>
                    <th>Имя</th>
                    <th>Классов</th>
                    <th>Методов</th>
                    <th>Свойств</th>
                  </tr>
                  {foreach from=$images item=image}        
                    <tr>
                      <td><a href="#{$image->getImageName()}">{$image->getImageName()}</a></td>
                      <td>{count($image->getClasses())}</td>
                      <td>~</td>
                      <td>~</td>
                    </tr>
                  {/foreach}
                </table>
              {else}
                <h3 align="center">Образов нет</h3>
              {/if}
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div class="modal fade" id="selectCurrnetImageModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Все образы</h4>
          </div>
          <div class="modal-body">
            <form name="selectCurrnetImageForm" method="POST">
              {if $images != NULL}
                <div class="form-group">
                  <label>Образ</label>
                  <select name="currentImage" class="form-control">
                    {foreach from=$images item=image}        
                      <option value="{$image->getImageName()}">{$image->getImageName()}</option>
                    {/foreach}                
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="selectCurrnetImageButton" value="Выбрать" class="btn btn-primary">
                </div>
              {else}
                <h3 align="center">Создайте образ</h3>
              {/if}
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    
    <div class="modal fade" id="createVarModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Добавить свойсто</h4>
          </div>
          <div class="modal-body">
            <form name="createVarForm" method="POST">
              {if $images != NULL}
                <div class="form-group">
                  <label>Класс</label>
                  <select name="class" class="form-control">
                    {foreach from=$classes item=class}
                      <option>{$class->getClassName()}</option>
                    {/foreach}
                  </select>
                </div>
                <div class="form-group">
                  <label>Имя</label>
                  <input type="text" name="varName" class="form-control">
                </div>
                <div class="form-group">
                  <label>Доступ</label>
                  <select name="varAccessType" class="form-control">
                    <option value="0">PUBLIC</option>
                    <option value="1">PRIVATE</option>
                    <option value="2">PROTECTED</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Тип</label>
                  <select name="varType" class="form-control">
                    <option value="0">Обычное</option>
                    <option value="1">Статическое</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="createVarButton" value="Создать" class="btn btn-primary">
                </div>
              {else}
                <h3 align="center">Создайте образ</h3>
              {/if}
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script type="text/javascript">
      
      $("a.class").click(function(){
        
        var className = $(this).attr("href");
        className = className.substr(1, className.length);
        
        $.ajax({
          url: "php/getVars.php",
          type: "post",
          data: "className=" + className,
          success: function (replay) {
            $("#vars-table").html("");
            $("#vars-table").html(replay);
          }
        });
        
      });
      
    </script>
    
    
  </body>
</html>