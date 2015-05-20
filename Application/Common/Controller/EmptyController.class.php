<?php
namespace Common\Controller;
use Think\Controller;
class EmptyController extends Controller{
    public function index(){
        echo '404';
    }

    public function _empty(){
        echo '404';
    }
}
