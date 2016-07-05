<?php
namespace  Home\Controller;
use Think\Controller;
use Behavior\WriteHtmlCacheBehavior;
	class PostTopicController extends Controller {
			
			
			public function index(){
				if(!Is_login()){
					$this->error("请先登录！");
					
				}
				else{
					$this->assign("cid",$_GET['cid']);
					$this->display();
				}
			}
			public function uploadimage(){
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
				$upload->savePath  =      ''; // 设置附件上传（子）目录
				// 上传文件
				$info   =   $upload->upload();
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功 获取上传文件信息
					foreach($info as $file){
						echo $file['savepath'].$file['savename'];
					}
				}
			}
			public function add(){
				$Topic=M("Topic");
				$user=D("User");
				$user_data=$user->userdata();
				$data=array(
					"content"=>I("content"),
			    	"title"=>I("title"),
					"add_user"=>$user_data['id'],
					"category_id"=>$_GET['cid'],
			    	"stats"=>1,
				);
				$data['add_time']=time();
				$Topic->create($data);
				
				$message="发布成功";
				
				if($Topic->add()){
					$this->success($message);
				}
				else{
				//	Log:write("用户在发表时发生了错误:".$Topic->getLastSql());
				//	echo $Topic->getLastSql();
					$this->error("操作失败,请重试");
				}
				
			}
			
		}