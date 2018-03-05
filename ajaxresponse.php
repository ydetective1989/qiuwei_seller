<?php
// $a[]="Anna";
// $a[]="Brittany";
// $a[]="Cinderella";
// $a[]="Diana";
// $a[]="Eva";
// $a[]="Fiona";
// $a[]="Gunda";
// $a[]="Hege";
// $a[]="Inga";
// $a[]="Johanna";
// $a[]="Kitty";
// $a[]="Linda";
// $a[]="Nina";
// $a[]="Ophelia";
// $a[]="Petunia";
// $a[]="Amanda";
// $a[]="Raquel";
// $a[]="Cindy";
// $a[]="Doris";
// $a[]="Eve";
// $a[]="Evita";
// $a[]="Sunniva";
// $a[]="Tove";
// $a[]="Unni";
// $a[]="Violet";
// $a[]="Liza";
// $a[]="Elizabeth";
// $a[]="Ellen";
// $a[]="Wenche";
// $a[]="Vicky";
//
// if($_GET['name']){
//   $name = $_GET['name'];
//   $respon = "";
//   $len = count($a);
//   if(strlen($name) > 0){
//   for($i = 0 ; $i < $len ; $i++){
//       if(strtolower($name) == strtolower(substr($a[$i],0,strlen($name)))  ){
//         if($respon == ""){
//             $respon = $a[$i];
//         }else{
//             $respon = $respon .",".$a[$i];
//         }
//       }
// }
// }else{
//   $respon = "";
//   return;
// }
//
//    if($respon == ""){
//      echo "没有找到";
//    }else{
//      echo $respon;
//    }
//
//
// }
if(isset($_GET)&&!empty($_GET)){
  extract($_GET);
  if(isset($block)){
    $counts = $block;
  }else{
    $counts = 0;
  }
  $counts += $count;
  $per = $counts/100;
  echo $counts;
  echo '<progress id-"" max="1" value="'.$per.'">';

}
//   if($name){
//     echo "欢迎光临".$name;
//   }
// }else{
//   echo "请输入名字";
// }





?>
