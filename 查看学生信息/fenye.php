<?php
//require("./functions.php");
function allpages(){
	 $sql="select count(*) from chengji";
	 $enp=zhixing($sql);
	 return $enp[0][0];
	  }
function fenye($pageNum = 1, $pageSize = 3){
	 $sql = "select * from chengji limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
	 $emp_info=zhixing($sql);
	 return $emp_info;
	
}	  





?>