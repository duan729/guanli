	<?php include("01_head.php"); ?>
			<form class="sui-form form-horizontal sui-validate" action="register-save.php" method="post">

				  <div class="control-group">
				    <label for="inputEmail " class="control-label .input-fat">邮箱：</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" placeholder="请输入邮箱" class="input-fat input-large" name="mali" data-rules="required|minlength=2|maxlength=30">
				    </div>
				  </div>
				  <div class="control-group">
				    <label for="userm " class="control-label .input-fat">用户名：</label>
				    <div class="controls">
				      <input type="text" id="userm" placeholder="请输入用户名" class="input-fat input-large" name="userm" data-rules="required|minlength=2|maxlength=10">
				    </div>
				  </div>

				  <div class="control-group">
				    <label for="password" class="control-label">密码：</label>
				    <div class="controls">
				      <input type="password" id="password" placeholder="请输入密码	" class="input-fat input-large" placeholder="密码" name="password" data-rules="required|minlength=2|maxlength=12">
				    </div>
				  </div>

				  <div class="control-group">
				    <label for="word" class="control-label">重复密码：</label>
				    <div class="controls">
				      <input type="password" id="word" placeholder="请输入重复密码	" class="input-fat input-large" name="word"data-rules="required|minlength=2|maxlength=12">
				    </div>
				  </div>
				<div class="control-group">
				    <label for="yzm" class="control-label">验证码：</label>
				    <div class="controls">
				      <input type="input" id="yzm" placeholder="请输入重复密码	" class="input-fat input-large" name="yzm" data-rules="required|minlength=4|maxlength=4">
				    </div>
				    
				  </div>
				  <input type="text" id="code_btn" >
				 <div class="control-group">
			    <label for="question" class="control-label">密码提示问题：</label>
			    <div class="controls">
			     <select id="question" name="question">
						<option value="你的小学在哪上学">你的小学在哪上学</option>
						<option value="你的最好朋友的姓名">你的最好朋友的姓名</option>
						<option value="你最有纪念意义的日期">你最有纪念意义的日期</option>
			     </select>
			    </div>
			  </div>
				<div class="control-group">
				    <label for="answer " class="control-label .input-fat">密码答案：</label>
				    <div class="controls">
				      <input type="text" id="answer" placeholder="请输入密码答案" class="input-fat input-large" name="answer" data-rules="required|minlength=2|maxlength=15">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label"></label>
				    <div class="controls">
				      <button type="submit" class="sui-btn btn-primary" id="cha">提交</button>
				    </div>
				  </div>
				</form>
<?php include("02_foot.php") ?>
<script>
	
var code_btn=document.getElementById('code_btn');
	getCodeFn();
	code_btn.onclick=getCodeFn;
function getCodeFn(){
	var strArry=["0","1","2","3","4","5","6","7","8","9","a","b",'c','d','e','f','h','i','g','k','l','m','m','o','p','q','r','s','t','u','v','w','x','y','z',"A","B",'C','D','E','F','G','I','G','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	var code_str="",num;
	for (var i = 0; i <4; i++) {
		num=parseInt(Math.random()*strArry.length);
		code_str+=strArry[num];
		
	}
	code_btn.value=code_str;

}	
	var cha=document.getElementById('cha');
	var yzm=document.getElementById('yzm');
	
	cha.onclick=function(){	
	var neirong=yzm.value.toUpperCase();
	var password=document.getElementById('password').value;
	var word=document.getElementById('word').value;	
		// var yzm_in=yzm.Value;
		if(neirong==code_btn.value.toUpperCase()){
			alert("验证通过");
		}else if(yzm.value.length==0){
			alert("请输入验证码");
		}else{
			alert("验证有误");
			$("form").attr("action","login.php");
			history.go(0); 
		}
		if (password==word){
			alert("密码一致通过");
		}else{
			alert("密码不一致");
			$("form").attr("action","login.php");
			history.go(0);
		}
	}
	
	


</script>
</script>
