<?php
header('content-type:text/html;charset=utf-8');
require("./functions.php");
$user=$_POST['user'];
$password=(string)$_POST['password'];
$password1=(string)$_POST['password1'];
$sql0='select users from yonghu';

$shuzu=zhixing($sql0);
$shuzu1=array();
foreach($shuzu as $v){
	$shuzu1[]=$v[0];
}

if ($password==$password1 && in_array($user,$shuzu1,false)== False&& $user!=NUll &&$password!=NULL&&$password1!=NULL){
$link=lianjie();
$sql1="insert into  yonghu  values ('$user','$password')";
$res=mysqli_query($link,$sql1);

if(!$res){
exit(mysqli_error($link));
	
}
else
{
echo"<script>
alert('注册成功！');
window.location.replace('./index.php');
</script>";

}
}

else if ($password!=$password1){
	
echo"<script>alert('两次输入的密码不一致！');
window.history.back();
</script>";
die;
}
	

else if (in_array($user,$shuzu1,false)== true)
	{
echo"<script>alert('用户已存在！');
window.history.back();
</script>";
die;
}

else if($user==NUll ||$password==NULL||$password1==NULL)
	{
echo"<script>alert('用户名或密码不能为空！');
window.history.back();
</script>";
die;
}

?>