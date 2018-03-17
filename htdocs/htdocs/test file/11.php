<?php
// function sum($x,$y) {
//   $sum=0;
//   for($i=$x;$i<=$y;$i++){
//     $sum+=$i;
//   }
//   echo $sum;
// }
// sum(0,100);
// $say = function($str) {
//   echo $str;
// };
// $say('hello world!');
$arr = [4,9,8,6,7,3,2,1];
function bullingSort($arr){
  $checkPoint = 0;
  while(true){
    $swapCount = check($arr,$checkPoint);
    $checkPoint++;
    if ($swapCount <= 0){
      return $arr;
    }
  }
}
function check(&$arr,$checkPoint) {
  $swapCount = 0;
  for($i = count($arr) -1;$i > $checkPoint;$i--) {
    if ($arr[$i] < $arr[$i - 1]){
      swap($arr,$i);
      $swapCount++;
    }
  }
  return $swapCount;
}

function swap(&$arr,$i){
  $tmp = $arr[$i];
  $arr[$i] =$arr[$i - 1];
  $arr[$i - 1] = $tmp;
}

print_r(bullingSort($arr));
 ?>
