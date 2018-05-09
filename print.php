<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9 0009
 * Time: 下午 11:39
 */

/**
 * print printf print_r echo sprintf() var_dump var_export
 * print 与echo print只能接收一个变量，echo可以接收多个变量
 * printf与sprintf printf会根据格式进行输出，sprintf只会返回 不会输出
 * print_r与var_dump : print_r会将数组或者对象格式化好输出，var_dump与print_r一样，并且输出数据类型
 * var_export数组格式化，第二个参数如果是true则变成返回，返回的值更符合php语法结构
 */
$a = [['name'=>"zhangfan",'age'=>27],['name'=>'sunjing','age'=>27]];
//printf("%f",25 );
//echo sprintf('%f',23);
//print_r(false);//啥都没有
//var_dump(false);//G:\ricework\phpms\auto-function.php:150:boolean false
//print_r($a);
//var_dump($a);
//var_export($a);
echo $ser = serialize($a);
print_r( unserialize($ser));