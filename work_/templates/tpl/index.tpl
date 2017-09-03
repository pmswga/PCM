<!DOCTYPE html>
<html>
  <head>
    <title>
      {if $currentImage != NULL}      
        {$currentImage} | Workspace
      {else}
        IDE Smart PHP
      {/if}
    </title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="css/semantic/semantic.js"></script>
    <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
		<!-- <script type="text/javascript" src="js/tabulation.js"></script> -->
		<!-- <script type="text/javascript" src="js/uiapp.js"></script> -->
    
    <!-- Init EditArea -->
    <!-- <script type="text/javascript" src="editarea/edit_area/edit_area_full.js"></script> -->
    <!-- <script type="text/javascript"> -->
      
      <!-- editAreaLoader.init({ -->
        <!-- id: "methodCode" -->
        <!-- ,start_highlight: true -->
        <!-- ,allow_resize: "no" -->
        <!-- ,min_height: 650 -->
        <!-- ,allow_toggle: false -->
        <!-- ,word_wrap: true -->
        <!-- ,language: "ru" -->
        <!-- ,syntax: "php" -->
      <!-- }); -->
    
    <!-- </script> -->
    
    <style rel="stylesheet" type="text/css">
      
      body {
        background-color: #120E21;
        font-family: 'Open Sans', sans-serif;
      }
      
      .ui.inverted.menu {
        width: 200vh;
        background-color: #564F6E;
      }
      
      .one, .two, .three,
      .four, .five, .six,
      .seven, .eight, .nine,
      .ten, .eleven, .twelve,
      .thirteen, .fourtheen, .sixtheen {
      
        <!-- border: 1px solid black; -->
      }
      
      #content {
        padding: 10px;
      }
      
      fieldset legend {
        color: white;
      }
      
      .ui.tabular.menu .item {
        color: white;
      }
      .ui.tabular.menu .item:hover {
        color: black;
        background-color: white;
      }
      
    </style>
    
  </head>
  <body>
    <div class="ui inverted massive menu">
      <div class="header item">
        Smart PHP
      </div>
      <a class="item">Профиль</a>
      <a class="item">Настройки</a>
      <div class="right menu">
        <a class="item">Выход</a>
      </div>
    </div>
    <div id="content" class="ui divided grid">
      <div class="row">
        <div class="four wide column">
          <div class="row">
            <div class="sixteen wide column">
              <div class="ui success message">
                <i class="close icon"></i>
                <div class="header">
                  Хорошее сообщение
                </div>
                <p>Барин доволен</p>
              </div>
              <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">
                  Плохое сообщение
                </div>
                <p>Царь батюшка!! Не вели казнить, вели слово молвить...</p>
              </div>
              <div class="ui warning message">
                <i class="close icon"></i>
                <div class="header">
                  Предупреждение
                </div>
                <p>Сейчас кому-то по губам дам, за такие слова!</p>
              </div>
              <div class="ui info message">
                <i class="close icon"></i>
                <div class="header">
                  Просто информация 
                </div>
                <ul class="list">
                  <li>Буклеты сделаны</li>
                  <li>Прога супер</li>
                </ul>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="sixteen wide column">
              <fieldset>
                <legend>Classes</legend>
              </fieldset>          
            </div>
          </div>
        </div>
        <div class="twelve wide column">
          <div class="ui divided grid">
            <div class="row">
              <div class="sixteen wide column">
                <div class="ui menu">
                  <a class="item">
                    <i class="file icon"></i>
                    Add Class
                  </a>
                  <a class="item">
                    <i class="video play icon"></i>
                    Add Var
                  </a>
                  <a class="item">
                    <i class="video camera icon"></i>
                    Add Method
                  </a>
                  <a class="item">
                    <i class="video camera icon"></i>
                    Add Const
                  </a>
                  <div class="right menu">
                    <div class="item">
                      <div class="ui input"><input type="text" placeholder="Search..."></div>
                    </div>
                    <a class="item">
                      <i class="out file icon"></i>
                      Add Image
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="eight wide column">
                <fieldset>
                  <legend>Vars</legend>
                </fieldset>
              </div>
              <div class="eight wide column">
               <fieldset>
                  <legend>Methods</legend>
                </fieldset>
              </div>
            </div>
            <div class="row">
              <div class="sixteen wide column">              
                <div class="ui top attached tabular menu">
                  <a class="item active" data-tab="method_code">
                    <i class="large code icon"></i>
                    Метод
                  </a>
                  <a class="item" data-tab="generate_code">
                    <i class="large file code outline icon"></i>
                    Генерация
                  </a>
                </div>
                <div class="ui bottom attached tab segment active" data-tab="method_code">
                  <form class="ui form">
                    <div class="field">
                      <textarea rows="15"></textarea>
                    </div>
                  </form>
                </div>
                <div class="ui bottom attached tab segment" data-tab="generate_code">
                  Генерация кода
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">{*
          {include "blocks/menu.tpl"}*}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              {if $msgs != NULL}{*
                  {include "blocks/status_bar.tpl"}*}
              {/if}
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
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="panel-group" id="accord_vars">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse">Свойства</a>
                            </h4>
                          </div>
                          <div id="vars" class="panel-collapse collapse in">
                            <div class="panel-body" id="vars-table"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="panel-group" id="accord_methods">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse">Методы</a>
                            </h4>
                          </div>
                          <div id="methods" class="panel-collapse collapse in">
                            <div class="panel-body" id="methods-table"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <legend>Редактирование метода <span id="currentEditMethod"></span></legend>
                    <form name="editCodeMethodForm" method="POST">
                      <div class="form-group">                    
                        <textarea rows="15" name="src" class="form-control"  id="methodCode"></textarea>-->
                        <!-- onkeydown="insertTab(this, event);" --><!--
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="editClass" value="">
                        <input type="hidden" name="editMethod" value="">
                        <input type="submit" name="saveCodeMethodButton" value="Сохранить" class="btn btn-primary pull-right">
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    -->
    <!-- Modal windows -->
    <!--
    {*{include "modals/create_class_modal.tpl"}
    {include "modals/create_image_modal.tpl"}
    {include "modals/view_images_modal.tpl"}
    {include "modals/select_current_image_modal.tpl"}
    {include "modals/create_var_modal.tpl"}
    {include "modals/create_method_modal.tpl"}*}
    -->
    
    <!-- Modals -->
    <!--
    <div class="ui modal">
      <i class="close icon"></i>
      <div class="header">
        Profile Picture
      </div>
      <div class="image content">
        <div class="ui medium image">
          <img src="/images/avatar/large/chris.jpg">
        </div>
        <div class="description">
          <div class="ui header">We've auto-chosen a profile image for you.</div>
          <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
          <p>Is it okay to use this photo?</p>
        </div>
      </div>
      <div class="actions">
        <div class="ui black deny button">
          Nope
        </div>
        <div class="ui positive right labeled icon button">
          Yep, that's me
          <i class="checkmark icon"></i>
        </div>
      </div>
    </div>
    -->
      
    
    
    <!-- Status bar -->
    <!--
    <script type="text/javascript">
    
      var classes = [];
      
      $("a.class").each(function(index, value){
        let class_name = $(value).attr("href");
        class_name = class_name.substr(1, class_name.length);
        
        classes.push(class_name);
      });
      
      
      let app = new UIApp(classes);
      if (!app.getClassMembers()) {
        $("#vars-table").html("<h3 align='center'>Empty</h3>");
        $("#methods-table").html("<h3 align='center'>Empty</h3>");
      }
      
      $("a.class").on("click", function(){
        
        var selectedClassName = $(this).attr("href");
        selectedClassName = selectedClassName.substr(1, selectedClassName.length);
        
        app.setCurrentClass(selectedClassName);
        app.getClassMembers();
        
      });
      
      $(document).on("click", "a.method", function(){
      
        var selectedMethodName = $(this).attr("href");
        selectedMethodName = selectedMethodName.substr(1, selectedMethodName.length);
        
        app.getMethodSrc(selectedMethodName);
      });
      
      $("[data-toggle='tooltip']").tooltip();
      $("[data-toggle='popover']").popover();
      $(".close").alert();
      
      $("#profile").on("click", function() {      
        $('.ui.modal').modal('show');
      });
      
      
    </script>
    -->
    
    <script type="text/javascript">
      
      
			$(".menu .item").tab();
			
			$('.ui.accordion').accordion();
			
			$('select.dropdown').dropdown();
			$('.dropdown').dropdown();
      
      $('.message .close').on('click', function() {
          $(this).closest('.message').transition('fade');
      });
      
    </script>
    
  </body>
</html>