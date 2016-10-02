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
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
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
#addinfo{ padding:0 0 10px 0;}
input.text-word{ width:50px; height:24px; line-height:20px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; text-align:center; color:#666}
.tda{width:100px;}
.tdb{ padding-left:20px; width:200px;}
td#xiugai{ padding:10px 0 0 0;}
td#xiugai input{ width:100px; height:40px; line-height:30px; border:none; border:1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
</style>
</head>
<body>
<?php
	require('../public/config.php');
	$link = mysqli_connect(HOST,USER,PASS,DBNAME) or die('数据库连接失败,等待数据库连接后查询');
	mysqli_set_charset($link,"utf8");
	//定义sql语句
	$sql = 'select * from type order by concat(path,id)';
	$result = mysqli_query($link,$sql);
?>
<!--main_top-->
<form method="post" action="">
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top" id="addinfo">您的位置：管理分类</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright tda">上级分类</th>
        <th align="center" valign="middle" class="borderright tda">分类树</th>
        <th align="center" valign="middle" class="borderright tda">ID</th>
        <!-- <th align="center" valign="middle" class="borderright">栏目名</th> -->
        <th align="center" valign="middle">栏目管理</th>
      </tr>
      <?php
		while($row = mysqli_fetch_assoc($result)){	
			$m = substr_count($row['path'],',')-1;
			//echo $m;
			$nbs = str_repeat('&nbsp;',$m*3).'|-';	
		
		
	?>
      <tr class="bggray">
        <td align="center" valign="middle" class="borderright borderbottom"><input type="text" name="" class="text-word" value="<?php echo $row['pid'];?>" readonly></td>
        <td align="left" valign="middle" class="borderright borderbottom tdb"><?php echo $nbs.$row['name'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['id'];?>  </td>
        <td align="center" valign="middle" class="borderbottom">
        <a href= 
    '<?php
      echo "./goods_edit.php?id={$row['id']}&name={$row['name']}";
    ?>'target="main" onFocus="this.blur()" class="add">修改</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href=
		'<?php
			echo "./goods_add2.php?pid={$row['id']}&name={$row['name']}&path={$row['path']}";
		?>' target="main" onFocus="this.blur()" class="add">添加</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href=
        '<?php
          echo "./usersactiondel.php?id={$row['id']}&path={$row['path']}";
        ?>'target="main" onFocus="this.blur()" class="add">删除</a>
        </td>
      </tr>
    <?php
		}

	?>
    </table></td>
    </tr>
</table>
</form>
</body>
</html>