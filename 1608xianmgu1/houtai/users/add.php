<?php
header('content-type:text/html;charset=utf-8');
			//用户信息的添加
			//1.导入配置文件
			require("../public/config.php");
			//2.链接数据库处理判断
			$link = mysqli_connect(HOST,USER,PASS,DBNAME);
			//3.设置字符集编码
			mysqli_set_charset($link,"utf8");
			//获取要添加的信息
			$username = $_POST['username'];
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			$sex = $_POST['sex'];
			$address = $_POST['address'];
			$code = $_POST['code'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$addtime = time();
			//echo $email;
			//die();
				//拼装sql语句
				$sql = "insert into users(username,name,pass,sex,address,code,phone,email,addtime) values('{$username}','{$name}','{$pass}','{$sex}','{$address}','{$code}','{$phone}','{$email}','{$addtime}')";
				//5.执行添加
				mysqli_query($link,$sql);
				//根据id是否增加来判断是否添加成功
				if(mysqli_insert_id($link)>0){	
					//$a = mysqli_insert_id($link);
					//echo "$a";
					//echo "注册成功";
				}else{	
					echo "注册失败,原因是:".mysqli_error($link);
					die();
				}
				header("Location:../../index/login.php");