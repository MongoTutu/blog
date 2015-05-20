<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $d = M('article')->order('id desc')->limit(5)->select();
        $this->article = $d;
        $this->display();
    }

    public function detail(){
        $id = I('id');
        $d = M('article')->where(array('id'=>$id))->find();
        $this->art = $d;
        $this->display();
    }

    public function _empty(){
        echo '404';
    }

}
