<?php
class A{
public function __construct(){
var_dump("A");
}
}
//$a=new A();
class B extends A {

public function  __construct(){
var_dump("B");
}

}
$b=new B();

class C extends B {

public function  __construct(){
parent:: __construct();
var_dump("C");
}

}
$c= new C();

class D extends C {

}
$d= new D();
