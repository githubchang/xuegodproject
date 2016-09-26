<?php
session_start();
//验证码的绘制：

//初始化变量
$length=4;
$code = getCode($length,1); //获取随机的验证码值
$_SESSION['code'] = $code;
$width=$length*15;
$height=25;

//1. 创建键画布，准备颜色
$im = imagecreatetruecolor($width,$height); //创建一个真彩的画布
	$bg[0] = imagecolorallocate($im,220,220,220); //分配一个颜色
	$bg[1] = imagecolorallocate($im,220,175,220); //分配一个颜色
	$bg[2] = imagecolorallocate($im,191,218,135); //分配一个颜色
	$c[0] = imagecolorallocate($im,0,0,255); //分配一个颜色
	$c[1] = imagecolorallocate($im,255,0,0); //分配一个颜色
	$c[2] = imagecolorallocate($im,141,41,134); //分配一个颜色
	$c[3] = imagecolorallocate($im,27,96,21); //分配一个颜色
	$c[4] = imagecolorallocate($im,113,117,36); //分配一个颜色
	$c[5] = imagecolorallocate($im,36,108,115); //分配一个颜色

//2. 开始绘画
imagefill($im,0,0,$bg[rand(0,2)]);
//开始绘制验证码
for($i=0;$i<$length;$i++){
    imagettftext($im,13,rand(-30,30),2+$i*11,20,$c[rand(0,5)],"./msyh.ttf",$code[$i]);
}
//添加干扰点
for($i=0;$i<100;$i++){
    $cc = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($im,rand(0,$width),rand(0,$height),$cc);
}
//干扰线
for($i=0;$i<4;$i++){
    $cc = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    imageline($im,rand(0,$width),rand(0,$height),rand(0,$width),rand(0,$height),$cc);
}

//3. 输出图像
header("Content-Type:image/png");
imagepng($im);

//4. 释放资源
imagedestroy($im);


/**
 * 自定义一个随机验证码值的函数
 *@param int $length  随机验证码的个数。默认4个
 *@param int $type 验证码随机的类型：1数字（默认），2 表示小写字母加数字。3或其他表示随机大小字母加数字
 *@return string 返回对应的验证码值
 */
 function getCode($length=4,$type=1){
    $str = "0123456789acbdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $m=strlen($str)-1;
    if($type==1){
        $m=9; //随机整数	
    }elseif($type==2){
        $m=33; //随机小写字母加数字
    }
    $code=""; //定义一个存放验证码值的变量
    //开始随机
    for($i=0;$i<$length;$i++){
        $code .= $str[rand(0,$m)];
    }
    //返回结果
    return $code;
 }
