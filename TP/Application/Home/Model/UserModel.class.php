<?php
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model{
		public function islogin(){
			$User=M("User");
			$email=cookie("usermail");
			$where["user_email"]=$email;
			$the_user=$User->where($where)->find();
			if(session("user_id")!=md5($the_user['id'].$email)){
				session("user_id",null);
				cookie("user_email",null);
				return 0;
			}
			else if(session("password")!=$the_user['password']){
				return 0;
			}
			else{
				return 1;
			}
			
			
		}
		public function userdata(){
			$User=M("User");
			$email=cookie("usermail");
			$where['user_email']=$email;
			$the_user=$User->where($where)->find();
			return $the_user;	
		}
	}
?>