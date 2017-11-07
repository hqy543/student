<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7 0007
 * Time: 0:40
 */
header("content-type:text/html;charset=utf-8");
include 'inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示数据</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
        function cfm(){
            if(confirm('您确定删除?')){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<body>
<a style="margin:20px 30px;" href="add.html" class="btn btn-success btn-sm">添加数据</a>
<table class="table table-bordered table-hover" style="margin:0px 30px;">
    <tr style="background: #369;color:#fff;">
        <th>学号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>院系</th>
        <th>操作</th>
    </tr>
    <?php
    $query = "select * from stu";
    $result = @mysqli_query($stu,$query) or exit(mysqli_error());
    while($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?php echo $row['sno']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['sage']; ?></td>
            <td><?php echo $row['ssex']; ?></td>
            <td><?php echo $row['sdept']; ?></td>
            <td><a href="del.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-xs" onclick="return cfm()">删除</a>
                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-xs">修改</a>

            </td>
        </tr>
        <?php
    endwhile;
    mysqli_free_result($result);
    mysqli_close($stu);
    ?>
</table>
</body>
</html>