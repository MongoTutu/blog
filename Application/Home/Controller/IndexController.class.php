<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $d = D('Common/article')->get_article_list();
        $this->article = $d;
        $this->display();
    }

    public function detail(){
        $id = I('id');
        $d = M('article')->where(array('id'=>$id))->find();
        $this->art = $d;
        $this->display();
    }

    public function get_tags(){
        $tag = I('tag');
        $aids = M('article_tags')->where(array('tag_name'=>$tag))->field('article_id')->select();
        foreach($aids as $k=>$v){
            $aid[] = $v['article_id'];
        }
        $this->article = M('article')->where(array('id'=>array('in',$aid)))->select();
        $this->display('index');
    }

    public function _empty(){
        echo '404';
    }

}
