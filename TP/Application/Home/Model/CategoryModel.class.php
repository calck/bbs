<?php
	namespace Home\Model;
	use Think\Model;
	class CategoryModel extends Model{
		public $stat=1;
		function getTopicNum($id){  //获取子板块的话题总数
			//$catgegory=M(Category);
			$topic=M(Topic);
			$where['stats']=1;
			$where['category_id']=$id;
			$num=$topic->where($where)->count();
			return $num;
			
		}
		function getReplyNum($id){   //获取主题的回复数
			$reply=M(Reply);
			$where_reply=array(
					"topic_id"=>$id,
					"stats"=>1,
			);
			$num=$reply->where($where_reply)->count();
			//$topic=M(Topic);
			//$where_topic['id']=$id;
			//$where_topic['stats']=1;
			//if($this->options["where"]){
			//	$where_topic=array_merge($this->options["where"],$where_topic);
			//}
			//$topiclist=$topic->where($where_topic)->select();
			//$rows=array(
			//		$reply_num=$count,
				//	$last_time=$topiclist['last_update_time'],
			//);
			return $num;
		}
		function getTopicReply($id,$data){       // 获取话题的回复
			$reply=M(Reply);
			$where=array(
				"topic_id" => $id,
				"stat"=>1,
			);
			if($data['order']){
				$order=$data['order'];
			}
			else{
				$order="add_time desc";
			}
// 			if($data['limit']){
// 				$limit=$data['limit'];
// 			}
// 			else {
// 				$limit=10;
// 			}
			
			$rows=$reply->where($where)->order($order)->select;
			return rows;
		}
		
	
		function getCategorySublist($id){         //获取子版块
			$category=M(Category);
			$where['parent_id']=intval($id);
			$where['category_stats']=1;
			$rows=$category->where($where)->select();
			return $rows;
			
			
		}
	}
?>