<br>
<div class="navbar-header menu">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <ul class="nav navbar-nav">
    <li class="dropdown">
      <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Smart PHP <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#" accesskey="c" data-toggle="modal" data-target="#createClassModal">Класс</a></li>
        <li><a href="#" accesskey="m" data-toggle="modal" data-target="#createMethodModal">Метод</a></li>
        <li><a href="#" accesskey="v" data-toggle="modal" data-target="#createVarModal">Свойство</a></li>
        <li><a href="#">Константа</a></li>
        <li class="divider"></li>
        <li><a href="#" accesskey="d">Словарь</a></li>
      </ul>
    </li>
    <li><a href="profile.php">Профиль</a></li>
    <li><a href="settings.php">Настройки</a></li>
    <li><a href="#docs.php">Справка</a></li>
    <!-- {if $countOfClasses > 0}               -->
      <!-- <li class="image-statistic"><a href="#count_of_classes">Классов: {$countOfClasses}</a></li> -->
    <!-- {/if} -->
    <!-- {if $countOfMethods > 0}               -->
      <!-- <li class="image-statistic"><a href="#count_of_methods">Методов: {$countOfMethods}</a></li> -->
    <!-- {/if} -->
    <!-- {if $countOfVariables > 0}               -->
      <!-- <li class="image-statistic"><a href="#count_of_variables">Методов: {$countOfVariables}</a></li> -->
    <!-- {/if} -->
  </ul>
</div>
<div class="collapse navbar-collapse menu">
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Образы <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#" accesskey="i" data-toggle="modal" data-target="#createImageModal">Создать</a></li>
        <li><a href="#" data-toggle="modal" data-target="#selectCurrnetImageModal">Выбрать по умолчанию</a></li>
        <li></li>
        <li><a href="#viewImages" data-toggle="modal" data-target="#viewImagesModal">Просмотр</a></li>
      </ul>
    </li>
    <li><a href="generate.php">Генерация</a></li>
  </ul>
</div><!-- /.navbar-collapse -->
<br>