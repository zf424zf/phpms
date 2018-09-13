<?php
//$str = '饭饭';
////utf8中文匹配
//$pattern = '/[\x{4e00}-\x{9fa5}]+/u';
////gbk中文匹配
////$pattern = '/[' . chr(0xb0) . '-' . chr(0xf7) . '][' . chr(0xa1) . '-' . chr(0xfe) . ']/';
//preg_match($pattern, $str, $match);
//var_dump($match);

$mobile = '13913908693';
//匹配139手机号
//$patternM = '/^139\d{8}$/';
//匹配所有手机号
$patternAM = '/^1(([3,5,8][0-9])|(4[5,7])|(7[0,6,7,8]))\d{8}$/';
preg_match($patternAM, $mobile, $matchAM);
var_dump($matchAM);
//取出img中src值
$img = '<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536130395057&di=a8e539b3c060fdf22f46f0a0562a7312&imgtype=0&src=http%3A%2F%2Fimg1.3lian.com%2Fimg013%2Fv2%2F93%2Fd%2F49.jpg"/>';
$pattern = '/<img.*?src="(.*?)".*?\/?>/i';
preg_match($pattern,$img,$matchImg);
var_dump($matchImg);