<?php
header('content-type:text/html;charset:utf8');
$year1=$_POST['year'];
// echo $year1;
if(($year1%4==0&&$year1%100!==0)||$year1%400==0){
  echo '您输入的'.$year1.'是闰年';
}else{
  echo '您输入的'.$year1.'不是闰年';
}
?>
