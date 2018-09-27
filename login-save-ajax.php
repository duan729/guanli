<?php 
	session_start();
	include("conn.php");
		// 邮箱
		$email = empty($_REQUEST['email']) ? "null":strtolower($_REQUEST['email']);
	    // 密码
	    $password = empty($_REQUEST['password']) ? "null":$_REQUEST['password'];
	    $responseArr =array(
	    		"code" =>200,
	    		"msg" =>"登录成功"
	    	);
	    //首先根据用户提交的邮件查询 如果至少一条记录 则邮箱正确 否则邮箱不正确
	    $sql="select id,email,name,password,question,answer from user where email = '{$email}'";
	    $result =mysqli_query($conn,$sql);
	    if (mysqli_num_rows($result)>0) {
	    	// 提示邮箱正确
	    	//如果 邮箱正确 再判断用户提交的密码和上一步查新到密码是否相等 相等则密码正确 否则密码不正确
	    	$arr =mysqli_fetch_assoc($result);
	    	if ($password ==$arr["password"]) {
	    		// 密码也对上了
	    		//创建一个session 键为usname 值为$mail
	    		$_SESSION["usemail"] =$arr["email"];
	    		$_SESSION["usname"] =$arr["name"];
	    		$_SESSION["usid"] =$arr["id"];
	    	}else{
	    		//邮箱对但密码不对
	    		$responseArr["code"] =20001;
	    		$responseArr["msg"] ="密码错误";

	    	}
	    }else{
	    	// 邮箱不存在
	    	$responseArr["code"] =20004;
	    	$responseArr["msg"] ="邮箱不存在";
	    }
		// print_r($result);
		// print_r($responseArr);
		echo json_encode($responseArr);
	mysqli_close($conn);
 ?>