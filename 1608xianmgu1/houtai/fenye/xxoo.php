<?php
//判断用户是否提交了搜素的条件
	if(isset($_GET['username'])){	
		$where = "where name like '%{$_GET['username']}%'";
		//如果用户进行了搜索那么在URL上面应该是始终有这个值的。
		//$url  ="&username={$GET['username']}";
	}else{	
		$where ='';
		$url='';
	}
	//1.每页显示多少条
	$everypage = 2;
	//2.判断当前是第几页
	$nowpage = isset($_GET['page']) ? $GET['page'] :1;
	/*
		if(isset($_GET['page'])){	
			$nowpage=1;
		}
	*/
	//3.limit从哪里开始拿
	$start = ($nowpage-1)*$everypage;
	//4.发送sql语句
	$sql = "select * from users $where limit $start,$everypage";
	//echo $sql;
	
	

	
/*
$name = $_GET['username'];
		//1.导入配置文件
		require("../public/config.php");
		//2.链接数据库处理判断
		$link = mysqli_connect(HOST,USER,PASS,DBNAME);
		//3.设置字符集编码
		mysqli_set_charset($link,"utf8");
		//4.定义sql语句发送并执行
		$sql = "select * from users where name = '{$name}'";
		$result = mysqli_query($link,$sql);		
		echo "$sql";

*/



?>