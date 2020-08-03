<html>
<head>
<link rel=stylesheet type="text/css" href="css.css" >
</head>
<body>
<table align="center"  background="./time.jpg"  border="0" width="780px" height="730px">
<form action="./查看学生信息/charu.php" method="post" onsubmit="return confirm('确认提交吗？');">
<tr><th>学号：<input type="text" name ="xuehao"></th></tr>
<tr><th>姓名：<input type="text" name ="name"></th></tr>
<tr><th>性别：<input type="radio" name="nan" value='男' checked>男
<input type="radio" name="nan" value='女'>女</th></tr>
<tr><th>班级：<input type="text" name ="banji"></th></tr>
<tr><th>所学专业：<select name="zhuanye">
<option value="软件工程">软件工程</option>
<option value="大数据">大数据</option>
<option value="物联网工程">物联网工程</option>
<option value="计算机科学与技术" selected="selected">计算机科学与技术</option>
<option value="网络工程">网络工程</option></th></tr>
<tr><th>高等数学：<input type="text" name ="gs"></th></tr>
<tr><th>数据结构：<input type="text" name ="sjjg"></th></tr>
<tr><th>操作系统：<input type="text" name ="czxt"></th></tr>
<tr><th><input type="submit" value="提交">
<input type="reset" value="重置"></th></tr>
</form>
</table>
</body>
</html>