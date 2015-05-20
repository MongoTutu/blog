<?php
namespace Tutu\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function add_article(){
        $d['title'] = I('title');
        $d['content'] = $_POST['content'];
        $d['tags'] = json_encode(multi_explode(array(',','，'),I('tags')));
        $d['description'] = I('description');
        $d['time'] = time();
        $res = M('article')->data($d)->add();
        if($res){
            $r = D('Tags')->set_tags(I('tags'),$res);
            $this->success('提交成功!');
        }else{
            $this->error('Error!!');
        }
    }

}
