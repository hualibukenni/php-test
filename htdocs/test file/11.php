<?php
function sum($x,$y) {
  $sum=0;
  for($i=$x;$i<=$y;$i++){
    $sum+=$i;
  }
  echo $sum;
}
sum(0,100);
 ?>
