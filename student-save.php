<?php
/* creater db168@ 2018-09-04*/
//接收student-input.php提交过来的信息
$sID = $_REQUEST['sID'];
$sName = $_REQUEST['sName'];
$bjNumber = $_REQUEST['bjNumber'];
$sBrithday = $_REQUEST['sBrithday'];
$sSex = $_REQUEST['sSex'];
$sPhone = $_REQUEST['sPhone'];
$action = $_REQUEST['action']; //add 新增记录 update 修改记录
$id = $_REQUEST['id'];

include "conn.php";

if( $action == "add"){
	$str = "数据插入成功！";
	$str2 = "数据插入失败！";
	$url = "student-input.php";
	$sql = "insert into student(班号,学号,姓名,性别,出生日期,电话) value('{$bjNumber}','{$sID}','{$sName}',{$sSex},'{$sBrithday}','{$sPhone}')";	
}else if($action == "update"){
	//修改记录
	$str = "数据修改成功！";
	$str2 = "数据修改失败！";
	$url = "student-list.php";
	$sql = "update student set 班号='{$bjNumber}',学号='{$sID}',姓名='{$sName}',性别={$sSex},出生日期='{$sBrithday}',电话='{$sPhone}' where id={$id}";
}else{
	die("请选择操作方法"); //die() 输出提示语并终止下面的代码执行。
}
	echo $sql;
	$result = mysqli_query($conn, $sql);
	if($result){
		//echo "数据插入成功！";
		echo "<script>alert({$str});</script>";
		//页面指定2秒后跳转
		header("Refresh:1;url={$url}");
	}else{
		echo $str2.mysqli_error($conn);
	}

//4、关闭连接，释放资源
mysqli_close($conn );

?>