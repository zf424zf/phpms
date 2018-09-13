<?php
/**
 * 目录相关
 */
////返回路径中文件名的部分 输出file.php
//echo basename('phpms/file.php');
////返回路径中文件夹的部分 输出 phpms
//echo dirname('phpms/file.php');
////返回路径数组，包含文件夹名、文件名、文件拓展名
//print_r(pathinfo('phpms/file.php'));
//$dr = opendir('G:\ricework\phpms');
//while (($file = readdir($dr)) !== false) {
//    echo 'filename:' . $file . '<br/>';
//}
//closedir($dr);
////删除文件夹，必须是空文件夹
//// rmdir('G:\ow');
////mkdir('G:\test');
//echo filesize('G:\ricework\Mall.zip');
//
//$dh = opendir('G:\ricework');
//$size = 0;

echo getFileSize('G:\ricework\fanbbs');
function getFileSize($dirname)
{
    static $size = 0;
        if ($dh = opendir($dirname)) {
            while (($file = readdir($dh)) !== false) {
                $path = $dirname . '/' . $file;
                if($file != '.' && $file != '..' && $file != 'node_modules'){
                    if(is_dir($path)){
                        getFileSize($path);
                    }else{
                        $size += filesize($path);
                    }
                }

            }
        }
    return $size;
}