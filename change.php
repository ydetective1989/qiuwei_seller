
<?php
function change($num){
  $arr = str_split($num);
  $count = count($arr);
  for($i = 0; $i < $count; $i ++){
    echo $arr[$i];
  }
}
$n = 123456;
 change($n);
 ?>
