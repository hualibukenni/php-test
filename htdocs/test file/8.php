<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>数字计算器<h1>
  <form action="#" method='post'>
    num1:<input type="text" name="num1" id="">
    op: <select name="op" id="">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
          <option value="%">%</option>
        </select>
    num2:<input type="text" name="num2" id="">
    <hr />
    <input type="submit" name="act" value="计算">
  </form>
  <?php
  error_reporting(E_ALL&~E_NOTICE);
  $act=$_POST['act'];
  if($act){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $op=$_POST['op'];
    if($op=='+'){
      $res=$num1+$num2;
    }elseif($op=='-'){
      $res=$num1-$num2;
    }elseif($op=='*'){
      $res=$num1*$num2;
    }elseif($op=='/'){
      if($num2!==0){
        $res=$num1/$num2;
      }
      exit('0不能当做除数');
      // $res=$num1/$num2;
    }elseif($op=='%'){
      $res=$num1%$num2;
    }else{
      echo '非法操作<br/>';
    }

    echo "运算结果为：<br/>{$num1}{$op}{$num2}={$res}";
  }
  // $num1=$_POST['num1'];
  // $num2=$_POST['num2'];
  // $op=$_POST['op'];
  // if($op=='+'){
  //   $res=$num1+$num2;
  // }elseif($op=='-'){
  //   $res=$num1-$num2;
  // }elseif($op=='*'){
  //   $res=$num1*$num2;
  // }elseif($op=='/'){
  //   $res=$num1/$num2;
  // }elseif($op=='%'){
  //   $res=$num1%$num2;
  // }else{
  //   echo '非法操作<br/>';
  // }
  //
  // echo "运算结果为：<br/>{$num1}{$op}{$num2}={$res}";
  ?>
</body>
</html>
