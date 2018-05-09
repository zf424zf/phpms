<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9 0009
 * Time: 下午 11:38
 */
/**
 * date() 函数把时间戳格式化为更易读的日期和时间。
 * microtime() 返回当前 Unix 时间戳的微秒数：
 * strtotime（）将英文文本日期时间解析为 Unix 时间戳，秒数：
 * date_default_timezone_set 设置时区
 * mktime（）根据指定的时分秒月日年获取时间戳
 */
//date_default_timezone_set("Asia/Shanghai");
//echo "当前时间为:".date('Y-m-d H:i:s',strtotime('-2 weeks'));
//echo date('Y-m-d H:i:s',mktime(6,6,6,6,6,2006));
//echo "\t";
//echo microtime();
//echo "\t";
//echo strtotime('now');

/**
 * 获取指定时间差值
 * @param $time1 "年月日字符串"
 * @param $time2 "年月日字符串"
 * @param $isDay true
 */
//function time_counter($time1,$time2,$isDay = true)
//{
//    $t1_int = strtotime($time1);
//    $t2_int = strtotime($time2);
//    $day_diff =  abs(($t1_int - $t2_int) / 86400);
//    return $isDay ? $day_diff : round(($day_diff /365));
//}
//echo time_counter("2012-12-01","2018-05-10",false);