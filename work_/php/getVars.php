<?php
  
  require_once "../start.php";
  
  
  $vars = $_SESSION['currentImage']->getClass($_POST['className'])['supclass']->getVars();
  
  if (!empty($vars)) {
    
    $code .= <<< _END
      <tr>
        <th>Имя</th>
        <th>Тип</th>
        <th>Доступ</th>
      </tr>
_END;

    foreach ($vars as $var) {
      $code .= "<tr>";
      $code .= "<td>".$var->getVarName()."</td>";
      $code .= "<td>".$var->getAccessType()."</td>";
      $code .= "<td>".$var->getVarType()."</td>";
      $code .= "</tr>";
    }

    echo $code;
    
  } else {
    echo "<h3 align='center'>Свойств не объявлено</h3>";
  }
  
?>
