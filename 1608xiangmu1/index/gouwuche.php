<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="手机网" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>GSM手机_手机类型_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="view/css/member.css" rel="stylesheet" type="text/css" media="screen" />
<link href="view/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!--页面顶部-->
    <?php require_once('index-top.php');?>

<div id="nav">
    <div class="nav_m">
        <ul>
            <li><a href="#" >首页</a></li>
                        <li><a href="#"   id="navbg">GSM手机</a></li>
                        <li><a href="#"  >双模手机</a></li>

                        <li><a href="#"  >手机配件</a></li>
                        <li><a href="#"  >留言板</a></li>
                    </ul>
    </div>
    <DIV class="navr_recent" >
        <SPAN class="navr_recent_l1">　</SPAN> 
        <A onmousedown="bubble(event);" href="javascript:void(0);" name="myliulan">
        <a href="#" title="查看购物车"><a href="#" title="查看购物车">您的购物车中有 0 件商品，总计金额 ￥0.00元。</a></a></A>

        <EM>&nbsp;&nbsp;&nbsp;&nbsp;</EM> 
    </DIV>
    <div class="clear"></div>
</div>

<div class="nav_min_div" id="min_div" >
<img src="view/images/top_min.jpg"></div>

<div class="content">
    <div class="user">
        <div class="menu">当前位置: <span><a href=".">首页</a> <code>&gt;</code> 购物流程</span></div>
        <form id="formCart" name="formCart" method="post" action="flow.php">
        <div class="shop">
            <div class="linebt"><span><img src="themes/haoqugou/images/cart.jpg" align="absmiddle" />我的购物车</span><em></em></div>
            <ul class="shop_b">
                <li class="shop_num">序号</li>
                <li class="shop_pic">　</li>
                <li class="shop_name">商品名称</li>
                <li class="shop_color">颜色</li>
                <li class="shop_nu">购买数量</li>
                <li class="shop_much">本店价</li>
                <li class="shop_sum">小计</li>
                <li class="shop_oper">操作</li>
                <div class="clear"></div>
            </ul>
<?php
        //输出购物车商品$_SESSION['shoplist']
$i = 1;
foreach($_SESSION['shoplist'] as $shop){
echo <<<Eof
<ul class="ulcart">
  <li class="shop_num">{$i}</li>
  <li class="shop_pic">
    <div class="promin_mainpic">
    <div class="promin_mainpicn">
    <a href="goods.php?id=32" target="_blank"><img src="../houtai/public/uploads/s_{$shop['picname']}" border="0" title="诺基亚N85" /></a><br />
    <i></i>
    </div>
    </div>
  </li>
  <li class="shop_name">
    <a href="goods.php?id=32" target="_blank">{$shop['goods']}</a>
  </li>
  <li class="shop_color">&nbsp;</li>
  <li class="shop_nu">
    <input type="text" name="goods_number[44]" class="input_num" id="goods_number_44" value="{$shop['num']}" size="4" style="text-align:center" readonly="true" />
  </li>
  <li class="shop_much">￥{$shop['price']}元</li>
  <li class="shop_sum">￥{$shop['price']}元</li>
  <li class="shop_oper">
    <a href="javascript:if (confirm('您确实要把该商品移出购物车吗？')) location.href='./gouwuche/gouwucheaction.php?a=del&id={$shop['id']}'; " class="f6">删除</a>
  </li>
  <div class="clear"></div>
</ul>
Eof;
$i++;
}
?>
            <div class="contno">
            <span>
            购物金额小计 ￥3010.00元，比市场价 ￥3612.00元 节省了 ￥602.00元                </span>
            </div>
            <div class="shop_bot">
                <span class="left"></span>
                <span class="right">
                    <input type="hidden" name="step" value="update_cart" />
                    <input type="button" value="继续购物" class="button_shop" style="cursor:pointer" onClick="location.href='index.php';">
                    <input type="button" value="开始结算" style="cursor:pointer" class="buttonredb" onClick="if (1==0) {alert('您还没有添加商品，无法进行结算。');return;}window.location.href='flow.php?step=checkout'">
                </span>
                <span class="clear"></span>
            </div>
        </div>
        <div class="clear"></div>
        </form>
        
        
        
        
            </div>
</div>

    <!--页面底部-->
    <?php require_once('index-bottom.php');?>
</body>
</html>