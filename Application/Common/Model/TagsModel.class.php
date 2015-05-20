<?php
namespace Common\Model;
use Think\Model;
class TagsModel extends Model{

    public function set_tags($tags,$aid){
        $t = multi_explode(array(',','，'),$tags);
        if(!$t) return false;
        $adds = array();
        $mt = M('tags');
        foreach($t as $k=>$v){
            $query = array('tags'=>$v);
            $exists = $mt->where($query)->field('id')->find();
            if($exists){
                $tid = $exists['id'];
            }else{
                $tid = M('tags')->data($query)->add();
            }
            $adds[] = array(
                'tag_id' => $tid,
                'article_id' => $aid,
                'tag_name' => $v
            );
        }
        $res = M('article_tags')->addAll($adds);
        return $res;
    }


}
