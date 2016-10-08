<?php
    //1.导入配置文件
    require('../public/config.php');
    @require('../public/functions.php');//删除时出错
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
            $addtime = time();

            //4.拼装sql语句
            //echo "添加关闭";
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
            break;
        case 'doDel':
            $id = $_GET['id'];
            $sql = "DELETE FROM `goods` WHERE `id`={$id}";
            mysqli_query($link,$sql);
            //根据影响行数判断是否成功
            if(mysqli_affected_rows($link)>0){  
                //echo "成功";
            }else{  
                echo "失败,原因是:".mysqli_error($link);
                die();
            }
            header("Location:./index.php");
            break;
        case 'doEdit':
            //var_dump($_FILES);

            $res = uploadFile($_FILES['name'],$path,$list,102400);
            
            if(!$res['error']){
                $picname = $_POST['picname'];
            }elseif((!$res['error']) && ($res['error'] !== 4)){ 
                die("图片上传失败！原因".$res['info']);
            }else{
                $picname=$res['info'];
                //echo "改图功能停用查询goods/action.php?a=doEdit";
                /**/
                imageResize($picname,$path,50,50,'s_');
                imageResize($picname,$path,250,250,'m_');
                imageResize($picname,$path,520,520,'');
            }
            $id=$_POST['id']; 
            $typeid=$_POST['typeid'];
            $goods=$_POST['goods'];
            $company=$_POST['company'];
            $descr=$_POST['descr'];
            $price=$_POST['price'];
            //$picname=$_POST['picname'];
            $state=$_POST['state'];
            $store=$_POST['store'];
            $num=$_POST['num'];
            $sql = "UPDATE `goods` SET `typeid`='{$typeid}',`goods`='{$goods}',`company`='{$company}',`descr`='{$descr}',`price`='{$price}',`picname`='{$picname}',`state`='{$state}',`store`='{$store}',`num`='{$num}' WHERE `id`='{$id}'";
            //5.执行添加
            $res =mysqli_query($link,$sql);
            //根据id是否增加来判断是否添加成功
            if(mysqli_affected_rows($link)>0){
                
            }else{
                echo "修改失败！";
                die();
            }
            header("Location:./index.php");
            break;
    }
