<?php
class MyClass1 {

}
class MyClass2 {
    public $obj2prop;
}
$obj1=new MyClass1();
$obj1->obj1prop=1;
$obj2= new MyCLass2();
$obj2->obj2prop=2;
$serializedobj1=serialize($obj1);
$serializedobj2=serialize($obj2);
$data=unserialize($serializedobj1 , ["allowed_classes" => true]);
$data2=unserialize($serializedobj2, ["allowed_classes" => ["MyClass","MyClass2"]]);
print($data->obj1prop);
print("<br>");
print($data2->obj2prop);
?>