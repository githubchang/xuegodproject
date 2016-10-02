<?php
	//1.导入配置文件
	require('../public/config.php');
	$link = mysqli_connect(HOST,USER,PASS,DBNAME) or die('数据库连接失败,等待数据库连接后查询');
	mysqli_set_charset($link,"utf8");
	//要添加到数据库中的信息
	$pid = $_POST['pid'];
	$path = $_POST['path'];
	$name = $_POST['name'];
	//组合sql语句
	$sql = "insert into type(id,name,pid,path) values(null,'{$name}','{$pid}','{$path}')";
	//echo $sql;
	mysqli_query($link,$sql);
	if(mysqli_insert_id($link)>0){	
		echo "<script>alert('添加成功');window.location.href='./main_menu2.php'</script>";
	}else{	
		echo "添加失败";
		echo $sql;
	}	



