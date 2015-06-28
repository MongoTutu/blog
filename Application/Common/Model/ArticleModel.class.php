<?php
namespace Common\Model;
use Think\Model\MongoModel;
class ArticleModel extends MongoModel{

	public function get_article_list(){
		$list = $this->field('_id,title,tags,time,views,description')->where(array('status'=>1))->order('time desc')->select();
		return $list;
	}

	public function get_n_article_list(){
		$list = $this->field('_id,title,tags,time,views,description')->where(array('status'=>0))->order('time desc')->select();
		return $list;	
	}

	public function get_article_detail($id){
		if(!$id) return false;
		$art = $this->where(array('_id'=>$id))->find();
		return $art;
	}

	public function delete_article($id){
		if(!$id) return false;
		$res = $this->where(array('_id'=>$id))->setfield('status',0);
		return $res;
	}


}
