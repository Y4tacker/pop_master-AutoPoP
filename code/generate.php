<?php
/**
 * Created by Y4tacker
 **/
$className = "LRkI5m";
$classFuncName = "FlK9k7";
$classPHP = file_get_contents("class.php");
$classPHP = preg_replace("/class(.+?)\{/","class\\1 extends Father{",$classPHP);
$classPHP = preg_replace("/public \\$.+?;/","",$classPHP);
$classPHP = preg_replace("/if\(method_exists\(.+?\)\)/","",$classPHP);
$classPHP = preg_replace("/eval/","generateStr",$classPHP);
$classPHP = preg_replace("/<\?php|\?>/","",$classPHP);
//$classPHP = '$obj = new Y4TACKER();$obj -> Y5TACKER();';
$templatesPHP = file_get_contents("template.php");
$templatesPHP = preg_replace("/Y4TACKER/",$className,$templatesPHP);
$templatesPHP = preg_replace("/Y5TACKER/",$classFuncName,$templatesPHP);
//echo $classPHP;
file_put_contents("final.php",$templatesPHP);
file_put_contents("final.php",$classPHP,FILE_APPEND);
echo "OK,pop链生成成功，运行final.php即可";
