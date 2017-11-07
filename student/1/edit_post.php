<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 0:24
 */
header("content-type:text/html;charset=utf-8");
if(isset($_POST['submit'])){
    //获取数据
    $sno = trim($_POST['sno']);
    $sname = trim($_POST['sname']);
    $sage = trim($_POST['sage']);
    $ssex = trim($_POST['ssex']);
    $sdept = trim($_POST['sdept']);
    $s_id = $_POST['s_id'];
    //连接数据库服务器，选择数据库
    include 'inc.php';
    $query = "update stu set sno='$sno',sname='$sname',sage='$sage',ssex='$ssex',sdept='$sdept' where id=$s_id";
    $result = mysqli_query($stu,$query);
    if($result){
        echo "<script>alert('数据保存完毕!');location.href='show.php';</script>";
    }else{
        echo "<script>alert('数据保存失败!');location.href='show.php';</script>";
    }
}