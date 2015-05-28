<?php

include './Lib/phpQuery.php';
$list = phpQuery::newDocumentFile('http://blog.lc/p/18.html');
$com = pq($list)->find('a');

foreach($com as $v){
    echo pq($v)->attr('href')."<br>";
}
