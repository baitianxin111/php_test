<?php
require_once("db.php");
$post = $_POST;
$name = $_POST['name'];
$password = $_POST['password'];

 $sql = "select * from user where name = '{$name}'";
 echo $sql;
 $select = $dbh->query($sql);
 $user = [];
  foreach ($select as $row) {
      print_r($row);
      $user = $row;
  }
 echo $user;
  if (empty($user)) {
   echo "用户不存在";
  //  echo "<a href="login1.html">返回登录</a>";
   return false;
  }
  $dbpassword = $user['password'];
if (md5($password) == $dbpassword) {
 echo "登录成功！";
 $_SESSION['name'] = $user['name'];
 $_SESSION['password'] = $user['password'];
 header("Location:index1.php");
 echo "此刻的状态".$status[$_SESSION['status']];
} else {
 echo "密码错误";
  // echo "<a href="login1.html">返回登录</a>";
}



 ?>
