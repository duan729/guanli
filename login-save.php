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
	    // 密码
	    $password = empty($_POST['password']) ? "null":$_POST['password'];

	    $sql="select email,name,password,question,answer from user where email = '{$mali}' and password='{$password}'";
		$rcc = mysqli_query($conn,$sql);
		if (mysqli_num_rows($rcc) >=1) {
			echo "<p class='pp'>登录成功</p><script>document.cookie='usname={$mali}';</script>";
			header("Refresh:1;url=index.php");
		}else{
			echo "<p class='pp'>登录失败</p>".mysqli_error($conn);
			header("Refresh:1;url=login.php");
		}
	mysqli_close($conn);
	include ("04_p.style.php");
 ?>
