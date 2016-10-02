<?php
//开启session回话
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="./users/select.php">
	         <span>管理员：</span>
	         <input type="text" name="name" value="请输入你要查询的信息" class="text-word">
	         <input name="" type="submit" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add"></a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">用户id</th>
        <th align="center" valign="middle" class="borderright">账号</th>
        <th align="center" valign="middle" class="borderright">真实姓名</th>
        <th align="center" valign="middle" class="borderright">密码</th>
        <th align="center" valign="middle" class="borderright">性别</th>
		<th align="center" valign="middle" class="borderright">地址</th>
		<th align="center" valign="middle" class="borderright">邮编</th>
		<th align="center" valign="middle" class="borderright">电话</th>
		<th align="center" valign="middle" class="borderright">Email</th>
		<th align="center" valign="middle" class="borderright">状态</th>
		<th align="center" valign="middle" class="borderright">注册时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php	
		$name = $_POST['name'];
		//echo $name;
		//die();
		//$sex = ["0"=>"男"'1'=>"女",];
		//1.导入配置文件
		require("../public/config.php");
		//2.链接数据库处理判断
		$link = mysqli_connect(HOST,USER,PASS,DBNAME);
		//3.设置字符集编码
		mysqli_set_charset($link,"utf8");
		//4.定义sql语句发送并执行
		$sql = "select * from users where name like '%{$name}%'";
		$result = mysqli_query($link,$sql);		
		while($row = mysqli_fetch_assoc($result)){       
           echo "<tr/>";
				echo "<td align='center'>{$row['id']}</td>";
				echo "<td align='center'>{$row['username']}</td>";
				echo "<td align='center'>{$row['name']}</td>";
				echo "<td align='center'>{$row['pass']}</td>";
				echo "<td align='center'>{$row['sex']}</td>";
				echo "<td align='center'>{$row['address']}</td>";
				echo "<td align='center'>{$row['code']}</td>";
				echo "<td align='center'>{$row['phone']}</td>";
				echo "<td align='center'>{$row['email']}</td>";
				echo "<td align='center'>{$row['state']}</td>";
				echo "<td align='center'>{$row['addtime']}</td>";
				echo "<td align='center'><a href=''>修改</a>&nbsp;|&nbsp;<a href=''>删除</a></td>";
				echo "<tr/>";  
        }
		?>
<!--
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">10</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
-->
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye">11 条数据 1/1 页&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
</body>
</html>




