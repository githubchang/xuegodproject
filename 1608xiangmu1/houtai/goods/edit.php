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
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
.main-for textarea{ width:100%; height:150px; line-height:24px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:10px; color:#666}
#addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/replayblack.jpg) no-repeat 0 0px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(images/main/replayblue.jpg) no-repeat 0 0px;}
</style>
</head>
<?php
    //获取被修改的用户信息
    $id = $_GET['id'];

    //1. 导入配置文件
    require("../public/config.php");
    //2. 获取数据库连接，并判断
    $link = @mysqli_connect(HOST,USER,PASS,DBNAME);
    if(!$link){
        die("数据库连接失败！原因：".mysqli_connect_error());
    }
    //3. 设置字符编码
    mysqli_set_charset($link,"utf8");
    //4. 定义sql语句并发送执行
    $sql = "select * from goods where id=".$id;
    $result = mysqli_query($link,$sql);
    //5. 解析并判断
    if(mysqli_num_rows($result)>0){
        $stu = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    }else{
        die("没有找到要修改的信息！");
    }
    //6. 关闭数据库连接
    //mysqli_close($link);
?>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：商品管理&nbsp;&nbsp;>&nbsp;&nbsp;修改商品</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="index.php" target="main" onFocus="this.blur()" class="add">返回上一级</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <form method="post" action="./action.php?a=doEdit" enctype="multipart/form-data">
        <!--enctype="multipart/form-data"增加该语句后稳定上传 可更换图片-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品id</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="id" value="<?php echo $stu['id'] ?>" readonly></td>
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品类别</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <select name = "typeid">
        <?php
            //require('../public/config.php');
            //$link = mysqli_connect(HOST,USER,PASS,DBNAME) or die('连接数据库失败');
            //mysqli_set_charset($link,"utf8");
            $sql = "select * from type order by concat(path,id)";
            $result = mysqli_query($link,$sql);
            while($row = mysqli_fetch_assoc($result)){ 
            $m = substr_count($row['path'],',')-1;
            $padding = str_repeat('&nbsp;',$m*4).'|--';
            $disabled = ($row['pid'] == 0) ? "disabled" : '';
            //$stu['typeid']默认值
            $addselect = ($row['id'] == $stu['typeid']) ? "selected='selected'" :'';
              echo "<option {$disabled} value='{$row['id']}' {$addselect}>";
              echo $padding.$row['name'];
              echo '</option>';
            }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
        </select>
        </td>
        </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商品名称</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="goods" value="<?php echo $stu['goods'] ?>"></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">公司</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="company" value="<?php echo $stu['company'] ?>"></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">简介</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="descr" value="<?php echo $stu['descr'] ?>"></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">价格</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="number" name="price" value="<?php echo $stu['price'] ?>"></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">图片名称</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="picname" value="<?php echo $stu['picname'] ?>">
            <img src="../public/uploads/s_<?php echo $stu['picname']?>" alt="url">
            </td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">更换图片</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="file" name="name" value=""></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">状态</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for">新添加<input type="radio" name="state" <?php echo ($stu['state']=='1')?"checked":""; ?> value="1"/> 在售<input type="radio" name="state" <?php echo ($stu['state']=='2')?"checked":""; ?> value="2"/> 下架<input type="radio" name="state" <?php echo ($stu['state']=='3')?"checked":""; ?> value="3"/>
            </td>
          </tr>


          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">商城</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="store" value="<?php echo $stu['store'] ?>"></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">数量</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="number" name="num" value="<?php echo $stu['num'] ?>"></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">点击次数</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="number" name="clicknum" value="<?php echo $stu['clicknum'] ?>" readonly></td>
          </tr>
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">添加时间</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="addtimeYmd" value="<?php $date = date('Y-m-d', $stu['addtime']);echo $date ?>" disabled><input type="hidden" name="addtime" value="<?php echo $stu['addtime']?>"></td>
          </tr>       
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
            <td align="left" valign="middle" class="borderright borderbottom main-for"><input name="" type="submit" value="确定" class="text-but"></td>
          </tr>
    </table>
    </form>
    </td>
    </tr>
</table>
</body>
</html>