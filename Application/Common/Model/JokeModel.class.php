<?php
namespace Common\Model;
use Think\Model;
class JokeModel extends Model{

    public function add_joke($joke){
        $joke['hash'] = md5($joke['content']);
        $exsist = $this->where(array('hash'=>$joke['hash']))->find();
        if($exsist){
            return false;
        }
        $list = $this->data($joke)->add();
        return $list;
    }



}
