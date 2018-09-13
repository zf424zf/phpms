<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9 0009
 * Time: 下午 11:39
 */
$str = 'now i am pig';
$str_small = "i am";
$str_copy = ' i am hungry ';
$arr = ['sun','jing','is','pig'];
$text =  "\t\tThese are a few words :) ...  ";
$name = "O'fuck";
$cn_str = "孙菁 大笨蛋";
//echo strrev($str);//字符串反转
//echo $str_arr = implode($arr,'-');//数组转换成字符串，利用第二个参数连接
//var_dump(explode(' ',$str_copy));//字符串打散为数组
//echo join('-',$arr);//join等同于implode
//echo trim($text);
//echo strstr($str,$str_small,true);
//返回str字符串从str_small第一次出现的位置开始到结尾的字符串
//第三个参数默认为false，若为true 则返回第一次出现位置之前的字符串
//echo ucfirst($str);//将字符串首字母转换成大写
//echo ucwords($str);//将字符串每个单词首字母转换成大写
//echo ucwords($cn_str);
//echo substr($str,1,2);//返回字符串从给定范围内的子串
//echo substr_replace($str,'fat',-4,-4);//now i amfat pig
//echo strtoupper($str);//全部单词转换成大写
//echo strtolower($name);//全部单词转换成小写
//echo str_shuffle($name);//随机打乱字符串
//var_dump(str_split($str,2));//将字符串根据指定长度打散为数组
//echo strcmp("2009-1-10","2009-1-1");//字符串二进制比较
//echo stripos($str,$str_small);//查找字符串首次出现的位置（不区分大小写）
//echo strpos($str,$str_small);//查找字符串首次出现的位置（区分大小写）