<?php
$str = "Hello world. I love Shanghai!";
$str="{type=08 ¥} {type=07 24}";
var_dump(is_numeric("17.2"));
print_r (explode("}",$str));
$a="";
$b="{ }  { 30}";
var_dump(explode(' ',$b));
var_dump(explode(' ',$a));
