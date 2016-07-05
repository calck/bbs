<?php
namespace  Home\Controller;
use Think\Controller;
	class UserController extends Controller{
		protected $_validate=array(
			array('username','require','用户名至少要2个字符',1,"2,20"),
			array('email','email',1,'请输入正确邮箱地址'),
			array('password','require','密码至少要5个字符',1,"5,20"),
			array('confirm_password','password','密码确认不一致',0,'confirm'),
			array('verify','require',"验证码必须！"),	
		);
		public function userlogin(){
		
			$this->display();
			
		}
		public function logincheck(){
			$user=M("User");
			$where["user_email"]=I('email');
			$the_user=$user->where($where)->find();
			//$the_user['password'];
			if(!I('email')){
				$data["info"]="邮箱不能为空！";
				
			}
			else if($the_user['password']!=md5(I('password'))){
				$data["info"]="邮箱或者密码错误！";
			}
			else{
				session("user_id",md5($the_user['id'].I("email")));
				session("password",md5($_POST["password"]));
				cookie("usermail",$_POST['email']);
				$data["info"]="登录成功";
				$data["status"]=1;
				$data["url"]=$url;
				
			}
				$this->ajaxReturn($data);
			
		}
		public function user_out(){
			session("user_id",null);
			session("password",null);
			$this->success("您已退出！");
		}
		public function userregister(){
			
			$this->display();
			//dump(session);
		}
		public function register_check(){
 			$user=M("User");
 			$where["user_email"]=I("email");
 			$the_user=$user->where($where)->find();
  			if($the_user['id']){
  				echo "false";
  			}
  			else{		
  				echo "true";
  			}
 			
//			echo "false";
		}
		public function get_verify(){
			$Verify=new \Think\Verify();
			$Verify->fontSize = 30;
			$Verify->length = 4;
			$Verify->useNoise = false;
			$Verify->entry();
			
		}
		public function verify_check(){
			$code=I("verify");
			$verify=new \Think\Verify();
			if($verify->check($code)){
				echo "true";
			}
			else{
				echo "false";
			}
// 			echo "true";
		}
		public function register_post(){
			$User=M("User");
			$data['user_email']=I('email');
			$data['password']=md5(I('password'));
			$data['username']=I('username');
			if($User->create($data)){
				if($User->add()){
					$url=C('TMPL_PARSE_STRING');
					$this->success("注册成功！",$url['__PROJECT_URL__']);
				}
				else{
					$this->error("注册失败，请重试！");
				}
			}
			else{
				$this->error($User->getError());
			}
			
		}
	}
?>