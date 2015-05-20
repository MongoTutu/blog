<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
    public function index(){
        echo 'empty Controller';
    }

    public function _empty(){
        echo 'empty Controller and empty action';
    }
}
