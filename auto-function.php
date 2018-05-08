<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/8 0008
 * Time: 上午 11:54
 */
/*$count = 5;
function get_count(){
    static $count;
    return $count++;
}
echo  $count;
++$count;
echo get_count();
echo get_count();*/

//答案为5 null 1


/**
 * 在函数体内部使用全局变量使用global或者$GLOBALS超全局数组
 */
/*$a = 6;
function myFunc(){
    //global  $a;
    //echo $a;
    echo $GLOBALS['a'];
}
 myFunc();*/

/**
 * 静态变量
仅在局部函数域中存在，但当程序执行离开此作用域，值并不会消失
1、仅初始化一次
2.初始化时需要赋值
3.每次执行函数该值会保留
4.static修饰的变量是局部的，仅在函数内部有效
5.可以用作记录函数的调用次数，从而可以在某些条件下终止递归
 */
/*function myFunc1(){
    static $a = 1;
    echo $a++;
}
myFunc1();
myFunc1();*/

/**
 * 函数参数
 * 默认情况下，函数参数通过值传递
 * 如果希望函数修改它的值，必须通过引用传递，在参数面前加&,引用传参只能传变量
 */
//$a2 = 1;
//function myFunc2(&$a2){
// $a2 = 2;
//}
//myFunc2($a2);
//echo $a2;

/**
 * 引用返回
 * @return int
 */
function &myFunc3(){
    static $b = 10;
    return $b;
}
$a3 = myFunc3();
echo ($a3); //10
$a3 = &myFunc3();
$a3 = 100;
echo myFunc3(); //100

/**
 * 外部文件的导入
 * include/require语句包含并运行指定文件
 * 如果给出路径名则按路径名查找，否则从include_path中查找
 * 如果include_path中也没有，则从调用脚本文件所在目录和当期工作目录下查找
 * 当一个文件被包含的时候，其中所包含的代码继承了include所在行的变量范围
 */
//区别
/**
 *加载过程中如果未找到文件，include结构会发出一条警告，而require会发生致命的错误，导致脚本终止
 * require(include)与require_one(include_once)唯一区别是会检查该文件是否被包含过，如果是则不会再次包含
 */