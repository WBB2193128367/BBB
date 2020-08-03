<?php
header('content-type:text/html;charset=utf-8');
require("./functions.php");
require("./fenye.php");
@$allNum = allpages();//计算总共有多少条信息
    @$pageSize = 3; //约定没页显示几条信息
    @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
    @$endPage = ceil($allNum/$pageSize); //总页数
    @$emp_info = fenye($pageNum,$pageSize);
require("./chaxun_html.php");
?>