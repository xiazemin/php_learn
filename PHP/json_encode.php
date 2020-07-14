<?php
$a="在水";
$b=substr($a,0,1);
var_dump($b);
//string(1) "�"
var_dump(json_encode($b));
//bool(false)
var_dump(json_encode(false));
//string(5) "false"
var_dump(json_encode($b,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
//bool(false)
