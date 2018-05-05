<?php
/**
 * Created by PhpStorm.
 * User: zhangfan
 * Date: 2018/5/5
 * Time: 13:30
 */
/*
 *  普通赋值
 *  变量a与b指向同一块内存空间，由于cow(写时复制的原则)，修改a变量的时候会新开辟一个内存空间给变量a ，b不受a的影响
 */
//$a = range(0, 3);
//xdebug_debug_zval('a');
//var_dump(memory_get_usage());
//echo '<br/>';
//$b = $a;
//xdebug_debug_zval('a');
//var_dump(memory_get_usage());
//echo '<br/>';
//$a = range(0, 3);
//xdebug_debug_zval('a');
//var_dump(memory_get_usage());
//echo '<br/>';

/*
 * 引用变量
 * 变量a与b指向同一块内存空间，改变a所指向的内存空间的时候同时会影响b
 */
//$c = range(0,3);
//xdebug_debug_zval('c');
//var_dump(memory_get_usage());
//echo '<br/>';
//$d = &$c;
//xdebug_debug_zval('c');
//var_dump(memory_get_usage());
//echo '<br/>';
//$c  = range(0,3);
//xdebug_debug_zval('c');
//var_dump(memory_get_usage());
//echo '<br/>';

/*
 * unset只会取消引用，不会销毁空间
 */
//$e = 1;
//$f = &$e;
//unset($f);
//echo $e;

/*
 * php中对象本身就是引用传值
 */
//class Person{
//    public $name = 'lilei';
//}
//$p1 = new Person;
//xdebug_debug_zval('p1');
//$p2 = $p1;
//xdebug_debug_zval('p1');
//$p2->name = 'hanmeimei';
//xdebug_debug_zval('p1');

$data = ['a','b','c'];
foreach($data as $key=>$value){
    $value = &$data[$key];
    var_dump($data);
}
var_dump($data);
