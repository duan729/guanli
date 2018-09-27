<?php
include "conn.php";
$sql = "select * from student ";
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
			      <th>id</th>
			      <th>学号</th>
			      <th>班号</th>
			      <th>照片</th>
			      <th>姓名</th>
			      <th>性别</th>		
			      <th>出生日期</th>
			      <th>电话</th>
			    </tr>
			  </thead>
			  <tbody id="studentlist">
			  </tbody>				
			</table>
		  </div>
		</div>		
	</div>
</body>
</html>
<?php include "foot.php"; ?>
<script type="text/javascript">
		$.ajax({
			url:"api.php",
			type:"POST",
			dataType:"JSON",
			data:{
				"action":"student"
			},
			beforeSend:function(XMLHttpRequest){
				$("#studentlist").html("<tr><td>正在查询 请稍后...</td></tr>");
				// console.log( this );
			},
			success:function(data,textStatus){
				console.log(data.data);
				if (data.code==200 ) {
					$("#studentlist").empty();
					for (var i = 0; i < data.data.length; i++) {
						$trs=$("<tr></tr>");
						for(var j in data.data[i]){
							$tds=$("<td>"+data.data[i][j]+"</td>");
							$trs.append($tds);
						}
						$("#studentlist").append($trs);
						// console.log(data.data[i]);
					} 
				}
			},
			error:function(XMLHttpRequest,textStatus,errorThrown){
				//请求失败后调用此函数
				console.log('失败原因'+textStatus);
			}


		});
</script>