<?php
namespace Tutu\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	public function index(){
		$this->redirect('blog');
	}
	
	public function blog(){
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
		$d['tags'] = multi_explode(array(',','，'),I('tags'));
		$d['description'] = I('description');
		$d['time'] = time();
		$d['status'] = 1;
		$d['view'] = 0;
		$res = D('Common/Article')->data($d)->add();
		if($res){
			$this->success('提交成功!');
		}else{
			$this->error('Error!!');
		}
	}

	public function blog_list(){
		$arts = D('Common/article')->get_article_list();
		$this->arts = $arts;
		$this->display();
	}

	public function n_blog(){
		$arts = D('Common/article')->get_n_article_list();
		$this->arts = $arts;
		$this->display('blog_list');
	}

	public function edit_article(){
		$id = I('id');
		$res = D('Common/article')->get_article_detail($id);
		$this->art = $res;
		$this->display('blog');
	}

	public function alter_article(){
		$id = I('id');
		$d['title'] = I('title');
		$d['content'] = $_POST['content'];
		$d['tags'] = multi_explode(array(',','，'),I('tags'));
		$d['description'] = I('description');
		$d['edit_time'] = time();
		$d['status'] = 1;
		$res = D('Common/Article')->where(array('_id'=>$id))->data($d)->save();
		if($res){
			$this->success('提交成功!','blog_list');
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

	public function joke(){
		$arts = D('Common/joke')->select();
		$this->arts = $arts;
		$this->display();
		die;
		include './Lib/phpQuery.php';
		
		for($i=1;$i<40;$i++){
			$dom = \phpQuery::newDocumentFile('http://www.pengfu.com/xiaohua_'.$i.'.html');
			$com = pq($dom)->find('.contFont');
			foreach($com as $v){
				$lt['title'] = pq($v)->find('.tieTitle>a')->text();
				$lt['content'] = pq($v)->find('.imgboxBtn')->html();
				$lt['time'] = time();
				D('Common/joke')->add_joke($lt);
			}
		}
	}

	public function edit_joke(){
		$id = I('id');
		$res = D('Common/joke')->where(array('_id'=>$id))->find();
		$this->art = $res;
		$this->display();
	}

	public function alter_joke(){
		$d = I();
		$d['content'] = $_POST['content'];
		$res = D('Common/joke')->where(array('id'=>$d['id']))->data($d)->save();
		if($res){
			$this->success('Success','joke');
		}else{
			$this->error('Error');
		}
	}

	public function delete_joke(){
		$id = I('id');
	}

}
