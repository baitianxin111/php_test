<?php
// 引入一次
require_once("db.php");

$post = $_POST;
$name = $post['name'];
$age = $post['age'];
$sex = $post['sex'];
$email = $post['email'];
$password = $post['password'];
$password = md5($password);
 $insertsql = "insert into user(
                        name ,
                        age,
                        password,
                        email,
                         sex
                         ) values(
                           '{$name}',
                           '{$age}',
                           '{$sex}',
                           '{$email}',
                           '{$password}'
                         )";
echo "</br>";
echo $insertsql;
 // print_r($post);
 $result = $dbh->exec($insertsql);
 print_r($result);
 echo " 注册成功！";
foreach ($dbh->query($sql) as $row) {
  // echo "<pre>";
  echo "以下用户注册成功！";
   print_r($row['name']);
}
 ?>
