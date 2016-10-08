<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="../css/css.css" type="text/css" rel="stylesheet" />
<link href="../css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="../images/main/favicon.ico" />
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
    <td width="99%" align="left" valign="top">您的位置：商品管理</td>
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
          <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.php" target="main" onFocus="this.blur()" class="add">新增商品</a></td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">商品id</th>
        <th align="center" valign="middle" class="borderright">类型</th>
        <th align="center" valign="middle" class="borderright">商品名称</th>
        <th align="center" valign="middle" class="borderright">公司</th>
        <th align="center" valign="middle" class="borderright">简介</th>
        <th align="center" valign="middle" class="borderright">价格</th>
        <th align="center" valign="middle" class="borderright">图片名称</th>
        <th align="center" valign="middle" class="borderright">状态</th>
        <th align="center" valign="middle" class="borderright">商城</th>
        <th align="center" valign="middle" class="borderright">数量</th>
        <th align="center" valign="middle" class="borderright">点击次数</th>
        <th align="center" valign="middle" class="borderright">添加时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php
            
            //1.导入配置文件
            require("../public/config.php");
            //2.链接数据库处理判断
            $link = mysqli_connect(HOST,USER,PASS,DBNAME);
            //3.设置字符集编码
            mysqli_set_charset($link,"utf8");
            //1.每页显示多少条
            $everypage = 5;
            //2.判断当前是第几页
            $nowpage = isset($_GET['page']) ? $_GET['page'] :1;
            //3.limit从哪里开始拿
            $start = ($nowpage-1)*$everypage;
            //4.定义sql语句发送并执行
            $sql = "select * from goods limit $start,$everypage";
            //echo $sql;
            $result = mysqli_query($link,$sql);
            //var_dump($result);
            //0.定义相关量state 1：、2：在售、3：下架
            $arrstate = array('1' => '新添加','2' => '在售','3' => '下架' );
            //5.遍历结果集并输出
            while($row = mysqli_fetch_assoc($result)){  
                $date = date('Y-m-d', $row['addtime']);
                echo "<tr/>";
                echo "<td align='center'>{$row['id']}</td>";
                echo "<td align='center'>{$row['typeid']}</td>";
                echo "<td align='center'>{$row['goods']}</td>";
                echo "<td align='center'>{$row['company']}</td>";
                echo "<td align='center'>{$row['descr']}</td>";
                echo "<td align='center'>{$row['price']}</td>";
                //echo "<td align='center'>{$row['picname']}</td>";
                echo "<td align='center'><img src='../public/uploads/s_".$row['picname']."'alt='url'></td>";
                echo "<td align='center'>{$arrstate[$row['state']]}</td>";
                echo "<td align='center'>{$row['store']}</td>";
                echo "<td align='center'>{$row['num']}</td>";
                echo "<td align='center'>{$row['clicknum']}</td>";
                echo "<td align='center'>{$date}</td>";
                echo "<td align='center'><a href='./edit.php?id={$row['id']}'>修改</a>&nbsp;|&nbsp;<a href='./action.php?a=doDel&id={$row['id']}'>删除</a></td>";
                echo "<tr/>";
            }
/*
 $allpage=select count(*) from users; 查询表里有多少记录 共多少条数据

获取最大的页数 $maxpage = ceil($allpage/$everypage);
第几页   $nowpage  = isset($_GET['page']) ? $GET['page'] :1;
上一页  $nowpage -1
下一页 $nowpage +1
首页  $nowpage=1
尾页 $maxpage
*/
/*php分页*/
    $allpage1 = "select count(*) from goods";
    $allpage1 = mysqli_query($link,$allpage1);
    $allpage1 = mysqli_fetch_assoc($allpage1);
    $allpage = $allpage1["count(*)"];
    $maxpage = ceil($allpage/$everypage);
    ?>
    </table></td>
    </tr>
<!--html分页开始-->
  <tr>
    <td align="left" valign="top" class="fenye">共<?php echo $allpage; ?>条数据 <?php echo $nowpage; ?>/<?php echo $maxpage; ?> 页&nbsp;&nbsp;
    <a href="index.php?page=<?php echo 1;?>" target="main" onFocus="this.blur()">
    首页
    </a>&nbsp;&nbsp;<a href="index.php?page=<?php echo $a = $nowpage==1 ? 1:$nowpage-1;?>" target="main" onFocus="this.blur()">
    上一页
    </a>&nbsp;&nbsp;<a href="index.php?page=<?php echo $a = $nowpage==$maxpage ? $maxpage:$nowpage+1;?>" target="main" onFocus="this.blur()">
    下一页
    </a>&nbsp;&nbsp;<a href="index.php?page=<?php echo $maxpage;?>" target="main" onFocus="this.blur()">
    尾页</a></td>
  </tr>
<!--html分页结束-->
</table>
</body>
</html>