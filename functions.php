<?php
function lianjie(){
static $link;
//连接数据库
$link=mysqli_connect("www.wbb.com","root","wbb091824","wbb");
if(!$link){
exit("连接数据库失败！".mysqli_connect_error());
}
//设置字符集
mysqli_set_charset($link,'utf-8');
     return $link;}

//选择数据库
//mysqli_select_db($link,'wbb');
//mysqli_query($link,"use wbb");
//准备SQl语句


function zhixing($sql)
{
$link=lianjie();
$res=mysqli_query($link,$sql);
if(!$res){
exit(mysqli_error($link));
}
$emp_info=array();
while($row=mysqli_fetch_row($res)){
$emp_info[]=$row;}

return $emp_info;
}
?>
