<!doctype html>
<html>
<head>
<link rel=stylesheet type="text/css" href="update_html.css" >
<meta charset="utf-8">
</head>
<body>
<table  align="center"  background="../time.jpg"  border="0" width="780px" height="730px">
<form method="post" onsubmit="return confirm('确认修改吗？');">
<?php 
$b=(integer)($_GET['xuehao']);
$zhi=mysqli_query($link,"select * from chengji where num=$b");
$emp_info=array();
while($row=mysqli_fetch_row($zhi)){
$emp_info[]=$row;}
foreach($emp_info as $v):
?>

<tr><th>学号:<input type="text" name="xuehao" value=<?php echo $v[0]; ?> /></th></tr><br/>
<tr><th>姓名:<input type="text" name="name"   value=<?php echo $v[1]; ?> /></th></tr><br/>
<tr><th>性别：<input type="radio" name="nan" value='男' checked>男
<input type="radio" name="nan" value='女'>女</th></tr>
<tr><th>班级:  <input type="text"  name="banji" value=<?php echo $v[3]; ?>></th></tr><br/>
<tr><th>所学专业：<select name="zhuanye">
<option value="软件工程">软件工程</option>
<option value="大数据">大数据</option>
<option value="物联网工程">物联网工程</option>
<option value="计算机科学与技术" selected="selected">计算机科学与技术</option>
<option value="网络工程">网络工程</option></th></tr>
<tr><th>高等数学：<input type="text" name ="gs" value=<?php echo $v[5]; ?>></th></tr>
<tr><th>数据结构：<input type="text" name ="sjjg" value=<?php echo $v[6]; ?>></th></tr>
<tr><th>操作系统：<input type="text" name ="czxt" value=<?php echo $v[7]; ?>></th></tr>
<?php endforeach; ?>
<tr><th><input type="submit"  value="确认修改"/></th></tr><br/>
</form>
</table>
</body>
</html>