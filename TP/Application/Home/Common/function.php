<?php 
	function fuck(){
		echo "fuckyou";
	}
	function leftnav(){
		$category=D(Category);
		$where["parent_id"]=0;
		$where["category_stats"]=1;
		$left_rows=$category->where($where)->select();
		return $left_rows;
	}
	function TopicNum($id){
		$category=D(Category);
		$num=$category->getTopicNum($id);
		return $num;
	}
	function CategorySublist($id){
		$category=D(Category);
		$list=$category->getCategorySublist($id);
		return $list;
	}
	function ReplyNum($id){
		$category=D(Category);
		$reply_num=$category->getReplyNum($id);
		return $reply_num;
	}
	function CategoryURL($cid,$page){
		$config=C("TMPL_PARSE_STRING");
		$urls=$config['__PROJECT_URL__'];
		if(C("URL_MODEL")==4){
			if(!isset($page)){
			    $url=$urls."/forum-".$cid.".html"; //大板块的页面
			}
			else{
				$url=$urls."/forum-".$cid."-".$page.".html"; //小版块的页面
			}
		}
		//echo 
		return $url;
	}
	function Is_login(){
		$user=D("User");
		return $user->islogin();
		
	}
	
?>