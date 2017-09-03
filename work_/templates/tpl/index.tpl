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
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
       /*
       editAreaLoader.init({ 
        id: "generatedCode" 
        ,start_highlight: true 
        ,allow_resize: "both"
        ,min_height: 650
        ,allow_toggle: false
        ,word_wrap: true 
        ,language: "ru" 
        ,syntax: "php"
        ,is_editable: false
       }); 
    */
    </script>
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
                  Классы не объявлены
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
            </div>
            <div class="row">
              <div class="sixteen wide column">              
                <div class="ui top attached tabular menu">
                  <a class="item" data-tab="review">
                    <i class="area chart icon"></i>
                    Обзор
                  </a>
                  <a class="item active" data-tab="method_code">
                    <i class="large code icon"></i>
                    Код
                  </a>
                  <a class="item" data-tab="generate_code">
                    <i class="large file code outline icon"></i>
                    Генерация
                  </a>
                </div>
                <div class="ui bottom attached tab segment" data-tab="review">
                  <div class="ui grid">
                    <div class="row">
                      <div class="sixteen wide column">                      
                        <div class="actions" id="profile_tool_bar">
                          <div class="ui labeled button" tabindex="0">
                            <div class="ui button">
                              Классов
                            </div>
                            <a class="ui basic red left pointing label">
                              {$countOfClasses|default:0}
                            </a>
                          </div>
                          <div class="ui labeled button" tabindex="0">
                            <div class="ui button">
                              Методов
                            </div>
                            <a class="ui basic red left pointing label">
                              {$countOfMethods|default:0}
                            </a>
                          </div>
                          <div class="ui labeled button" tabindex="0">
                            <div class="ui button">
                              Свойств
                            </div>
                            <a class="ui basic red left pointing label">
                              {$countOfVars|default:0}
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="sixteen wide column">
                      
                      </div>
                    </div>
                  </div>
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
                  <div class="ui grid">
                    {if $image != NULL}
                      <div class="row">
                        <div class="six wide column">
                            <table class="ui table striped">
                              <thead>                          
                                <tr>
                                  <th>Название класса</th>
                                </tr>
                              </thead>
                              <tbody>                          
                                {foreach from=$image->getClasses() item=class}
                                  <tr>
                                    <td>{$class->getClassName()}</td>
                                  </tr>
                                {/foreach}
                              </tbody>
                            </table>
                        </div>
                        <div class="ten wide column">
                          <div class="ui internally grid">
                            <div class="row">
                              <div class="sixteen wide column">
                                <form name="generateForm" method="POST" class="ui form">
                                  <div class="field">
                                    <input type="submit" name="generateImageButton" value="Сгенерировать" class="ui button">
                                  </div>
                                  <div class="field">
                                    <textarea rows="50" id="generatedCode" width="100%">{$image}</textarea>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    {else}
                      <div class="row">
                        <div class="six wide column">
                          <h2>Для начала необходимо создать образ</h2>
                        </div>
                      </div>
                    {/if}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal windows -->
    
    {include "modals/create_image_modal.tpl"}
    {include "modals/select_current_image_modal.tpl"}
    {include "modals/create_class_modal.tpl"}
    {include "modals/create_var_modal.tpl"}
    {include "modals/create_method_modal.tpl"}
    
    {include "modals/profile.tpl"}
    {*
    {include "modals/view_images_modal.tpl"}
    *}
    
    
    <!-- Modals -->
          
    
    
    <script type="text/javascript">
    
      var classes = [];
      var classes_for_search = [];
      
      $("a.class").each(function(index, value){
        let class_name = $(value).attr("href");
        class_name = class_name.substr(1, class_name.length);
        
        classes_for_search.push({ title: class_name });
        
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
      
      //init segment ui
      $('.ui.search').search({
        source: classes_for_search   
      });
            
      $("#search_class").on("change", function(){
        var class_name = $("#search_class").val();
        
        if (classes.indexOf(class_name) != -1) {
        
          if (class_name != "") {
            app.setCurrentClass(class_name);
            app.getClassMembers();
          }
        }
        
      });
      
			$(".menu .item").tab();
			$('.ui.accordion').accordion();
      
      $('.message .close').on('click', function() {
          $(this).closest('.message').transition('fade');
      });
      
      
      // $(".close").alert();
      
      $("#createImage").on("click", function(){
        $("#createImageModal").modal('show');
      });
      
      $("#selectCurrentImage").on("click", function(){
        $("#selectCurrnetImageModal").modal('show');
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
      
    </script>   
  </body>
</html>