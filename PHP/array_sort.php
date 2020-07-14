<?php
$b=array('kk'=>1,'nc'=>array("a"=>22,"23"=>8,'4'=>2222,'df'=>123));
asort($b['nc']);
var_dump($b);
ksort($b['nc']);
var_dump($b);

$a=array("a"=>22,"23"=>8,'4'=>2,'df'=>123);
var_dump($a);
asort($a);
var_dump($a);
$sjson='{"msg from config":{}}'

$ajson=json_decode($sjson,true);
var_dump($ajson['msg from config']);
var_dump(asort($ajson['msg from config']['arrive_msg']));
var_dump($ajson['msg from config']);
asort($ajson['msg from configplat']['arrive_msg']);
var_dump($ajson['msg from configplat']);
var_dump(md5(json_encode($ajson['msg from config']))==md5(json_encode($ajson['msg from configplat'])));
echo "\n\n ";
var_dump(md5(json_encode(sort($ajson['msg from config'])))==md5(json_encode(sort($ajson['msg from configplat']))));
