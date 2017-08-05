<?php
/* Smarty version 3.1.29, created on 2017-08-05 11:05:45
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59857c594c6356_56411349',
  'file_dependency' => 
  array (
    'ca2d8f2bf3cefe578fcb753c2b4c3801fea6e7bb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\index.tpl',
      1 => 1501920344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59857c594c6356_56411349 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['currentImage']->value;?>
 | Workspace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
    <style rel="stylesheet">
      
      table tr th {
        text-align: center;
      }
      
    </style>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
>
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
                  <li><a href="#" accesskey="v">Свойство</a></li>
                  <li><a href="#">Константа</a></li>
                  <li class="divider"></li>
                  <li><a href="#" accesskey="d">Словарь</a></li>
                </ul>
              </li>
              <li><a href="#count_of_classes">Классов: [1]</a></li>
              <li><a href="#count_of_methods">Методов: [1]</a></li>
              <li><a href="#count_of_variables">Свойств: [1]</a></li>
              <li class="dropdown">
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value != NULL) {?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Сообщений <?php echo count($_smarty_tpl->tpl_vars['msgs']->value);?>
 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_msg_0_saved_item = isset($_smarty_tpl->tpl_vars['msg']) ? $_smarty_tpl->tpl_vars['msg'] : false;
$_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['msg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
$__foreach_msg_0_saved_local_item = $_smarty_tpl->tpl_vars['msg'];
?>                  
                      <li><a href="#info" class="bg-<?php echo $_smarty_tpl->tpl_vars['msg']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['msg']->value['msg'];?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_local_item;
}
if ($__foreach_msg_0_saved_item) {
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_item;
}
?>
                  </ul>
                <?php } else { ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Сообщений нет</b></a>
                <?php }?>
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
            <div class="col-md-4" style="border: 1px solid black;">
              Classes hierarchia
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
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Свойства</a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
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
                    <div class="col-md-6">
                      <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Методы</a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
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
                  <?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_1_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_1_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_local_item;
}
if ($__foreach_class_1_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_item;
}
?>
                  <?php }?>
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
              <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
                <table class="table table-bordered">
                  <tr>
                    <th>Имя</th>
                    <th>Классов</th>
                    <th>Методов</th>
                    <th>Свойств</th>
                  </tr>
                  <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_2_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_2_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>        
                    <tr>
                      <td><a href="#<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</a></td>
                      <td>~</td>
                      <td>~</td>
                      <td>~</td>
                    </tr>
                  <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_local_item;
}
if ($__foreach_image_2_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_item;
}
?>
                </table>
              <?php } else { ?>
                <h3 align="center">Образов нет</h3>
              <?php }?>
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
              <?php if ($_smarty_tpl->tpl_vars['images']->value != NULL) {?>
                <div class="form-group">
                  <label>Образ</label>
                  <select name="currentImage" class="form-control">
                    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_3_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_3_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>        
                      <option value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value->getImageName();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_3_saved_local_item;
}
if ($__foreach_image_3_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_3_saved_item;
}
?>                
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="selectCurrnetImageButton" value="Выбрать" class="btn btn-primary">
                </div>
              <?php } else { ?>
                <h3 align="center">Создайте образ</h3>
              <?php }?>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
  </body>
</html><?php }
}
