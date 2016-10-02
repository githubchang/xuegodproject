<?php
header("content-type:text/html;charset=utf8");
	session_start();
	
	//var_dump($_SESSION);
	//echo $_SESSION['adminuser'];
	//判断是否登陆

	if(empty($_SESSION['adminuser'])){
		//没登陆 
		echo "<script>alert('请先登录!');window.location.href='../../index/login.php';</script>";
		
		exit;
	}
?>
