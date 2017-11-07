<?php

/*
菜鸟：LXW
时间：2017年7月7日
*/
header("content-type:text/html;charset=utf-8");

if (isset($_POST['submit'])){
	$username=trim($_POST['username']);
	$passwd=trim($_POST['password']);
	$email=trim($_POST['email']);
	$code=md5(time()+mt_rand(1,100000));
	include 'inc.php';
	$query="insert into admin(username,password,email,code)
			values('$username','$passwd','$email','$code')";
	$result=mysqli_query($stu,$query);
	if($result && mysqli_insert_id($stu)){
		echo "注册成功!,激活邮件已发送至{$email}!";
		include 'Smtp.class.php';
		$smtpserver = "smtp.sina.com";//SMTP服务器
		$smtpserverport =25;//SMTP服务器端口
		$smtpusermail = "hqy15600612050@sina.com";//SMTP服务器的用户邮箱
		//$smtpemailto = '20472024@qq.com';//发送给谁
		$smtpemailto = $email;
		$smtpuser = "hqy15600612050";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
		$smtppass = "hqy1206707209";//SMTP服务器的用户密码
		$mailtitle = '注册成功!';//主题
		$mailcontent = "请点击该链接,以激活注册账号{$username},<a href='http://localhost/studyPHP/student/1/active.php?code={$code}'>激活链接</a>";//内容
		$mailtype = "HTML";//格式（HTML/TXT）,TXT为文本邮件
		//************************ 配置信息 ****************************
		$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
		
		$smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
		
		
		
	}
}