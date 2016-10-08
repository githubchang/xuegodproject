<?php
//购物车处理页面
session_start();
switch($_GET['a']){
case 'add'://添加购物车
//获取信息
$id = $_POST['id'];
$shop['id'] = $_POST['id'];
$shop['goods'] = $_POST['goods'];
$shop['price'] = $_POST['price'];
$shop['picname'] = $_POST['picname'];
$shop['num'] = 1;//商品默认购买数量

//判断购物车原来是否有相同商品+1，不成功则根据id创建session表
if(isset($_SESSION['shoplist'][$id])){
//将已购买商品数量加一
$_SESSION['shoplist'][$id]['num']++;
}else{
$_SESSION['shoplist'][$id] = $shop;
}
//print_r($_SESSION);
//echo '添加购物车成功！';
header('Location: ../gouwuche.php');
break;

case 'del'://从购物车中删除商品
unset($_SESSION['shoplist'][$_GET['id']]);
//echo '从购物车成功删除指定商品';
header('Location: ../gouwuche.php');
break;

case 'clear'://清空购物车
unset($_SESSION['shoplist']);
echo "购物车已清空!";
break;
}