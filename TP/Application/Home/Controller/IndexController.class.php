<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends Controller {
    public function index(){
    	//dump(session());
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	$category=D("Category");
    	if($_GET['cid']){         //获得大板块的id值，默认为1
    		$cid=$_GET['cid'];
    	}
    	else{
    		$cid=1;
    	}
    	$where['category_stats']=1;
    	$where['id']=$cid;
    	$is_small=$category->field("parent_id")->where($where)->select();
    	//var_dump($is_small);
    	if($is_small[0]['parent_id']>0){        //小版块
    		//var_dump("fuck");
    		
    		$topic=M(Topic);
    		$where_topic=array(
    			"stats"=>1,
    			"category_id"=>$cid,
    		);
    		$order_topic="top asc,last_update_time desc";
    		$list_topic=$topic->where($where_topic)->order($order_topic)->select();
    		$count=$topic->where($where_topic)->count();
    		$Page=new \Think\Page($count,10);
    		
    		$Page->setConfig('prev', '上一页');
    		$Page->setConfig('next', '下一页');
    		$Page->setConfig("theme", "%UP_PAGE%  %FIRST%  %LINK_PAGE%  %END%  %DOWN_PAGE%");
    		$show=$Page->show();
    		$list_topic=$topic->where($where_topic)->order($order_topic)->limit($Page->firstRow.','.$Page->listRows)->select();
    		$this->assign("list_topic",$list_topic);
    		$this->assign("cid",$cid);
    		$this->assign("page",$show);
    		$this->display(SubIndex);
    		
    		
    	}
    	else{    
	    	$where_category=array(
	    		"parent_id"=>0,
	    		"category_stats"=>1,
	    	);
	    	$list=$category->where($where_category)->select();
	    	$this->assign("list",$list);
	    	$this->assign("cid",$cid);
	    	$this->display();
    	}
    }
}