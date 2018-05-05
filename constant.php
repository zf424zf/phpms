<?php
/**
 * Created by PhpStorm.
 * User: zhangfan
 * Date: 2018/5/5
 * Time: 14:25
 */
//php字符串哪三种定义方式
//1.单引号(效率高于双引号，不能解析变量，不能解析转义字符，只能解析单引号和反斜线本身，变量和变量，变量和字符串，字符串和字符串可以用.连接)
//2.双引号(可以解析变量，可以解析所有转义字符，也可以用.连接)
//3.heredoc和newdoc，heredoc功能类似双引号，newdoc类似单引号，都是用于大文本类容
//$str_here= <<<EOT
//阿毛猪阿毛猪阿毛猪
//阿毛猪阿毛猪阿毛猪
//阿毛猪阿毛猪阿毛猪
//阿毛猪阿毛猪阿毛猪\n
//哈哈哈哈
//EOT;
//$str_new =  <<<'EOT'
//阿毛猪阿毛猪阿毛猪
//阿毛猪阿毛猪阿毛猪
//阿毛猪阿毛猪阿毛猪
//阿毛猪阿毛猪阿毛猪\n
//哈哈哈哈
//EOT;
//echo $str_here;
//echo '<br/>';
//echo $str_new;


/**
 * php三大数据类型(标量，复合，特殊)
 * 标量：浮点，整形，字符串，布尔
 * 复合：对象，数组
 * 特殊：null，resource
 */
//浮点类型不能用于比较运算
//$a = 0.31;
//$b = 0.62;
//if($a+ $b == 0.93){
//    echo 'fuck';
//}


/**
 * 超全局数组
 * $GLOBALS包含下列所有
 */
//var_dump($GLOBALS);
//var_dump($_REQUEST);
//var_dump($_GET);
//var_dump($_POST);
//var_dump($_COOKIE);
//var_dump($_SESSION);
//var_dump($_ENV);
//var_dump($_FILES);
//var_dump($_SERVER);


/**
 * 常量定义方式
 * 常量一经定义，不能被修改或者删除
 * 1.const 语言结构，速度更快，可以定义类常量
 * 2.define 函数
 */
//预定义常量
//echo __DIR__;
//echo '</br>';
//echo __FILE__;
//echo '</br>';
//echo __LINE__;
//echo '</br>';
//echo __CLASS__;
//echo '</br>';
//echo __FUNCTION__;
//echo '</br>';
//echo __METHOD__;
//echo '</br>';
//echo __TRAIT__;
//echo '</br>';
//echo __NAMESPACE__;
//echo '</br>';
//class constant{
//   const a = 'zhangfan';
//
//    public function getDefine(){
//        define('b','sunjing');
//    }
//}

//用php写出显示客户端IP和服务端IP的代码
//echo $clientIp = $_SERVER['REMOTE_ADDR'];
//echo $serverIp = $_SERVER['SERVER_ADDR'];
var_dump( $_SERVER);