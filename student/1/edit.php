<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 0:18
 */
include 'inc.php';
$id= $_GET['id'];
$query = "select * from stu where id=$id";
$result = mysqli_query($stu,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示需要修改数据</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div style="margin:50px 200px;"class="panel panel-default">
    <div class="panel-heading">用户修改</div>
    <div class="panel-body">
        <form action="edit_post.php" method="post" class="form">
            <div class="input-group">
                <label class="input-group-addon glyphicon glyphicon-credit-card"></label>                <input type="text" name="sno" value="<?php echo $row['sno']; ?>"class="form-control" placeholder="学号">
                <input type="hidden" name="s_id" value="<?php echo $row['id'];?>">
            </div>
            <div class="input-group">
                <label class="input-group-addon glyphicon glyphicon-user"></label>
                <input type="text" name="sname" value="<?php echo $row['sname']; ?>" class="form-control" placeholder="姓名">
            </div>

            <div class="input-group">
                <label class="input-group-addon glyphicon glyphicon-grain"></label>
                <input type="text" name="sage" value="<?php echo $row['sage']; ?>" class="form-control" placeholder="年龄">
            </div>
            <div class="form-group">
                <label class="control-label">性别</label>
                <input type="radio" name="ssex" value="男">男&nbsp;
                <input type="radio" name="ssex" value="女">女
            </div>
            <div class="form-group">
                <label class="control-label">院系</label>
                <select name="sdept" class="form-control">
                    <option value="软件院">软件院</option>
                    <option value="经管院">经管院</option>
                    <option value="国土院">国土院</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="保存数据" class="btn btn-info btn-sm form-control">
            </div>
        </form>
    </div>
</div>

</body>
</html>