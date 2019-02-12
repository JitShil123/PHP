<?php 
$name=array('ami','tumi','amra');

$result=implode(' ', $name);
var_dump($result);
echo "<br/>";


$name = "ami,tumi,amra";

$result=explode(',', $name);
var_dump($result);
?>