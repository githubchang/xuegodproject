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
			$id = $_GET['id'];
			//拼装sql语句
			$sql = "delete from users where id= '{$id}'";
			mysqli_query($link,$sql);
			if(mysqli_affected_rows($link)>0){
                            //echo "删除成功！";
                        }else{
                            echo "删除失败！";
							die();
                        }
			header("Location:../main_list.php");

