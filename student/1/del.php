<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 0:16
 */
include "inc.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from stu where id=$id";
    $result = mysqli_query($stu,$query);
    if($result && mysqli_affected_rows($stu)){
        echo "<script>location.href='show.php';</script>";
    }
}