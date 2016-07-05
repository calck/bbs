<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>好</title>
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/public.css" />
<link rel="stylesheet" type ="text/css" href="/TP/Public/images/index.css" />
</head>
<body>
	<div id="top">
		<ul>
			<li><a href="#">的</a></li>
			<li><a href="#">的</a></li>
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
				<li><a href="#">caonimasss</a></li>
				<li><a href="#">caonimasss</a></li>
				<li><a href="#">caonimass</a></li>
				<li><a href="#">caonimass</a></li>
			</ul>
		 </div>
		 <div id="main-right">
			<div id="right-title"><span>hehehhe</span></div>
			
			<div id="right-content">
				<ul>
				<?php if(is_array($son_list)): $i = 0; $__LIST__ = $son_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="topic">
						<div class="pic"><a href="#"><img src="/TP/Public/images/1.jpg" width="70px" height="70px"></a></div>
						<div class="up"><a href="#"><span><?php echo ($vo["name"]); ?></span></a></div>
						<div class="down">共有1个话题</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<!--{$page} -->
			
				
			</div>
		 </div>
		 
	</div>
	<div id="clear">
		
	</div>
	<div id="floor">

	</div>
</body>
	
</html>