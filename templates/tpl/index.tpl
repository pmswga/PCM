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
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.js"></script>
	  <script type="text/javascript" src="js/tabulation.js"></script> 
		<script type="text/javascript" src="js/uiapp.js"></script>
  </head>
  <body>
    {$image_no_set = "Не выбран образ по умолчанию"}
  
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
                <fieldset>
                  <legend><h1>Иерархия классов</h1></legend>
                    {menu data=$classHierarchia}
                </fieldset>
              {/if}
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
                  {if $image != NULL}
                    <div class="ui internally grid">
                      <div class="row">
                        <div class="eight wide column">                      
                          <div id="profile_tool_bar">
                            <table class="ui table striped">
                              <tbody>
                                <tr>
                                  <td>Классов</td>
                                  <td>{$countOfClasses|default:0}</td>
                                </tr>
                                <tr>
                                  <td>Методов</td>
                                  <td>{$countOfMethods|default:0}</td>
                                </tr>
                                <tr>
                                  <td>Свойств</td>
                                  <td>{$countOfVars|default:0}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <fieldset>
                            <legend style="color: black;"><h1>Структура образа</h1></legend>
                            {function stat}
                              <ul class="ui list" id="image_structures">
                                {foreach from=$data item=entry}
                                  <li class="item">
                                    <i class="folder open icon"></i>
                                    <div class="content">
                                      <div class="header">
                                        <a href="#{$entry['supclass']->getClassName()}">{$entry['supclass']->getClassName()}</a>
                                      </div>
                                      <div class="content">
                                        <ul class="ui list">
                                          {foreach from=$entry['supclass']->getVars() item=var}
                                            <li class="item">
                                              <div class="content">
                                                <div class="header">var ${$var->getVarName()}</div>
                                              </div>
                                            </li>
                                          {/foreach}
                                          {foreach from=$entry['supclass']->getMethods() item=method}
                                            <li class="item">
                                              <div class="content">
                                                <div class="header">method {$method->getMethodName()}()</div>
                                              </div>
                                            </li>
                                          {/foreach}
                                        </ul>
                                      </div>
                                      {if is_array($entry['subclass'])}
                                        <ul class="list">
                                          {stat data=$entry["subclass"]}
                                        </ul>
                                      {/if}
                                    </div>
                                  </li>
                                {/foreach}
                              </ul>
                            {/function}
                            {stat data=$image->getClassHierarchia()}
                          </fieldset>
                        </div>
                        <div class="eight wide column">
                          {include file="tables/image_statistic.tpl"}
                        </div>
                      </div>
                    </div>
                  {else}
                    <h3 align="center">{$image_no_set}</h3>
                  {/if}
                </div>
                <div class="ui bottom attached tab segment active" data-tab="method_code">
                  <div class="ui internally celled grid">
                    <div class="row">
                      <div class="ten wide column">
                        <form name="editCodeMethodForm" method="POST" class="ui form">
                          <div class="field">
                            <textarea rows="15" name="src" onkeydown="insertTab(this, event);" id="methodCode"></textarea>
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
                  {if $image != NULL}
                    <div class="ui grid">
                      <div class="row">
                        <div class="six wide column">
                          {$classes = $image->getClasses()}
                          {if $classes != NULL}
                            <table class="ui table striped">
                              <thead>                          
                                <tr>
                                  <th>Название класса</th>
                                </tr>
                              </thead>
                              <tbody>
                                  {foreach from=$classes item=class}
                                    <tr>
                                      <td>{$class->getClassName()}</td>
                                    </tr>
                                  {/foreach}
                              </tbody>
                            </table>
                          {else}
                            <h3 align="center">В образе нет классов</h3>
                          {/if}
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
                    </div>
                  {else}
                    <h3 align="center">{$image_no_set}</h3>
                  {/if}
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
        $("#vars-table").html("<h3 align='center'>Не объявлены</h3>");
        $("#methods-table").html("<h3 align='center'>Не объявлены</h3>");
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