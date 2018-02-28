<?php
$arr[]='qiuwei';
$arr[]='qiuyong';
$arr[]='dabao';
$arr[]='qiuqiu';
echo json_encode($arr);

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
var_dump(json_decode($json, true)); 

 ?>
