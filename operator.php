<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/7 0007
 * Time: 下午 10:06
 */
//foo()与@foo()区别
//错误控制符 @，当将其放在php表达式之前，会忽略所有错误
/**
 *运算符优先级
 * 递增/递减 > ! > 算数运算符 > 大小比较 > (不)相等比较 > 引用 > 位运算符^ > 位运算符| > 逻辑与 > 逻辑或 > 三目 > 赋值 > and > xor > or
 */
$a = 0;
$b = 0;
if($a = 3 > 0 || $b = 3 > 0){
    $a++;
    $b++;
    echo $a . "\n";
    echo $b . "\n";

}