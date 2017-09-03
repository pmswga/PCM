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
    <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="css/semantic/semantic.js"></script>
		<!-- <script type="text/javascript" src="js/tabulation.js"></script> -->
		<script type="text/javascript" src="js/uiapp.js"></script>
    
    <!-- Init EditArea -->
    <script type="text/javascript" src="editarea/edit_area/edit_area_full.js"></script> 
    <script type="text/javascript">
      
       editAreaLoader.init({ 
       id: "methodCode" 
       ,start_highlight: true 
        ,allow_resize: "no" 
        ,min_height: 650
         ,allow_toggle: false
        ,word_wrap: true 
        ,language: "ru" 
         ,syntax: "php" 
       }); 
    
    </script> 
    
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
      
      h1, h2, h3, h4 {
        color: black;
      }
      
      .ui.list, .class{
        color: white;
      }
      
      .ui.form .field:last-child {
        display: flex;
        justify-content: flex-end;
      }
      
      #profile_tool_bar {
        display: flex;
        justify-content: space-around;
      }
      
    </style>
  </head>
  <body>
    {include file="blocks/menu.tpl"}
    <div id="content" class="ui divided grid">
      <div class="row">
        <div class="four wide column">
          <div class="row">
            <div class="sixteen wide column">
              {if $msgs != NULL}              
                {include file="blocks/status_bar.tpl"}
              {/if}
            </div>
          </div>
          <br>
          <div class="row">
            <div class="sixteen wide column">
              <fieldset>
                <legend><h1>Иерархия классов</h1></legend>
                {function menu}
                  <ul class="ui list" id="hierarchia">
                    {foreach from=$data item=entry}
                      <li class="item">
                        <i class="folder icon"></i>
                        <div class="content">
                          <div class="header"><a href="#{$entry['supclass']->getClassName()}" class="class">{$entry['supclass']->getClassName()}</a></div>
                          {if is_array($entry['subclass'])}
                            <ul class="list">
                              {menu data=$entry["subclass"]}
                            </ul>
                          {/if}
                        </div>
                      </li>
                    {/foreach}
                  </ul>
                {/function}
                {if $classHierarchia != NULL}
                  {menu data=$classHierarchia}
                {else}
                  <h3 align="center">Классы не объявлены</h3>
                {/if}
              </fieldset>          
            </div>
          </div>
        </div>
        <div class="twelve wide column">
          <div class="ui divided grid">
            <div class="row">
              <div class="sixteen wide column">
                {include file="blocks/tool_bar.tpl"}
              </div>
            </div><!--
            <div class="row">
              <div class="eight wide column">
                <fieldset>
                  <legend><h1>Свойства</h1></legend>
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
                </fieldset>
              </div>
              <div class="eight wide column">
               <fieldset>
                  <legend><h1>Методы</h1></legend>
                </fieldset>
              </div>
            </div>-->
            <div class="row">
              <div class="sixteen wide column">              
                <div class="ui top attached tabular menu">
                  <a class="item active" data-tab="method_code">
                    <i class="large code icon"></i>
                    Код
                  </a>
                  <a class="item" data-tab="generate_code">
                    <i class="large file code outline icon"></i>
                    Генерация
                  </a>
                </div>
                <div class="ui bottom attached tab segment active" data-tab="method_code">
                  <div class="ui internally celled grid">
                    <div class="row">
                      <div class="ten wide column">
                        <form name="editCodeMethodForm" method="POST" class="ui form">
                          <div class="field">
                            <textarea rows="15" name="src" id="methodCode"></textarea>
                        <!-- onkeydown="insertTab(this, event);" -->
                          </div>
                          <div class="field">
                            <input type="hidden" name="editClass" value="">
                            <input type="hidden" name="editMethod" value="">
                            <input type="submit" name="saveCodeMethodButton" value="Сохранить" class="ui button">
                          </div>
                        </form>
                      </div>
                      <div class="six wide column">
                         <div class="ui styled accordion">
                          <div class="title">
                            <i class="dropdown icon"></i>
                            Свойства
                          </div>
                          <div class="content">                            
                            <div class="panel-body" id="vars-table"></div>
                          </div>
                        </div>
                        <div class="ui styled accordion">
                          <div class="title">
                            <i class="dropdown icon"></i>
                            Методы
                          </div>
                          <div class="content">                            
                            <div class="panel-body" id="methods-table"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
    
    {include "modals/create_image_modal.tpl"}
    {include "modals/create_class_modal.tpl"}
    {include "modals/create_var_modal.tpl"}
    {include "modals/create_method_modal.tpl"}
    
    {include "modals/profile.tpl"}
    {*
    {include "modals/view_images_modal.tpl"}
    {include "modals/select_current_image_modal.tpl"}
    *}
    
    
    <!-- Modals -->
          
    
    
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
      
      
      //$(".close").alert();
      
      $("#createImage").on("click", function(){
        $("#createImageModal").modal('show');
      });
      
      $("#createClass").on("click", function(){
        $("#createClassModal").modal('show');
      });
     
      $("#createVar").on("click", function(){
        $("#createVarModal").modal('show');
      });
      
      $("#createMethod").on("click", function(){
        $("#createMethodModal").modal('show');
      });
      
      $("#profile").on("click", function(){
        $("#profileModal").modal('show');
      });
      
      
      
      
      //init segment ui
			$(".menu .item").tab();
			$('.ui.accordion').accordion();
      
      $('.message .close').on('click', function() {
          $(this).closest('.message').transition('fade');
      });
      
          
    </script>   
  </body>
</html>