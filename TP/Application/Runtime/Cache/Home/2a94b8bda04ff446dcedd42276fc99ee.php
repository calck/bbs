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
				 <div id="main-right">
			<div id="right-title"><span>hehehhe</span></div>
			
			<div id="right-content">
				<ul>
				<?php $_result=CategorySublist($cid);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="topic">
						<div class="pic"><a href="#"><img src="/TP/Public/images/1.jpg" width="70px" height="70px"></a></div>
						<div class="up"><a href="<?php echo (CategoryURL($vo["id"],1)); ?>"><span><?php echo ($vo["category_title"]); ?></span></a></div>
						<div class="down">共有<?php echo (TopicNum($vo["id"])); ?>个话题</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				
			
				
			</div>
		
		 </div>
		 	
	</div>
	<div id="clear">
		
	</div>
	<div id="floor">

	</div>
</body>
	
</html>