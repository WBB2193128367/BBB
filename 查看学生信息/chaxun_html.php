<!doctype html>
<html>
<head>
<link rel=stylesheet type="text/css" href="./chaxun_html.css" >
<meta charset="utf-8">
</head>
<body>
<form action='./sousuo.php' method="post">
<input type='text' name='neirong' value='请输入学号' ><input type='submit' name='sousuo' value='搜索'>
</form>
<p  align=center>学生成绩表</p>
<table border="1"   background="../time.jpg" align=center width="1100px" height="210px" class="m">
<tr><th>学号</th><th>姓名</th><th>性别</th><th>班级</th><th>专业</th><th>高等数学</th><th>数据结构</th><th>操作系统</th><th>操作</th></tr>
<?php foreach($emp_info as $v) { ?>
<tr>
<td><?php  echo $v[0]; ?></td>
<td><?php  echo $v[1]; ?></td>
<td><?php  echo $v[2]; ?></td>
<td><?php  echo $v[3]; ?></td>
<td><?php  echo $v[4]; ?></td>
<td><?php  echo $v[5]; ?></td>
<td><?php  echo $v[6]; ?></td>
<td><?php  echo $v[7]; ?></td>
<td>&nbsp;<a href="<?php echo './update.php?xuehao='.$v[0] ?>">修改</a>&nbsp;<a href="<?php echo './delete.php?xuehao='.$v[0] ?>"  onclick="return confirm('确认删除吗？');">删除</a></td>
</tr>
<?php    }   ?>
</table>
<div class="n" align=center> 
    <a href="?pageNum=1">首页</a>
    <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>">上一页</a>
    <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
    <a href="?pageNum=<?php echo $endPage?>">尾页</a>
</div>

</body>
</html>