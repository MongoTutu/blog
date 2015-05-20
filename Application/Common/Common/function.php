<?php

/**
 *  $delimiters = array(',',' ',':');
 */
function multi_explode($delimiters,$string){
	$str = str_replace($delimiters, '|', $string);
	$arr = explode('|', $str);
	$arr = array_map('trim', $arr); // 去空格
	$arr = array_filter($arr); //过滤为空项
	return $arr;
}

function tr_tags($json){
	$tags = json_decode($json,true);
	foreach($tags as $k=>$v){
		$str = '<a href="'.U('/tag/'.$v).'">';
		$str .= $v;
		$str .= '</a>';
		echo $str;
	}
}
