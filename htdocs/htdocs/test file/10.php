<?php
echo '<table border="1" cellpadding="0" cellspacing="0" width="80%" align="center">';
  for($i=1;$i<=9;$i++){
    echo '<tr align="center">';
      for($j=1;$j<=$i;$j++){
        echo "<td>{$j}x{$i}=".($j*$i)."</td>";
      }
    echo '</tr>';
  }
echo '</table>';
?>
