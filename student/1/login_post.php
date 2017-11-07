<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/11 0011
 * Time: 23:14
 */
header("content-type:text/html;charset=utf-8");

if(isset ($_POST['submit'])){
    //防止注入，去掉' "  \ # %  or
    function clearCharacter($value){
        $value=str_replace("'", "", $value);
        $value=str_replace('"', "", $value);
        $value=str_replace("#", "", $value);
        $value=str_replace("or", "", $value);
        return $value;
    }

    $username=trim($_POST['username']);
    $password=trim($_POST['password']);

    $username=clearCharacter($username);
    $password=clearCharacter($password);

    include 'inc.php';
    $query= "select * from admin where username='$username'and password='$password'limit 1";
    $result= mysqli_query($stu, $query);
    if($result && mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);
        if($row['status']==2){
            echo "欢迎登陆,<a href='show.php'>进入管理</a>";
        }else {
            echo "{$row['username']}用户尚未激活，无法操作!";
        }
    }else{
        echo"用户名或密码错误,<a href='login.php'>返回</a>";
    }

}