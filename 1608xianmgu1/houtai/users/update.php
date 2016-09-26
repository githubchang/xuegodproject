<?php
header('content-type:text/html;charset=utf-8');
			//用户信息的添加
			//1.导入配置文件
			require("../public/config.php");
			//2.链接数据库处理判断
			$link = mysqli_connect(HOST,USER,PASS,DBNAME);
			//3.设置字符集编码
			mysqli_set_charset($link,"utf8");
			//获取要修改的信息
			$id = $_POST['id'];
			//echo $id;
			$username = $_POST['username'];
			//echo $username;
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			$sex = $_POST['sex'];
			$address = $_POST['address'];
			$code = $_POST['code'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			//echo $email;
			//die();
				//拼装sql语句
				$sql = "update  users set username='{$username}',name='{$name}',pass='{$pass}',sex='{$sex}',address='{$address}',code='{$code}',phone='{$phone}',email='{$email}' where id = '{$id}'";
				//5.执行添加
				//echo $sql;
				$res =mysqli_query($link,$sql);
				//var_dump($res);
				//根据id是否增加来判断是否添加成功
				if(mysqli_affected_rows($link)>0){
                            //echo "修改成功！";
                        }else{
                            echo "修改失败！";
							die();
                        }
				header("Location:../main_list.php");
				


?>