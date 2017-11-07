<?php

/*
菜鸟：
时间：2017年7月10日
*/
header("content-type:text/html;charset=utf-8");
$code=$_GET['code'];
if(!empty($code)){
	include 'inc.php';
	$query = "select * from admin where code='$code' limit 1" ;
	$result = mysqli_query($stu,$query);
	if($result && mysqli_num_rows($result)){
		$row = mysqli_fetch_assoc($result);
		$query_update="update admin set status=2  where id={$row['id']}";
		$result_update=mysqli_query($stu,$query_update);
		if($result_update && mysqli_affected_rows($stu)){
			echo"用户激活成功,<a href='login.php'>登陆</a>";
		}

	}
}