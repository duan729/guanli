<?php
include "conn.php";
$sql = "select * from student";
$result = mysqli_query($conn, $sql);
?>
<?php include "head.php" ?>
		<div class="sui-layout">
		  <div class="sidebar">
<?php include "leftmenu.php" ?>	  	
		  </div>
		  <div class="content">
			<p class="sui-text-xxlarge my-padd label-success">学生信息管理</p>
			<table class="sui-table table-bordered">
			  <thead>
			    <tr>
			      <th>序号</th>
			      <th>学号</th>
			      <th>姓名</th>
			      <th>性别</th>
			      <th>生日</th>
			      <th>电话</th>		
			      <th>操作</th>
			    </tr>
			  </thead>
			  <tbody>
<!-- 			  	<tr>
	<td>1</td>
	<td>171201</td>
	<td>张三</td>
	<td>男</td>
	<td>1992-08-01</td>
	<td>13717700987</td>
	<td><a class="sui-btn btn-samll btn-warning" href="#">修改</a>&nbsp;&nbsp;<a class="sui-btn btn-samll btn-danger" href="#">删除</a></td>
</tr> -->
<?php
	if( mysqli_num_rows($result)>0 ){
		$i = 1;		
		while( $row = mysqli_fetch_assoc($result) ){
			echo "<tr>";
			echo "<td>{$i}</td>";
			echo "<td>{$row['学号']}</td>";
			echo "<td>{$row['姓名']}</td>";
			echo "<td>{$row['性别']}</td>";	
			echo "<td>{$row['出生日期']}</td>";
			echo "<td>{$row['电话']}</td>";
			echo "<td><a class='sui-btn btn-samll btn-warning' href='student-update.php?sid={$row['学号']}'>修改</a>&nbsp;&nbsp;<a class='sui-btn btn-samll btn-danger' href='student-del.php?sid={$row['学号']}'>删除</a></td>";
			echo "<tr>";
			$i++;
		}

	}else{
		echo "<tr><td>暂无学生记录</td></tr>";
	}
?>
			  </tbody>				

			</table>
		  </div>
		</div>		
	</div>
</body>
</html>
<?php include "foot.php"; ?>