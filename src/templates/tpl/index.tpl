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
		<script type="text/javascript" src="js/tabulation.js"></script>
	</head>
	<body>
		<div class="container-fluid">
      <div class="row" style="padding: 5px;">
        <div class="col-md-4">
					<div class="panel-group" id="mainPanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#pcm_classes">Классы</a>
								</h4>
							</div>
							<div id="pcm_classes" class="panel-collapse collapse in">
								<div class="panel-body">
									{include file='windows/class_window.tpl'}
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#pcm_vars">Переменные и константы</a>
								</h4>
							</div>
							<div id="pcm_vars" class="panel-collapse collapse in">
								<div class="panel-body">
									{include file='windows/var_window.tpl'}
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" href="#pcm_methods">Методы</a>
								</h4>
							</div>
							<div id="pcm_methods" class="panel-collapse collapse in">
								<div class="panel-body">
									{include file='windows/method_window.tpl'}
								</div>
							</div>
						</div>
					</div>
        </div>
				<div class="col-md-8">
					{include file='windows/tools_window.tpl'}
				</div>
      </div>
    </div>

    <!-- Скрипты -->
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

        $("[name='changeImageForGenerate']").change(function(){

            var image_name = $("[name='changeImageForGenerate']").val();

            $.ajax({
                url: "php/get_code_from_image.php",
                type: "POST",
                data: "image_name=" + image_name,
                success: function(replay){
									$("#previewCode").html("");
									$("#previewCode").html(replay);
                }
            });

        });
				
      });
			
			function editMethod(class_name, method_name) {
				
				$.ajax({
						url: "php/get_class.php",
						type: "POST",
						data: "class_name=" + class_name + "&method_name=" + method_name + "&what=1",
						success: function(replay){
							$("#codeEditor").text("");
							$("#codeEditor").text(replay);
							
							$("[name='for_class']").attr("value", class_name);
							$("[name='for_method']").attr("value", method_name);
						}
				});

			}
			
    </script>
	</body>
</html>
