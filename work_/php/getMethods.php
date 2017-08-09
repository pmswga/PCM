<?php
  
  require_once "../start.php";
  
  
  $methods = $_SESSION['currentImage']->getClass($_POST['className'])['supclass']->getMethods();
  
  if (!empty($methods)) {
    
    $code .= <<< _END
      <tr>
        <th>Имя</th>
        <th>Тип</th>
        <th>Доступ</th>
      </tr>
_END;

    foreach ($methods as $method) {
      $code .= "<tr>";
      $code .= "<td><a href='#".$method->getMethodName()."' class='method'>".$method->getMethodName()."</a></td>";
      $code .= "<td>".$method->getAccessType()."</td>";
      $code .= "<td>".$method->getMethodType()."</td>";
      $code .= "</tr>";
    }

    echo $code;
    
  } else {
    echo "<h3 align='center'>Методы не объявлены</h3>";
  }
  
?>