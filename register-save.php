<style>
	.pp{
		width: 500px;
		height: 100px;
		background-color: #f34f4fd6;
		margin: 10px auto;
		text-align: center;
		line-height: 100px;
		border-radius: 10px 10px 10px 10px;
		font-size: 35px;
		display: none;
		color: color;
	}
</style>
<?php 
	include("conn.php");
		// 邮箱
		$mali = empty($_POST['mali']) ? "null":strtolower($_POST['mali']);
		// 用户名
	    $userm = empty($_POST['userm']) ? "null":$_POST['userm'];
	    // 密码
	    $password = empty($_POST['password']) ? "null":$_POST['password'];
	    // 密码提示
	    $question = empty($_POST['question']) ? "null":$_POST['question'];
	    // 答案
	    $answer = empty($_POST['answer']) ? "null":$_POST['answer'];
	    // 选择有没有邮件名称一样的
	    $scc="select email,name,password,question,answer from user where email = '{$mali}'";
		$rcc = mysqli_query($conn,$scc);
		if (mysqli_num_rows($rcc) >=1) {
			echo "<p class='pp'>此邮件已经重复注册</p>";
			// echo "<script>$('.pp').slideDown(50);</script>";
			header("Refresh:2;url=register.php");
			// die();
		}else{
			$sql="insert into user(email,name,password,question,answer) value('$mali','$userm','$password','$question','$answer')";
			$result = mysqli_query($conn,$sql);
			if ($result) {
			echo "<p class='pp'>注册成功</p>";
			header("Refresh:2;url=login.php");
			}else{
			echo "<p class='pp'>注册失败</p>".mysqli_error($conn);
			header("Refresh:2;url=register.php");
			}
		}
	mysqli_close($conn);
	include ("04_p.style.php");
 ?>
