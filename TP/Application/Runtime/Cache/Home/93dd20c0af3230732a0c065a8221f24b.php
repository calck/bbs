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
			<div id="right-title">
				<div id="pic">
					<img src="/TP/Public/images/1.jpg" width="70px" height="70px"/>
				</div>
				<div id="name">
					<span>我是标题</span>
				</div>
			</div>
			<div id="clear">
		
			<div>
			<div id="description" class="auto">
				<p>每年都有数以万计的旅行者在世界各地从事志愿者服务，他们参加的工作包括各种开发和保护项目，涵盖了从志愿救助加德满都街道流浪儿到统计喜马拉雅高山区濒危动物的数量等各种类别。旅行者为此将获得很棒的回报：个人成长以及更加深入地体验当地社区生活的机会，这些将赋予你的旅行更为深刻的内涵。 </p>
				
				
			</div>
			<div class="right-content auto" >
				<div>
					<div class="select">
						<span><a href="#">最热话题</a></span>
					</div>
					<div class="post">
						<span><a href="http://localhost/TP/index.php/Home/PostTopic/index/cid/<?php echo ($cid); ?>">发言+</a></span>
					</div>
				</div>
				<div id="clear"><div>
		
				
				
					<ul id="tz">
						<li class="li">
							<div class="tz-mainname">话题</div>
							<div class="tz-mainauthor">作者</div>
							<div class="tz-reply">回复</div>
							<div class="tz-date">最后回复</div>
						</li>
						<li class="li">
							<div class="tz-name"><a href="http://localhost/TP/index.php/Home/Content/index/cid/<?php echo ($cid); ?>">话题</a></div>
							<div class="tz-author"><a href="#">作者</a></div>
							<div class="tz-reply">回复</div>
							<div class="tz-date">最后回复</div>
							<div class="choice">删</div>
							<div class="choice">顶</div>
						</li>
						<?php if(is_array($list_topic)): $i = 0; $__LIST__ = $list_topic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="li">
							<div class="tz-name"><a href="http://localhost/TP/index.php/Home/Content/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></div>
							<div class="tz-author"><a href="#"><?php echo ($vo["add_user"]); ?></a></div>
							<div class="tz-reply"><?php echo (ReplyNum($vo["id"])); ?></div>
							<div class="tz-date"><?php echo ($vo["last_update_time"]); ?></div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
							
					</ul>
					
					<ul class="page">
					<?php echo ($page); ?>
						
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