<html>
<head>
<title> PHP 7 : Tutorialpoint </title>
</head>
<body>
<?php
   function generator(){
      yield "zero";
      yield "one";
      yield "two";
   }
   function generator1(){
      yield "three";
      yield "four";
      yield "five";
   }
   function generator2(){
    
    yield "seven";
    yield "eight";
    yield from generator();
    yield "nine";
    yield from generator1();
    yield "ten";
 }
 foreach (generator() as $value){
    echo $value, PHP_EOL;
 }
 foreach(generator2() as $value){
    echo $value, PHP_EOL;
 }
?>
</body>
</html>

