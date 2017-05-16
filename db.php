<?php
// 开启会话
  session_start();
  $user = "root";
  $pass = "";
  $host = 'localhost';
  $dbname = 'fe7';
  header("Content-type: text/html; charset=utf-8");
  $utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8');

  $dbh = new PDO ('mysql:host='.$host.';dbname=fe7',$user,$pass,$utf8);
    // new PDO();
   print_r($dbh);
  //  $sql = 'SELECT * FROM user';
  //  $select = $dbh ->query ($sql );
  //  print_r($select);
  //   foreach ($dbh ->query ($sql) as $row) {
  //     print $row['name']."\t";
  //     print $row['age']."\t";
  //     print $row['sex']."\n";
  //     # code...
  //   }
 ?>
