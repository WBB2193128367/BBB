<?php
session_start();
if($_SESSION['userid']==NULL||$_SESSION['username']==NULL||$_SESSION['yanzhengma']==NULL)
{echo "请登录";}
?>
<?php  require("./js/登录.js"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
学生信息管理系统
</title>
</head>
<frameset rows="50,300" frameborder=1 onload="myp()">
<frame src="contents1.php" scrolling=no noresize=no>
<frameset cols="50,300" frameborder=1>
<frame src="contents.php" noresize=no scrolling=auto>
<frame  src="contents2.php" name="showframe" scrolling=auto noresize=no>
</frameset>
<noframes>您的浏览器不支持框架显示!
</noframes>
</frameset>
</html>

