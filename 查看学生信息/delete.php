<?php
header('content-type:text/html;charset=utf-8');
require("./functions1.php");
$link=lianjie();
$b=(integer)($_GET['xuehao']);
$sql="delete from chengji where num=$b";
$res=mysqli_query($link,$sql);
if(!$res){
exit(mysqli_error($link));}
else{
echo"<script>alert('删除成功！');
window.location.replace('../contents2.php');
</script>";
}

?>