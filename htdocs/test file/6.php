<?php
header('content-type:text/html;charset:8');
$number=$_REQUEST['number'];
// echo $number;
if($number%2 == 0){
  echo '输入的数字为'.$number.' 是偶数';
}else{
  echo '输入的数字为'.$number.'是奇数';
}
 ?>
