<?php
namespace Tutu\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function ping_baidu(){
        $param = array('site_name'=>'个人网站','site_url'=>'wei416978817.byethost33.com/','id'=>10,'updata_rss_url'=>'');
        $ping = new \Common\Lib\Ping($param);
        if(!$ping->baidu()){
            $this->error('百度Ping失败');
        }else{
            $this->success('Ping成功');
        }
    }

    public function add_article(){
        $d['title'] = I('title');
        $d['content'] = $_POST['content'];
        $d['tags'] = json_encode(multi_explode(array(',','，'),I('tags')));
        $d['description'] = I('description');
        $d['time'] = time();
        $res = M('article')->data($d)->add();
        if($res){
            $r = D('Common/Tags')->set_tags(I('tags'),$res);
            $this->success('提交成功!');
        }else{
            $this->error('Error!!');
        }
    }

    public function article_list(){
        $arts = D('Common/article')->get_article_list();
        $this->arts = $arts;
        $this->display();
    }

    public function edit_article(){
        $id = I('id');
        $res = D('Common/article')->get_article_detail($id);
        $this->art = $res;
        $this->display('index');
    }

    public function alter_article(){
        $id = I('id');
        $d['title'] = I('title');
        $d['content'] = $_POST['content'];
        $d['tags'] = json_encode(multi_explode(array(',','，'),I('tags')));
        $d['description'] = I('description');
        $res = D('Common/article')->where(array('id'=>$id))->data($d)->save();
        if($res){
            $r = D('Common/Tags')->set_tags(I('tags'),$res);
            $this->success('提交成功!','article_list');
        }else{
            $this->error('Error!!');
        }
    }

    public function delete_article(){
        $id = I('id');
        $res = D('Common/article')->delete_article($id);
        if($res){
            $this->success('Delete article success');
        }else{
            $this->error('Error!!');
        }
    }

}
