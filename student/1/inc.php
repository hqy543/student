<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 0:39
 */
$stu = @mysqli_connect('localhost','root','','student');
if(!$stu){
    exit('connect error:'.mysqli_connect_error());
}
mysqli_query($stu,"set names 'utf8'");