<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>好</title>
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/public.css" />
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/index.css" />
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/category.css" />
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/content.css" />
</head>
<body>
	<div id="top">
		<ul>
			<?php if((Is_login($a)) == "1"): ?><li><a href="http://localhost/TP/index.php/Home/User/user_out">退出</a></li>
			<li><a href="#">智障</a></li>
			<?php else: ?>
			<li><a href="http://localhost/TP/index.php/Home/User/userlogin">登录</a></li>
			<li><a href="http://localhost/TP/index.php/Home/User/userregister">注册</a></li><?php endif; ?>
			
			
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
					<input class="text" type="text" placeholder="按时的"/> 
					<input class="submit" type="submit" value="    " />
				</form>
			</div>
		</div>
	
	</div>
	<div id="main" class="auto">
		<div id="main-left">
			<div id="left-title"><span>hahahh</span></div>
			
			<ul>
			<?php $_result=leftnav();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (CategoryURL($vo["id"])); ?>"><?php echo ($vo["category_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</ul>
		 </div>
			
		 <script>
			$(document).ready(function(){
			  $(".replybtn").click(function(){
				//alert("fuck");
				$("#textarea").focus();
			  });
			});
			function show(obj){
				obj.src="http://localhost/TP/index.php/Home/Content/verify";
			}
			$(document).ready(function(){
				$("#verify").blur(function(){
						alert($(this).val());
					  $.post("http://localhost/TP/index.php/Home/Content/check_verify",
					  {
						code:$(this).val()
					  },
					  function(data,status){
							if(data){
								alert("验证码正确");
							}
							else{
								alert("验证码错误");
							 }
					  });
				});
			});
		</script>
		 <div id="main-right">
			<div id="detail-title">
				<span><?php echo ($the_topic["title"]); ?></span>
			</div>
			<div id="detail-main">
				<div id="pic">
					<img src="images/1.jpg" width="70px",height="70px">
				</div>
				<div id="content">
					<div id="date">
						<span>来自：<a href="#"><?php echo ($the_topic["add_user"]); ?></a></span>
						<span class="sign">（别摸我好吗）</span>
						<span> </span>
						<span class="replybtn" id="reply123">回应</span>
					</div>
					<div id="article">
						<p><?php echo ($the_topic["content"]); ?> </p>
					</div>
				</div>
			</div>
			<div id="clear">
		
			</div>
			<ul class="reply">
				<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<div class="reply-pic"><img src="images/1.jpg" width="70px",height="70px"></div>
						<div class="reply-date">
							<span><a href="#"><?php echo ($vo["add_user"]); ?></a></span>
							<span class="sign">（别摸我好吗）</span>
							<span> 2015-12-10 10:27:43</span>
							<span class="replybtn">回应</span>
						</div>
						<div class="reply-article">
							
							<p><?php echo ($vo["reply_content"]); ?></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				
					
			</ul>
		
		 <div id="clear">
		
		 </div>
			<?php echo ($page); ?>
			<form class="form">
				<p class="reply">回应：</p><p class='reply-other'>&nbsp;你是猪吗是猪吗是猪吗？...   <a href='#'>傻逼</a></a></a></p>
				<textarea class="textarea" id="textarea" name="content" rows="7" cols="102"></textarea>
				<input class="text" id="verify" type="text" size="5px" name="verify"><span>验证码</span>
				<img class="vcode" src="http://localhost/TP/index.php/Home/Content/verify" onclick="show(this)" height="40" width="120" >
				<input class="submit" type="submit" value="回复" />
			</form> 
		</div>

	</div>
	<div id="clear">
		
	</div>
	<div id="floor">

	</div>
</body>
	
</html>