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
		// dump($d);die;
		$this->article = $d;
		$this->display();
	}

	public function detail(){
		$id = I('id');
		$d = D('Common/Article')->where(array('_id'=>$id))->find();
		$this->art = $d;
		$this->display();
	}

	public function get_tags(){
		$tag = I('tag');
		$this->article = D('Common/Article')->where(array('tags'=>$tag))->select();
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
