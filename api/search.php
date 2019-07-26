<?php

$FOUND=false;

if(!empty($_GET['id'])){
	$json = file("../swfData/pitcomdb.json");
	$line=json_decode($json[0],true);
	foreach($line as $k=>$v){
		if(substr($v["img"],0,1) == "9"){
			$v["img"] = substr($v["img"],1);
		}

		if($v["id"] == $_GET['id'] && strlen($_GET['id'])==6){
			$v["result"]="FOUND";
			echo "[[".json_encode($v)."],".'[{"ERROR":""},{"TOTAL":1}]]';
			$FOUND = true;
			break;
		}
	}

	if(!$FOUND){
		echo '[[],[{"ERROR":"NOTFOUND"}]]';
	}
}else if(!empty($_GET['n'])&&empty($_GET['request'])){
	$json = file("../swfData/pitcomdb.json");
	$line=json_decode($json[0],true);
	foreach($line as $k=>$v){
		if(substr($v["img"],0,1) == "9"){
			$v["img"] = substr($v["img"],1);
		}

		if($v["num"] == $_GET['n']){
			$v["result"]="FOUND";
			echo "[".json_encode($v)."]";
			$FOUND = true;
			break;
		}
	}

	if(!$FOUND){
		echo '[{"ERROR":"NOTFOUND"}]';
	}
}else if(!empty($_GET['n'])&&!empty($_GET['request'])&&!empty($_GET['base'])){
	$j = file_get_contents("../app/mid.json");
	$mid=json_decode($j[0],true);
#	$limit_num = $mid['motifWidth']*$mid['motifHeight'];

	$result = [];
	$json = file("../swfData/pitcomdb.json");
	$line=json_decode($json[0],true);
	// $lineをnumでソートする
	$ns = array_column($line,'num');
	array_multisort($ns, SORT_ASC, $line);


	$line_c = $line;

	//
	$nkey = array_search($_GET['n'], array_column($line, 'num'));
	//nより小さいnumの投稿をlaryに、大きい投稿をharyへ格納。nはlineに残す
	$lary=array_splice($line,0,$nkey);
	$hary=array_splice($line,1, count($line));

	$array = explode(",",$_GET['request']);

	$lreq = array_splice($array,0,count(array_filter($array,function($var){
		return ($var < 3) ?true:false;
	})));
	$hreq =$array;

	if(count($lary)<count($lreq)){
		$c = $line_c;
		$lary = array_merge($line_c,$lary);
	}
	$lary = array_splice($lary,count($lary)-count($lreq),count($lreq));
	if(count($hary)<count($hreq)){
		$c = $line_c;
		$hary = array_merge($hary,$line_c);
	}
	$hary = array_splice($hary,0,count($hreq));

	$array=array_merge($lary,$hary);
	$req=array_merge($lreq,$hreq);
	foreach($array as $k=>$v){
		$array[$k]["bid"] = $req[$k];
	}

	echo json_encode($array);

#	error_log($_GET['request']);
}else{
	$result = array();
	$json = file("../swfData/pitcomdb.json");
	$line=json_decode($json[0],true);
	$_GET['text'] = str_replace("@", "",$_GET['text']);
	foreach($line as $k => $v){
		if(!empty($_GET['text']) && preg_match("/".$_GET['text']."/", $v['b4']) && $v['flg'] == 1){
			array_push($result,$v);
		}
	}
	$count = count($result);

	if (count($result) > 300){
		echo '[[],[{"ERROR":"TOOMUCHRESULT"},{"TOTAL":'.$count.'}]]';
		exit;
	}
	if(!empty($_GET['page'])){
		$result = array_splice($result, ($_GET['page']-1)*5);
		$count = count($result);
		$result = array_splice($result, 0,5);
	}else{
		$_GET['page'] = 1;
		$result = array_splice($result, 0,5);
	}

	if(count($result) > 0){
		echo '['.json_encode($result).',[{"ERROR":""},{"TOTAL":'.$count.'},{"PAGE":'.$_GET['page'].'}]]';
	}else if($_GET['text'] == ''){
		echo '[[],[{"ERROR":"NOWORD"},{"TOTAL":0},{"PAGE":0}]]';
	}else{
		echo '[[],[{"ERROR":"NOTFOUND"},{"TOTAL":0},{"PAGE":0}]]';
	}
}
function array_last(array $array)
{
    return end($array);
}
function array_first(array $array)
{
    return reset($array);
}
function fil_less3($var){
	return ($var < 3) ?true:false;
}