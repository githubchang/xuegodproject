<?php
session_start();
//echo $_SESSION['adminuser'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <meta name="Generator" content="手机网" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <title>
        GSM手机_手机类型_ECSHOP演示站 - Powered by ECShop
    </title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="animated_favicon.gif" type="image/gif" />
    <link href="view/css/index.css" rel="stylesheet" type="text/css" media="screen"
    />
    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="view/js/common.js"></script>
</head>
    
<body>
    <div id="header">
        <div class="header_top">
            <div class="header_top_l">
            </div>
            <div class="header_top_m">
                <div style='float:left' id="ECS_MEMBERZONE">
                    欢迎光临本店 <?php $admin = isset($_SESSION['adminuser'])?$_SESSION['adminuser']."<a href='../houtai/users/logout.php'>退出登录</a>" : '';echo $admin;?> <a href="./login.php">会员登录</a> | <a href="./zhuce.html">免费注册</a>
                    <label id="myaccount">
                        <a href="#">
                            我的帐户
                        </a>
                    </label>
                    <label id="helpcenter">
                        <a href="#">
                            帮助中心
                        </a>
                    </label>
                </div>
                <div style='float:right'>
                    <label id="collect">
                        <a href="#">
                            加入收藏
                        </a>
                    </label>
                    <label id="sethome">
                        <a href="#" onclick="SetHome(this,window.location)">
                            设为首页
                        </a>
                    </label>
                </div>
                <div class='clear'>
                </div>
            </div>
            <div class="header_top_r">
            </div>
            <div class="clear">
            </div>
        </div>
        <div class="logo">
            <a href="#">
                <img src="view/images/logo.gif">
            </a>
        </div>
        <div class="header_intro">
            <img src="view/images/by_top.gif">
        </div>
        <div class="headerdg">
            <em>
                抢购热线（全天24小时）
            </em>
            <p>
                <img src="view/images/tel1.gif">
            </p>
        </div>
    </div>
    <div id="nav">
        <div class="nav_m">
            <ul>
                <li>
                    <a href="#">
                        首页
                    </a>
                </li>
                <li>
                    <a href="#" id="navbg">
                        GSM手机
                    </a>
                </li>
                <li>
                    <a href="#">
                        双模手机
                    </a>
                </li>
                <li>
                    <a href="#">
                        手机配件
                    </a>
                </li>
                <li>
                    <a href="#">
                        留言板
                    </a>
                </li>
            </ul>
        </div>
        <DIV class="navr_recent">
            <SPAN class="navr_recent_l1">
                　
            </SPAN>
            <A onmousedown="bubble(event);" href="javascript:void(0);" name="myliulan">
                <a href="#" title="查看购物车">
                    <a href="#" title="查看购物车">
                        您的购物车中有 0 件商品，总计金额 ￥0.00元。
                    </a>
                </a>
            </A>
            <EM>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </EM>
        </DIV>
        <div class="clear">
        </div>
    </div>
    <div class="nav_min_div" id="min_div">
        <img src="view/images/top_min.jpg">
    </div>
    <div id="body">
        <div class="body_l">
            <div class="subsearch">
                <form id="searchForm" name="searchForm" method="get" action="search.php"
                onSubmit="return checkSearchForm()">
                    <div>
                        <input name="keywords" type="text" id="keyword" value="" class="searchmobile">
                        <button class="menu_button" name="menu_button" onClick="return checkSearchForm()">
                        </button>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                < !--
                function checkSearchForm() {
                    if (document.getElementById('keyword').value) {
                        document.searchForm.submit();
                        return true;
                    } else {
                        alert("请输入搜索关键词！");
                        return false;
                    }
                }-->
            </script>
            <div class="subnav">
                <div>
                    <span class="left">
                        <center> 公  告</center>
                    </span>
                    <span class="right subnav_right">
                       
                    </span>
                </div>
            </div>            
            <div class="subnav_header">
            </div>

            <div class="subnav">
                <div>
                    <span class="left">
                        CDMA手机
                    </span>
                    <span class="right subnav_right">
                        <img src="view/images/line.gif" border="0" id="categorie_ico1">
                    </span>
                </div>
                <ul id="m1" style="display:block">
                </ul>
                <div>
                    <span class="left">
                        GSM手机
                    </span>
                    <span class="right subnav_right">
                        <img src="view/images/line.gif" border="0" id="categorie_ico2">
                    </span>
                </div>
                <ul id="m2" style="display:block">
                </ul>
                <div>
                    <span class="left">
                        3G手机
                    </span>
                    <span class="right subnav_right">
                        <img src="view/images/line.gif" border="0" id="categorie_ico3">
                    </span>
                </div>
                <ul id="m3" style="display:block">
                    <li>
                        &nbsp;
                        <a href="#">
                            iphone系列
                        </a>
                    </li>
                </ul>
                <div>
                    <span class="left">
                        双模手机
                    </span>
                    <span class="right subnav_right">
                        <img src="view/images/line.gif" border="0" id="categorie_ico4">
                    </span>
                </div>
                <ul id="m4" style="display:block">
                </ul>
            </div>
            <div class="subinfo_header">
                <div class="subinfo_header_left_top10">
                    &nbsp;
                    <a href="#">
                    </a>
                </div>
            </div>
            <div class="subinfo_body_top10">
                <ul>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/3_thumb_G_1241422082679.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    诺基亚原装58...
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥68元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/24_thumb_G_1241971981429.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    P806
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥2000元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/12_thumb_G_1241965978410.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    摩托罗拉A81...
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥983元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    诺基亚E66
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥2298元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/22_thumb_G_1241971076803.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    多普达Touc...
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥5999元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/20_thumb_G_1242106490058.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    三星BC01
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥280元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                    <li>
                        <div class="subinfo_body_top10_l">
                            <a href="#">
                                <img src="view/images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt=""
                                class="samllimg" />
                            </a>
                        </div>
                        <div class="subinfo_body_top10_r">
                            <p class="subinfo_body_top10_r_1">
                                <a href="#" title="">
                                    飞利浦9@9v
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_2">
                                <a href="#">
                                </a>
                            </p>
                            <p class="subinfo_body_top10_r_3">
                                ￥399元
                            </p>
                        </div>
                        <div class="clear">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="subinfo_footer">
            </div>
        </div>
        <div class="body_brand_r">
            <div class="menu">
                当前位置:
                <span>
                    <a href="#">
                        首页
                    </a>
                </span>
            </div>

            <div class="pagelist">
                <form method="GET" class="sort" name="listform">
                    显示方式：
                    <select name="sort" style="border:1px solid #ccc;">
                        <option value="goods_id" selected>
                            按上架时间排序
                        </option>
                        <option value="shop_price">
                            按价格排序
                        </option>
                        <option value="last_update">
                            按更新时间排序
                        </option>
                    </select>
                    <select name="order" style="border:1px solid #ccc;">
                        <option value="DESC" selected>
                            倒序
                        </option>
                        <option value="ASC">
                            正序
                        </option>
                    </select>
                    <input type="submit" name="imageField" value="Go" />
                    <input type="hidden" name="category" value="3" />
                    <input type="hidden" name="display" value="grid" id="display" />
                    <input type="hidden" name="brand" value="0" />
                    <input type="hidden" name="price_min" value="0" />
                    <input type="hidden" name="price_max" value="0" />
                    <input type="hidden" name="filter_attr" value="0" />
                    <input type="hidden" name="page" value="1" />
                </form>
            </div>
            <div class="page_header">
                <form name="selectPageForm" action="/shouji/category.php" method="get">
                    <div id="page" class="pagebar">
                        <span class="f_l f6" style="margin-right:10px;">
                            总计
                            <b>
                                12
                            </b>
                            个记录
                        </span>
                        <span class="page_now">
                            1
                        </span>
                        <a href="#">
                            [2]
                        </a>
                        <a class="next" href="#">
                            下一页
                        </a>
                    </div>
                </form>
                <script type="Text/Javascript" language="JavaScript">
                    < !--
                    function selectPage(sel) {
                        sel.form.submit();
                    }
                    //-->
                    
                </script>
            </div>
            <ul class="productlist">
                <!--php遍历商品种类-->
<?php
//1.导入配置文件
require("../houtai/public/config.php");
//2.链接数据库处理判断
$link = mysqli_connect(HOST,USER,PASS,DBNAME);
//3.设置字符集编码
mysqli_set_charset($link,"utf8");
//4.定义sql语句发送并执行
$sql = "select id,goods,picname,price from goods limit 0,3";
//echo $sql;
$result = mysqli_query($link,$sql);
//5.遍历结果集并输出
while($row = mysqli_fetch_assoc($result)){  
echo <<<Eof
    <li>
        <a href="#">
            <img src="../houtai/public/uploads/{$row['picname']}" alt="" style="width:120px"/>
        </a>
        <p class="pname">
            <a href="#" title="">
                {$row['goods']}
            </a>
        </p><form action="./gouwuche/gouwucheaction.php?a=add" method="post">
        <p class="price">
            ￥{$row['price']}元            
            <input type="hidden" name="id" value="{$row['id']}" />
            <input type="hidden" name="goods" value="{$row['goods']}" />
            <input type="hidden" name="price" value="{$row['price']}" />
            <input type="hidden" name="picname" value="{$row['picname']}" />
            <input type="submit" value="购买" />         
        </p></form>   
    </li>
Eof;
}
?>

                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="view/images/17_thumb_P_1241969394537.jpg" alt="诺基亚N85" />
                    </a>
                    <p class="pname">
                        <a href="#" title="诺基亚N85">
                            诺基亚N85 岁末狂降￥200！索尼（SONY）RDP-M5iP便携高品质时尚音箱
                        </a>
                    </p>
                    <p class="price">
                        ￥3010元
                    </p>
                </li>
            </ul>
            <div class="page_footer">
                <form name="selectPageForm" action="/shouji/category.php" method="get">
                    <div id="page" class="pagebar">
                        <span class="f_l f6" style="margin-right:10px;">
                            总计
                            <b>
                                12
                            </b>
                            个记录
                        </span>
                        <span class="page_now">
                            1
                        </span>
                        <a href="#">
                            [2]
                        </a>
                        <a class="next" href="category.php?id=3&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=goods_id&amp;order=DESC">
                            下一页
                        </a>
                    </div>
                </form>
                <script type="text/Javascript">
                    function selectPage(sel) {
                        sel.form.submit();
                    }
                </script>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    
    <!--页面底部-->
    <?php require_once('index-bottom.php');?>
</body>

</html>