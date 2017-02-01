<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/vt.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/tabulation.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-1">
						<ul class="nav nav-tabs tabs-left">
							<li class="active"><a href="#images" data-toggle="tab">Образы</a></li>
							<li><a href="#classes" data-toggle="tab">Классы</a></li>
							<li><a href="#code" data-toggle="tab">Код</a></li>
						</ul>
					</div>
					<div class="col-md-11">
						<div class="tab-content">
                            <div class="tab-pane active" id="images">
                                <div class="row">
                                    <div class="col-md-4">
                                        <fieldset>
                                            <legend>Создать образ</legend>
                                            <form name="create_image" method="POST">
                                                <div class="form-group">
                                                    <label>Название:</label>
                                                    <input name="image_name" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Выберете классы:</label>
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th>Класс</th>
                                                            <th>Выбрать</th>
                                                        </tr>
                                                        {foreach from=$classes item=class}
                                                            <tr>
                                                                <td>{$class->getClassName()}</td>
                                                                <td><input name="add_class[]" value="{$class->getClassName()}" type="checkbox" class="form-control"></td>
                                                            </tr>
                                                        {/foreach}
                                                    </table>
                                                </div>
                                                <div class="form-group">
                                                    <input name="create_image_button" type="submit" class="btn btn-md btn-success" value="Собрать">
                                                </div>
                                            </form>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset>
                                            <legend>Готовые образы</legend>
                                            <form name="work_with_images" method="POST">
                                                <input name="delete_image_button" type="submit" class="btn btn-danger pull-right" value="Удалить">
                                                <br>
                                                <br>
                                                {if $images != NULL}
                                                    <div class="panel-group" id="final_images">
                                                    {foreach from=$images item=image}
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                  <a data-toggle="collapse" data-parent="#final_images" href="#{$image->getName()}">{$image->getName()}</a>
                                                                  <input name="delete_image[]" type="checkbox" value="{$image->getName()}">
                                                                </h4>
                                                            </div>
                                                            <div id="{$image->getName()}" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <label>Классы в составе образа:</label>
                                                                    <ul>
                                                                    {foreach from=$image->getClasses() item=class}
                                                                        <li>{$class->getClassName()}</li>
                                                                    {/foreach}
                                                                    </ul>
                                                                    <hr>
                                                                    <input type="submit" class="btn btn-warning" value="Изменить">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {/foreach}
                                                    </div>
                                                {else}
                                                    <h3 align="center">Образов нет</h3>
                                                {/if}
                                            </form>
                                        </fieldset>
                                    </div>
                                </div>
							</div>
                            <div class="tab-pane" id="classes">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <legend>Создать класс</legend>
                                            <form name="create_class" method="POST">
                                                <div class="form-group">
                                                    <label>Имя:</label>
                                                    <input name="class_name" type="text" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Тип:</label>
                                                    <select name="class_type" class="form-control">
                                                        <option value="1">Обычный</option>
                                                        <option value="0">Абстрактный</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Константы</label>
                                                    <table id="add_const_form">
                                                        <tr>
                                                            <td><label>Имя</label></td>
                                                            <td><input id="const_name" type="text" class="form-control"></td>
                                                            <td><label>Значение</label></td>
                                                            <td><input id="const_value" type="text" class="form-control"></td>
                                                            <td><button id="add_const_to_table" type="button" class="btn btn-primary">+</button></td>
                                                        </tr>
                                                    </table>
                                                    <br>                                                           
                                                    <table id="consts_table" class="table table-hover">
                                                        <tr>
                                                            <th>Имя</th>
                                                            <th>Значение</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="form-group">
                                                    <label>Атрибуты (через , )</label>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <fieldset>
                                                                <legend id="public_var_legend">PUBLIC</legend>
                                                                <input name="public_vars" type="text" class="form-control">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <fieldset>
                                                                <legend id="private_var_legend">PRIVATE</legend>
                                                                <input name="private_vars" type="text" class="form-control">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <fieldset>
                                                                <legend id="protected_var_legend">PROTECTED</legend>
                                                                <input name="protected_vars" type="text" class="form-control">
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="create_class_button" type="submit" class="btn btn-md btn-success" value="Создать класс">
                                                </div>
                                            </form>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <legend>Список классов</legend>
                                            <form name="work_with_classes" method="POST">
                                                {if $classes != NULL}
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <td>Класс</td>
                                                            <td><input name="delete_class_button" type="submit" class="btn btn-danger" value="Удалить"></td>
                                                            <td>Изменение</td>
                                                        </tr>
                                                            {foreach from=$classes item=class}
                                                                <tr>
                                                                    <td>{$class->getClassName()}</td>
                                                                    <td><input name="delete_class[]" value="{$class->getClassName()}" type="checkbox" class="form-control"></td>
                                                                    <td><a href=""></a></td>
                                                                </tr>
                                                            {/foreach}
                                                    </table>
                                                {else}
                                                    <h3>Классы не созданы</h3>
                                                {/if}
                                            </form>
                                        </fieldset>
                                    </div>
                                </div>
							</div>
                            <div class="tab-pane" id="code">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend>Предосмотр кода</legend>
                                            <form name="generate_code" method="POST">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Выбрать образ</label>
                                                            <select id="change_image_for_generate_code" class="form-control">
                                                                {foreach from=$images item=image}
                                                                    <option value="{$image->getName()}">{$image->getName()}</option>
                                                                {/foreach}
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                        
                                                        </div>
                                                        <div id="generate_buttons" class="col-md-2">
                                                            <input name="generate_current" type="submit" class="btn btn-primary" value="Сгенерировать все образы">
                                                            <br>
                                                            <input name="generate_current" type="submit" class="btn  btn-primary" value="Сгенерировать этот образ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="code" rows="32" class="form-control" onkeydown="insertTab(this, event);">{$image_code}</textarea>
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
        </div>
        <script type="text/javascript">
            
            $(document).ready(function(){
                
                var class_consts_names = new Array();
                var class_variables_names = new Array();
                
                $("#add_const_to_table").click(function(){
                
                    var const_name = $("#const_name").val();
                    var const_value = $("#const_value").val();
                    
                    if((const_name != "") && (const_value != ""))
                    {
                        if($.inArray(const_name, class_consts_names) > -1) alert("Вы уже добавили константу с таким именем");
                        else
                        {
                            class_consts_names.push(const_name);
                            $("#consts_table").append("<tr><td> " + const_name + "<input type='hidden' name='consts_names[]' value='" +const_name + "'><input type='hidden' name='consts_values[]' value='" + const_value + " '></td><td>" + const_value + "</td></tr>");
                            $("#const_name").val("");
                            $("#const_value").val("");
                        }
                    }
                    else if(const_name == "") alert("Введите имя константы");
                    else alert("Введите значение константы");
                    
                });
                
                $("#change_image_for_generate_code").change(function(){
                    
                    var image_name = $("#change_image_for_generate_code").val();
                    
                    $.ajax({
                        url: "php/get_code_from_image.php",
                        type: "POST",
                        data: "image_name=" + image_name,
                        success: function(replay){
                            $("[name='code']").html("");
                            $("[name='code']").html(replay);
                        }
                    });
                    
                });
                
            });
            
        </script>
	</body>
</html>