<?php
function tra($target){ //阿拉伯数字转化成大写中文
  switch ($target) {
    case 1:
    return "壹";
    case 2:
    return "贰";
    case 3:
    return "仨";
    case 4:
    return "肆";
    case 5:
    return "伍";
    case 6:
    return "陆";
    case 7:
    return "柒";
    case 8:
    return "捌";
    case 9:
    return "玖";
    case 0:
    return "零";
    default:
      echo "请输入正确数字";
      break;
  }
}
function add_unit($unit){ //根据参数来换算单位
  switch ($unit) {
    case 0:
        return "";
    case 1:
        return "";
    case 2:
        return "拾";
    case 3 :
        return "百";
    case 4:
        return "千";
    case 5 :
        return "万";
    case 6 :
        return "拾万";
    case 7 :
        return "百万";
    case 8 :
        return "千万";
    case 9 :
        return "亿";

  }
}

function change($num){
  $arr = str_split($num); //将字符串转换成数组 $arr
  $nstr = "";  //设立一个空的新字符串
  $count = count($arr); //取数组长度
  $date = $count;   //创建一个计数器，用来确认当前剩余数组长度并转化成相应的单位
  for($i = 0; $i < $count ; $i ++){
    $nstr .= tra($arr[$i]);//首先将转化好的中文数字放入空字符串
    if($date > 8 ){                        //判断当前计数器值，当大于8时，
      $nstr .= add_unit($date);            //添加单位亿
      $date -= 1;                          //计数器减1
    }else if(5 < $date && $date <= 8 ){    //当计数器小于等于8 且大于5时
      $nstr .= add_unit($date-4);          //计数器-4进行单位换算添加
      $date -= 1;                          //
    }else if($date <= 5){                  //当计数器小于等于5时
      $nstr .= add_unit($date);            //直接按照计数器当前值进行单位转化添加
      $date -= 1;                          //
    }


  }
  return $nstr;
}
$n = 123456789;
 echo change($n);


//将字符串分割成数组，并且每位循环以后返回成大写的名称，并返回数组 利用字符串总长度来判断单位，而后将数组键值后面加上单位，再把数组还原成字符串

 ?>
