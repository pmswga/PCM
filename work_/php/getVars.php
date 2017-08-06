<?php
  
  require_once "../start.php";
  
  
  $vars = $_SESSION['currentImage']->getClass($_POST['className'])['supclass']->getVars();
   
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
    $code .= "<td></td>";
    $code .= "<td></td>";
    $code .= "</tr>";
  }

  echo $code;
  
?>