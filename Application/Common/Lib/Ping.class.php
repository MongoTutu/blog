<?php
namespace Common\Lib;
class Ping{
    protected $config=array(
        'IS_PING_ON'=>1,            //开启Ping 1为开启，0为不开启 默认不开启,
        'SITE_NAME'=>'',            //网站名称
        'SITE_URL'=>'',             //网站地址
        'UPDATE_URL'=>'',           //网站的基本路径，比如：我使用的是简短路由http://www.wei416978817.byethost33.com/24.html(                            网站的基本路径+文章id+后缀).
        'UPDATE_RSS_URL'=>'',       //更新的Rss地址 没有可以为空
    );
    protected $host = '';

    /**
    * 构造函数
    * @access public
    * @param string $param  初始化数据，如果在配置项中开启了Ping，并且配置了基本的配置项在使用的时候，只需要传入插入的文章的id即可($param只要传入一个id即可)，否则需要设置Ping参数信息，主要的参数如下：
    */

    public function __construct($param = null) {
        if($this->config['IS_PING_ON'] || !isset($param)){
            if(is_array(C('PING_CONFIG')) && count(C('PING_CONFIG'))){
                foreach (C('PING_CONFIG') as $k => $v) {
                    $this->config[strtolower($k)]=$v;
                }
                $this->config['update_url']=$this->config['update_url'].=$param.'.html';
            }
        }else{
             if (is_array($param)||!isset($param)) {
                $this->config['site_name']=$param['site_name'];
                $this->config['site_url']=$param['site_url'];
                $this->config['update_url']=$param['site_url'].=$param['id'].'.html';
                $this->config['update_rss_url']=$param['update_rss_url'];
            }
        }
    }

    public function google() {
        $Ping_RPC=$this->method();
        $callback = $this->_post('http://blogsearch.google.com/ping/RPC2',$Ping_RPC,1);
        return strpos($callback, "<boolean>0</boolean>") ? 1 : 0;
    }

    public function baidu() {
        $Ping_RPC=$this->method();
        $callback = $this->_post('http://ping.baidu.com/ping/RPC2',$Ping_RPC);
        return strpos($callback, "<int>0</int>") ? 1 : 0;
    }

    protected  function method(){
        $method = "
            <?xml version=\"1.0\" encoding=\"UTF-8\"?>
            <methodCall>
                <methodName>weblogUpdates.extendedPing</methodName>
                <params>
                   <param><value>{$this->config['site_name']}</value></param>
                   <param><value>{$this->config['site_url']}</value></param>
                   <param><value>{$this->config['update_url']}</value></param>
                   <param><value>{$this->config['update_rss_url']}</value></param>
                </params>
            </methodCall>";
        return $method;
    }

    /**
    * 访问网址并取得其内容
    * @param $url String 网址
    * @param $postvar Array 将该数组中的内容用POST方式传递给网址中
    * @param $type int  Ping类型
    * @return String 返回请求内容
    */
    protected  function _post($url, $postvar,$type){
        $ch = curl_init();
        switch ($type) {    //Ping类型
            case 1:
                $this->host ='Host: blogsearch.google.com';     //谷歌Ping
                break;
            default:
                $hosthost='Host: ping.baidu.com';               //百度Ping
                break;
        }
        $headers = array(
            'POST '. $url . ' HTTP/1.0
            User-Agent: request
            '.$this->host.'
            Content-Type: text/xml
            Content-Length:'.strlen($postvar)
        );

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);                                   // 设置超时限制防止死循环
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvar);

        $reponse = curl_exec($ch);
        if (curl_errno($ch))
            throw new \Exception(curl_error($ch),0);
        else
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $reponse;
    }


}
