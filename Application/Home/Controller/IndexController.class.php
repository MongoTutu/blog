<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $this->redirect('/blog');
        $this->display();
    }

    public function blog(){
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
        $this->display('blog');
    }

    public function joke(){
        $p = intval(I('p')) ? intval(I('p')) : 1;
        $skip = ($p-1) * 20;
        $page['count'] = D('Common/joke')->count();
        $page['pages'] = ceil($page['count']/20);
        $page['p'] = $p;
        $this->page = $page;

        $joke = D('Common/joke')->limit($skip.",20")->select();
        $this->joke = $joke;
        $this->display();
    }

    public function share(){
        $this->display();
    }

    public function _empty(){
        echo '404';
    }

}
