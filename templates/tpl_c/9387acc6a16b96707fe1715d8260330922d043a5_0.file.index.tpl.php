<?php
/* Smarty version 3.1.29, created on 2017-11-19 16:33:29
  from "E:\OpenServer\domains\PCM\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a11882966cf52_94970423',
  'file_dependency' => 
  array (
    '9387acc6a16b96707fe1715d8260330922d043a5' => 
    array (
      0 => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl\\index.tpl',
      1 => 1511098409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
  'tpl_function' => 
  array (
    'menu' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\OpenServer\\domains\\PCM\\templates\\tpl_c\\9387acc6a16b96707fe1715d8260330922d043a5_0.file.index.tpl.php',
      'uid' => '9387acc6a16b96707fe1715d8260330922d043a5',
      'call_name' => 'smarty_template_function_menu_278305a118829622bc4_80629788',
    ),
  ),
),false)) {
function content_5a11882966cf52_94970423 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php if ($_smarty_tpl->tpl_vars['currentImage']->value != NULL) {?>      
        <?php echo $_smarty_tpl->tpl_vars['currentImage']->value;?>
 | Workspace
      <?php } else { ?>
        IDE Smart PHP
      <?php }?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  -->
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/semantic.js"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 type="text/javascript" src="js/uiapp.js"><?php echo '</script'; ?>
>
    <style type="text/css">

      .ui.grid {
        padding: 10px;
      }

    </style>
  </head>
  <body>
      <div class="ui internally grid">
        <div class="row">
          <div class="sixteem wide column">
            <div class="ui menu">
              <div class="header item">
                <img src="img/logo.png" alt="" title="Object-Oriented Development Environment">
              </div>
              <div class="item">
                <select class="ui dropdown">
                  <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>        
                    <option value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                </select>
              </div>
              <a class="item">
                <i class="plus icon"></i>
                Проект
              </a>
              <div class="right menu">
                <a class="item" id="guide">
                  <i class="help circle icon"></i>
                </a>
                <a class="item" id="profile">Профиль</a>
                <a class="ui item">
                  Выйти
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="four wide column">
            <div class="ui top attached active tab segment" data-tab="classes">
                
              <?php if ($_smarty_tpl->tpl_vars['classHierarchia']->value != NULL) {?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['classHierarchia']->value), true);?>

              <?php }?>
            </div>
            <div class="ui top attached tab segment" data-tab="name_spaces">

            </div>
            <div class="ui bottom attached tabular menu">
              <a class="active item" data-tab="classes">Иерархия классов</a>
              <a class="item" data-tab="name_spaces">Пространства имён</a>
            </div>
          </div>
          <div class="twelve wide column">
            <div class="ui menu">
              <a class="item" id="createClass">
                <i class="plus icon"></i>
                Класс
              </a>
              <a class="item" id="createVar">
                <i class="plus icon"></i>
                Свойство
              </a>
              <a class="item" id="createMethod">
                <i class="plus icon"></i>
                Метод
              </a>
              <a class="item" id="createMethod">
                <i class="plus icon"></i>
                Пространство имён
              </a>
              <a class="item" id="createMethod">
                <i class="plus icon"></i>
                Интерфейс
              </a>
              <a class="item" id="createMethod">
                <i class="plus icon"></i>
                Словарь
              </a>
            </div>
            <div class="ui top attached active tab segment" data-tab="public">
              <div class="ui grid">
                <div class="row">
                  <div class="eight wide column">
                    <h3>Свойства</h3>
                    <hr>
                    <table class="ui table">
                      <thead>
                        <tr>
                          <th>Имя</th>
                          <th>Тип</th>
                          <th>Выбрать</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>sn</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>fn</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>pt</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>email</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>password</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="eight wide column">
                    <h3>Методы</h3>
                    <hr>
                    <table class="ui table">
                      <thead>
                        <tr>
                          <th>Имя</th>
                          <th>Тип</th>
                          <th>Выбрать</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>setSn()</td>
                            <td>no static</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>setFn()</td>
                            <td>no static</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>setPt()</td>
                            <td>no static</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>setEmail()</td>
                            <td>no static</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>setPassword()</td>
                            <td>no static</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>

                        <tr>
                          <td>getSn()</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>getFn()</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>getPt()</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>getEmail()</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>getPassword()</td>
                          <td>no static</td>
                          <td>
                            <div class="ui checkbox">
                              <input type="checkbox">
                              <label></label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="ui top attached tab segment" data-tab="private">
              Second
            </div>
            <div class="ui top attached tab segment" data-tab="protected">
              Third
            </div>
            <div class="ui bottom attached tabular menu">
              <a class="active item" data-tab="public">public</a>
              <a class="item" data-tab="private">private</a>
              <a class="item" data-tab="protected">protected</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="sixteen wide column">
            <div class="ui top attached tabular menu">
              <a class="item" data-tab="statistic">Статистика</a>
              <a class="active item" data-tab="code">Код</a>
              <a class="item" data-tab="generate">Генерация</a>
            </div>
            <div class="ui bottom attached tab segment" data-tab="statistic">
            Third
            </div>
            <div class="ui bottom attached active tab segment" data-tab="code">
              <form class="ui form">
                <div class="field">
                  <label>Метод: </label>
                  <textarea></textarea>
                </div>
              </form>
            </div>
            <div class="ui bottom attached tab segment" data-tab="generate">
              Second
            </div>
          </div>
        </div>
      </div>

      <?php echo '<script'; ?>
 type="text/javascript">
      
      $('.menu .item').tab();

      <?php echo '</script'; ?>
>

    <?php $_smarty_tpl->tpl_vars['image_no_set'] = new Smarty_Variable("Не выбран образ по умолчанию", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'image_no_set', 0);?>

    
<!--     
    <?php echo '<script'; ?>
 type="text/javascript">
    
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
          } else {
            alert("Class name is empty");
          }
        } else {
          alert("Error");
          alert(classes);
        }
        
      });
      
			$(".menu .item").tab();
			$('.ui.accordion').accordion();
      
      $('.message .close').on('click', function() {
          $(this).closest('.message').transition('fade');
      });
      
      
      // $(".close").alert();
      
      /*!
        Обработка событий нажатия на ссылки на панели инструментов
      */
      
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
      
      $("#guide").on("click", function(){
        $("#guideModal").modal('show');
      });

    <?php echo '</script'; ?>
>
     -->
  </body>
</html><?php }
/* smarty_template_function_menu_278305a118829622bc4_80629788 */
if (!function_exists('smarty_template_function_menu_278305a118829622bc4_80629788')) {
function smarty_template_function_menu_278305a118829622bc4_80629788($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
                <ul class="ui list" id="hierarchia">
                  <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_1_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_1_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                    <li class="item">
                      <i class="folder icon"></i>
                      <div class="content">
                        <div class="header"><a href="#<?php echo $_smarty_tpl->tpl_vars['entry']->value['supclass']->getClassName();?>
" class="class"><?php echo $_smarty_tpl->tpl_vars['entry']->value['supclass']->getClassName();?>
</a></div>
                        <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value['subclass'])) {?>
                          <ul class="list">
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value["subclass"]), true);?>

                          </ul>
                        <?php }?>
                      </div>
                    </li>
                  <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_local_item;
}
if ($__foreach_entry_1_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_1_saved_item;
}
?>
                </ul>
              <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_278305a118829622bc4_80629788 */
}
