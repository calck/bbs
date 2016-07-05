<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
<script>
		$.validator.setDefaults({
    submitHandler: function() {
     
	  form.submit();
    }
});
$().ready(function() {
// 在键盘按下并释放及提交后验证提交表单
  $("#signupForm").validate({
	    rules: {
	     
	      username: {
	        required: true,
	        minlength: 2
	      },
	      password: {
	        required: true,
	        minlength: 5
	      },
	      confirm_password: {
	        required: true,
	        minlength: 5,
	        equalTo: "#password"
	      },
	      email: {
	        required: true,
	        email: true,
		    remote: "http://localhost/TP/index.php/Home/User/register_check"    //后台处理程序
											
	      },
		  verify: {
		    required: true,
			remote: "http://localhost/TP/index.php/Home/User/verify_check"    //后台处理程序
		  }
	    },
	    messages: {
	   
	      username: {
	        required: "请输入用户名",
	        minlength: "用户名必需由两个字母组成"
	      },
	      password: {
	        required: "请输入密码",
	        minlength: "密码长度不能小于 5 个字母"
	      },
	      confirm_password: {
	        required: "请输入密码",
	        minlength: "密码长度不能小于 5 个字母",
	        equalTo: "两次密码输入不一致"
	      },
	      email:{
			required: "请输入邮箱",
			email: "请输入一个正确的邮箱",
			remote: "邮箱已存在！"
		  },
		  verify: {
		    required: "请输入验证码",
			remote: "验证码错误" 
		  }
	    }
	});
});
</script>
<script>
	function show(obj){
		obj.src="http://localhost/TP/index.php/Home/User/get_verify";
	}
</script>
<style>
.error{
	color:red;
}
</style>
</script>
<meta charset="utf-8" />
<title>首页</title>
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/reg_log_public.css" />
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/register.css" />
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
		<span class="main-title">欢迎加入呵呵哒</span>
		<form class="form" id="signupForm" method="post" action="http://localhost/TP/index.php/Home/User/register_post">
		
		  <fieldset>
			<p class="general">
			  <label for="username">用户名&nbsp;</label>
			  <input id="username" name="username" type="text">
			</p>
			</br>
			<p class="general">
			  <label for="password">密码&nbsp;&nbsp;</label>
			  <input id="password" name="password" type="password">
			</p>
			</br>
			<p class="general">
			  <label for="confirm_password">验证密码</label>
			  <input id="confirm_password" name="confirm_password" type="password">
			</p>
			</br>
			<p class="general">
			  <label for="email">Email&nbsp;&nbsp;</label>
			  <input id="email" name="email" type="email">
			</p>
			</br>
			<p>
			  <label class="confirm">验证码&nbsp;&nbsp;<input type="text" name="verify" id="verify" size="10"></label>
		      <div class="confirm2"><img src="http://localhost/TP/index.php/Home/User/get_verify" onclick="show(this)" width="120" height="40"></div>
			</p>
			</br>
			<p>
			  <input class="submit" type="submit" value="提交">
			</p>
		  </fieldset>
		</form>
		 
	</div>
	<div id="clear">
		
	</div>
	<div id="floor">

	</div>
</body>
	
</html>