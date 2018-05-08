<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/8 0008
 * Time: 上午 11:37
 */
//php遍历数组的三种方式
//1.for 只能循环索引数组
//2.foreach 可以循环索引和关联数组，会对数组指针重置
//3.while,list(),each() 同上，且不会进行reset（）操作-不会把指针重置
//php如何优化if else if -> 1.概率较大的尽量往前放。2如果是比较复杂的结构，如果是整形，字符串，浮点类型，可以使用switch case