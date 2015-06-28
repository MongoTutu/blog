<?php
namespace Common\Model;
use Think\Model\MongoModel;
class TagsModel extends MongoModel{

    public function set_tags($tags,$aid){
        $t = multi_explode(array(',','，'),$tags);
        if(!$t) return false;
        $adds = array();
        $mt = M('tags');
        $at = M('article_tags');
        foreach($t as $k=>$v){
            $query = array('tags'=>$v);
            $exists = $mt->where($query)->field('id')->find();
            if($exists){
                $tid = $exists['id'];
            }else{
                $tid = M('tags')->data($query)->add();
            }
            $arr = array(
                'tag_id' => $tid,
                'article_id' => $aid,
                'tag_name' => $v
            );
            $ate = $at->where($arr)->find();
            if(!$ate) $adds[] = $arr;
        }
        $res = M('article_tags')->addAll($adds);
        return $res;
    }


}
