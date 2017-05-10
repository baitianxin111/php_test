<?php
	// require_once("db.php");
	$name =$_POST['name'] ;
	$pwd =  $_POST['password'];
	echo "$name";
	echo "$pwd";

			if ($name=="18819132990") {
				 echo "该用户已经存在！";
			}
			if ($name=="123456") {
				 echo "非法用户！";
			}
			if(empty($name)){
				 echo "用户名不存在";
				//  echo "<a href='login.html'>返回登录</a>";
				 return false;
			}

			echo "<pre>";





	// if ($name==" ") {
	// 	echo "该用户已经存在";
	// 	// $login_info = "</br>恭喜".$name."用户登录成功！";
	// 	// echo $login_info;
	// 	# code...
	// }
	// $insertsql = "insert into user (
	//             name,
	//
	//             password,
	//
	//     ) values (
	//             '{$name}',
	//
	//             '{$password}',
	//
	//         )";
	// 调试方法：把这个sql语句打印出来在Navicat里面的查询编辑里
	// 面执行这个sql语句看看有没有报错，如果报错了根据错误去排查。
	// echo $insertsql;
	// $result = $dbh->exec($insertsql);
	// print_r($result);
	// echo "注册成功";
	// print_r($post);
	//
	// $sql = 'SELECT * FROM user';// sql 语句 查
	// // $select = $dbh->query($sql); //pdo查询语法
	//    foreach ($dbh->query($sql) as $row) {
	//        echo "<pre>";
	//        echo "以下用户注册成功！";
	//        print_r($row['name']);
	//
	//    }

	   // 内网： 192.168.30.110


?>
