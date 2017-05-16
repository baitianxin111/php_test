<?php
 

  $post = $_POST;
  $name = $_POST['name'];
  $password = $_POST['password'];

  // echo $pwd;
  // var reg1 = /^1[3458]\d{9}$/g;
  // var reg2 = /^\w+@\w+\.[a-z]{2,4}$/;
  // var reg3 = /\w{8,10}/g;
  $reg1 = '/^1[3458]\d{9}$/';
  $reg2 = "/^\w+@\w+\.[a-z]{2,4}$/";
  $reg3 = "/\w{8,10}/";
  if(isset($_POST['tar'])){
    if(isset($name)){
      if (preg_match($reg1, $name, $matches, PREG_OFFSET_CAPTURE)||preg_match($reg2, $name, $matches, PREG_OFFSET_CAPTURE) ) {
        // print_r($matches);
      // echo "前端5期欢迎你";
          if($name==13600000000)
          {
            echo "用户名存在";
          }else{
            echo "用户名不存在";
          }

    }
      else {
        echo "用户账号不合法";
      }

    }
      if(isset($password)){
        if(preg_match($reg3,$password, $matches, PREG_OFFSET_CAPTURE)){

          if ( $password=='abcd2345') {
            echo "密码存在";
          }
          else {
             echo "密码不存在";
          }
        }
        else {
          echo "密码必须为8-12位数字，字母组合";
        }

          }

  }
  else {
    if($name =='13600000000' && $password == 'abcd2345')
        echo "前端5 期欢迎你";
  }



 ?>
