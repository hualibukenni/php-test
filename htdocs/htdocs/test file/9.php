<?php
// for ($i=1;$i<=100;$i++){
//   echo $i;
//   echo '<br/>';
// }
// echo '<hr/>';
// for($j=1;$j<=6;$j++){
//   echo "<h{$j}>hello world</h{$j}>";
// }
echo '<table border="1" cellpadding="0" cellspacing="0" width="80%">';
  for($i=1;$i<=9;$i++){
    echo '<tr>';
      for($j=1;$j<=$i;$j++){
        echo "<td>{$j}x{$i}=".($i*$j)."</td>";
      }
    echo '</tr>';
  }
echo '</table>';
?>
