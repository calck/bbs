<?php
		namespace Home\Controller;
		use Think\Controller;
		class ContentController extends Controller{
			function index(){
				$topic=M("Topic");
				$where_topic['id']=$_GET['id'];
				$the_topic=$topic->where($where_topic)->find();
				$reply=M("Reply");
				$where_reply['topic_id']=$_GET['id'];
				$where_reply['stats']=1;
				
				$count=$reply->where($where_reply)->count();
				$Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page->show();
				$list = $reply->where($where_reply)->order('add_time')->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign("the_topic",$the_topic);
				$this->assign("lists",$list);
				$this->assign("page",$show);
			//	dump($list);
			
				$this->display();
			}
			function verify(){
				$Verify =     new \Think\Verify();
				$Verify->fontSize = 30;
				$Verify->length   = 4;
				$Verify->useNoise = false;
				$Verify->entry();
			}
			function check_verify($code,$id=""){
				
//				$id = '';
	   			 $verify = new \Think\Verify();
	   			 echo $verify->check($code, $id);
	   			
	   			
			}
			function add(){
				$reply=M("Reply");
				$user=D("User");
				$user_data=$user->userdata();
				
				$data=array(
					"reply_content"=>I("content"),
					"add_user"=>$user_data['id'],
					"topic_id"=>$_GET['id'],
					"stats"=>1,
				
				);
				$data[add_time]=time();
				$reply->create($data);
				if($reply->add()){
					$this->success("回复成功！");
				}
				else{
					$this->error("回复失败，请重试！");
				}
			}
		}	