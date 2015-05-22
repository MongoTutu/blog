<?php
namespace Common\Model;
use Think\Model;
class ArticleModel extends Model{

    public function get_article_list(){
        $list = $this->field('id,title,tags,time,views,description')->where(array('status'=>1))->order('id desc')->select();
        return $list;
    }

    public function get_article_detail($id){
        if(!$id) return false;
        $art = $this->where(array('id'=>$id))->find();
        return $art;
    }

    public function delete_article($id){
        if(!$id) return false;
        $res = $this->where(array('id'=>$id))->setfield('status',0);
        return $res;
    }


}
