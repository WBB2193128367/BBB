<?php
header('content-type:text/html;charset=utf-8');
require("./functions.php");
session_start();
$user=$_POST['user'];
$pwd=$_POST['password'];
$yzm=$_POST['yanzhengma'];
$sql0="SELECT pwd FROM `yonghu` WHERE users like '$user' ";
$shuzu=zhixing($sql0);
if($shuzu[0][0]==$pwd && $user!=NULL && $pwd!=NULL && $_SESSION['yanzhengma']==$yzm){
	session_start();
	$_SESSION['userid']=$user;
    $_SESSION['username']=$pwd;
	header("Location:  ./dengluchenggong.php");
	}
else if($shuzu[0][0]==$pwd && $user!=NULL && $pwd!=NULL && $_SESSION['yanzhengma']!=$yzm){
echo"<script>alert('验证码有误！');
window.location.replace('./index.php');
</script>";
die;
}
else if($shuzu[0][0]!=$pwd && $user!=NULL && $pwd!=NULL && $_SESSION['yanzhengma']==$yzm){
echo"<script>alert('账号或密码有误！');
window.location.replace('./index.php');
</script>";
die;
}
else if($shuzu[0][0]!=$pwd && $user!=NULL && $pwd!=NULL && $_SESSION['yanzhengma']!=$yzm){
echo"<script>alert('账号或密码或验证码有误！');
window.location.replace('./index.php');
</script>";
die;
}
else if( $user==NULL ||$pwd==NULL ||$yzm==NULL ){
echo"<script>alert('不能空！');
window.location.replace('./index.php');
</script>";
die;

}

?>