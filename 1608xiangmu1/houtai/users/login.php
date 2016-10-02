<?php
//开启session回话
session_start();
header('content-type:text/html;charset=utf-8');
		$username = $_POST['username'];
		$pass = $_POST['pass'];	
		$state = 0;
		//echo $username;
		//echo $pass;
		//die();
		//$sex = ["0"=>"男"'1'=>"女",];
		//1.导入配置文件
		require("../public/config.php");
		//2.链接数据库处理判断
		$link = mysqli_connect(HOST,USER,PASS,DBNAME);
		//3.设置字符集编码
		mysqli_set_charset($link,"utf8");
		//4.定义sql语句发送并执行
		$sql = "select * from users where username = '{$username}'";
		//echo $sql;
		//echo "用户名不存在";
		//die();
		$result = mysqli_query($link,$sql);
		//后台的登录注册 自己完成。		
		while($row = mysqli_fetch_assoc($result)){       
            //echo "<td>{$row['id']}</td>";
            //echo "<td>{$row['name']}</td>";
            //echo "<td>{$row['pass']}</td>";
			//echo "{$row['state']}";
			if($row['username'] !== $username){
				echo '用户名不存在';
				die();
			}else if($row['pass'] !==$pass){	
				echo '密码错误';	
				die();
			}else if($row['state'] == $state){
				echo "权限不够，不能够登录";
				die();
			}else{	
				//echo '登录成功';
				//将成功登陆的用户信息写入session
				$_SESSION['adminuser'] = $username;
				$_SESSION['state'] = 1;
				//echo $_SESSION['adminuser'];	
			}           
        }
	/*
		//校验验证码
		if($_POST['ucode'] != $_SESSION['code']){
			echo "验证码错误";
			die();
			//header('Location:login.php?errno=1');
			
		}
	*/
		//登录成功！
		header('Location:../index1.php');
?>