/**
 * Created by Administrator on 2017/7/11 0011.
 */
function check(){
    //alert(1);
    var sno = document.getElementById('sno').value;
    //alert(1);
    var sname = document.getElementById('sname').value;
    //alert(1);
    var sage = document.getElementById('sage').value;
    //alert(1);
   if(sno == ""){
        alert('学号不能为空!');
        document.getElementById('sno').focus();
        return false;
    }
    if(sname == ""){
        alert('姓名不能为空!');
        document.getElementById('sname').focus();
        return false;
    }
    if(sage == ""){
        alert('年龄不能为空!');
        document.getElementById('sage').focus();
        return false;
    }
    return true;
}

function checkUser(){
    var user = document.getElementById('username').value;
    var pwd = document.getElementById('password').value;
    var cfm = document.getElementById('cfm').value;
    var email = document.getElementById('email').value;
    //判断用户名是否为空
    if(user == ""){
        alert('用户名称不能为空!');
        document.getElementById('username').focus();
        return false;
    }
    //判断密码是否为空
    if(pwd == ""){
        alert('密码不能为空!');
        document.getElementById('password').focus();
        return false;
    }
    //确认密码和密码是否相等
    if(pwd != cfm){
        alert('密码和确认密码不一致!');
        document.getElementById('cfm').focus();
        return false;
    }
    if(email == ""){
        alert('邮箱不能为空!');
        document.getElementById('email').focus();
        return false;
    }
    return true;
}

function checklogin(){
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    var str="<label class='glyphicon glyphicon-remove'></label>";
    if(user == ""){
        document.getElementById('show').style.display="block";
        document.getElementById('error').innerHTML=str+" 用户名不能为空！";
        return false;
    }

    if(pass == ""){
        document.getElementById('show').style.display="block";
        document.getElementById('error').innerHTML=str+" 密码不能为空！";
        return false;
    }
    return true;
}
