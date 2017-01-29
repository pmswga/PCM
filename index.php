<?php
	require_once "start.php";
	
	const THIS = "index.php";
	
	
	
?>
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
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend>Мои образы</legend>
                                        </fieldset>
                                    </div>
                                </div>
							</div>
                            <div class="tab-pane" id="classes">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend>Мои классы</legend>
                                        </fieldset>
                                    </div>
                                </div>
							</div>
                            <div class="tab-pane" id="code">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend>Предосмотр кода</legend>
                                        </fieldset>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
	</body>
</html>