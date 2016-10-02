<?php
	//1.导入配置文件
	require('../public/config.php');
	$link = mysqli_connect(HOST,USER,PASS,DBNAME) or die('数据库连接失败,等待数据库连接后查询');
	mysqli_set_charset($link,"utf8");
	$id = $_GET['id'];
	$sql1 ="SELECT `pid` FROM `type` WHERE `pid`=$id";
	$res = mysqli_query($link,$sql1);
	$row = mysqli_fetch_assoc($res);
	//核心语句判断
	if($row['pid']==NULL){
		$sql = "DELETE FROM `type` WHERE `id`=$id";
		mysqli_query($link,$sql);
		if(mysqli_affected_rows($link)>0){
			echo "<script>alert('删除成功');window.location.href='./main_menu2.php'</script>";
		}
	}else{
		echo '无法删除';
		echo "<script>alert('无法删除');window.location.href='./main_menu2.php'</script>";
	}
	



