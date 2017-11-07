<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/11 0011
 * Time: 23:05
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登陆</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/stu.js"></script>
</head>
<body>
<div style="margin:100px 350px 50px;" class="panel panel-default">
    <div class="panel-heading">用户登陆</div>
    <div class="panel-body">
        <form action="login_post.php" method="post" class="form" onsubmit="return checklogin();">
            <div class="input-group input-group-sm">
                <label class="glyphicon glyphicon-user input-group-addon" style="top:0px;"></label>
                <input type="text" name="username" id="username" class="form-control" placeholder="用户名">
            </div>
            <br>
            <div class="input-group input-group-sm">
                <label class="glyphicon glyphicon-lock input-group-addon" style="top:0px;"></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="密码">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" value="登陆" class="btn btn-primary btn-sm form-control">
            </div>
        </form>
    </div>
</div>
<div id="show" style="margin:50px 350px;display:none" class="panel panel-default">
    <div class="panel-body">
        <span id="error" style="color:red;"></span>
    </div>
</div>
</body>
</html>