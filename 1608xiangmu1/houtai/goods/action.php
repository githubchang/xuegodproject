<?php
    //1.导入配置文件
    require('../public/config.php');
    require('../public/functions.php');
    //2.链接数据库
    $link = mysqli_connect(HOST,USER,PASS,DBNAME);
    //3.修改字符集
    mysqli_set_charset($link,"utf8");
    $path="../public/uploads";
    $list = array('image/jpeg','image/png','image/gif','image/jpg');
    switch($_GET['a']){ 
        case 'doAdd': //添加内容
        //echo '1a';
        $res = uploadFile($_FILES['name'],$path,$list,102400);
        if(!$res['error']){ 
            die("图片上传失败！原因".$res['info']);
        }
        $picname=$res['info'];
        imageResize($picname,$path,50,50,'s_');
        imageResize($picname,$path,250,250,'m_');
        imageResize($picname,$path,520,520,'');
        $typeid = $_POST['typeid'];
        //echo $typeid;
        $goods = $_POST['goods'];
        //echo $goods;
        $company = $_POST['company'];
        $price = $_POST['price'];
        $store = $_POST['store'];
        $descr = $_POST['descr'];
        $state = 1;//状态
        $num = 0;//销售量
        $clicknum = 0;//点击量
        //$addtime = date('Y-m-d',time());//添加时间
        $addtime = time();
        //echo $addtime;
        //4.拼装sql语句
        /**/
        $sql = "insert into goods values(null,'{$typeid}','{$goods}','{$company}','{$descr}','{$price}','{$picname}','{$state}','{$store}','{$num}','{$clicknum}','{$addtime}')";
        //echo $sql;
        mysqli_query($link,$sql);
                //根据id是否增加来判断是否添加成功
                if(mysqli_insert_id($link)>0){  
                    //$a = mysqli_insert_id($link);
                    //echo "$a";
                    //echo "添加成功";
                }else{  
                    echo "添加失败,原因是:".mysqli_error($link);
                    die();
                }
                header("Location:./index.php");
    }
