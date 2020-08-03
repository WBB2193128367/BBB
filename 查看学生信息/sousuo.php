<?php
header('content-type:text/html;charset=utf-8');
require("./functions.php");
$link=lianjie();
$v=$_POST['neirong'];
if(!empty($v)){
	$sql="select * from chengji where num=$v";
$emp_info=zhixing($sql);
if(empty($emp_info)){
echo"<script>alert('该学生不存在！');
window.history.back();
</script>";
die;
}}
else{
	echo"<script>alert('不能为空！');
window.history.back();
</script>";
die;
	
}

require("./chaxun_html.php");
?>