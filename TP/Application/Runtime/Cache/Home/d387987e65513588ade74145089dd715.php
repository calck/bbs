<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
<meta charset="utf-8" />
<title>首页</title>
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/public.css" />
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/login.css" />
<script>
		function userlogin(obj){
			var url=obj.action;
			
			$.post(url,
			{
				email:$("#email").val(),
				password:$("#password").val()
			},
			function(json){
				//alert(json);
				if(json['status']){
					window.location.href="http://localhost/TP/index.php";
	
				}
				else{
					
					$("#none_info").text(json['info']).addClass("info");
					$("#password").val("").focus();
				}
				
			});
			
			return false;
		};
</script>
<style>

.info{
	font-size:20px;
	color:red;
	float:left;
	margin-left:-30px;
	
}
</style>
</head>
<body>
	<div id="top">
		<ul>
			<li><a href="http://localhost/TP/index.php/Home/User/userlogin">登录</a></li>
			<li><a href="http://localhost/TP/index.php/Home/User/userregister">注册</a></li>
		</ul>
	</div>
	<div id="nav">
		<div id="nav-main" class="auto">
			<div id="nav-logo"><img src="/TP/Public/images/logo.jpg" width="180px" height="70px" />
				
			</div>
			<ul>
				<li><a href="#">caonima</a></li>
				<li><a href="#">caonima</a></li>
				<li><a href="#">caonima</a></li>
			</ul>
			<div id="search" >
				<form>
					<input class="text" type="text" /> 
					<input class="submit" type="submit" value="    " />
				</form>
			</div>
		</div>
	
	</div>
	<div id="main" class="auto">
		<form class="form" method="post" onsubmit="return userlogin(this)" action="http://localhost/TP/index.php/Home/User/logincheck" >
			<span class="main-title">欢迎登录</span></br></br>
			<span id="none_info"></span>
			<div class="general">邮箱<input type="text" id="email" name="email"/></div>
			<div class="general">密码<input type="password" id="password" name="password"/></div>
			<div class="submit"><input type="submit" value="登录"/></div>
		</form>
		
		 
	</div>
	<div id="clear">
		
	</div>
	<div id="floor">

	</div>
</body>
	
</html>