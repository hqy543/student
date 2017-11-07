<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 0:13
 */
header("content-type:text/html;charset=utf-8");
if(isset($_POST['submit'])){
    //获取数据
    $sno = trim($_POST['sno']);
    $sname = trim($_POST['sname']);
    $sage = trim($_POST['sage']);
    $ssex = trim($_POST['ssex']);
    $sdept = trim($_POST['sdept']);

    //连接数据库服务器，选择数据库
    include 'inc.php';
    $query = "insert into stu values(null,'$sno','$sname','$sage','$ssex','$sdept')";
    $result = mysqli_query($stu,$query);
    if($result && mysqli_insert_id($stu)){//mysqli_insert_id() 函数返回最后一个查询中自动生成的 ID
        echo "<script>alert('数据添加成功!');location.href='add.html';</script>";
    }else{
        echo "<script>alert('数据添加失败!');location.href='add.html';</script>";
    }
}