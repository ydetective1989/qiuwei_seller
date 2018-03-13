<?php require 'config.php'; ?>
<?php require "head.php" ; ?>
<div class="">
  <a href="#"></a>
  <em></em>
</div>
<script>

// Element.prototype.insertAfter = function(target,origin){
//   var nextorigin = origin.nextSibling;
//   this.insertBefore(target,nextorigin);
// }
// var n = document.createElement("p");
// var btn = document.getElementsByTagName("button")[0];
// var ul = document.getElementsByTagName("ul")[0];

</script>


<?php
/**
 *
 */
// class db_connect
// {
//
//   function __construct()
//   {
//     $this->connect("localhost","root","qw198543","blog");
//   }
//   function connect($dbhost,$root,$password,$dbname){
//     $con = mysql_connect($dbhost,$root,$password);
//     if(!$con){
//       die("链接失败");
//     }
//     $db = mysql_select_db($dbname,$con);
//     if(!$db){
//       die("未找到数据库");
//     }
//   }
//
//   function getRow($query){
//     $result = mysql_query($query);
//     $row = mysql_fetch_assoc($result);
//     return $row;
//   }
//
//   function getRows($query){
//     $result = mysql_query($query);
//     while($row = mysql_fetch_assoc($result)){
//        $arr[] = $row;
//     }
//     return $arr;
//   }
// }




// $n = 10000;
// echo toChineseNumber($n);//壹拾贰亿叁仟肆佰伍拾陆万柒仟捌佰玖拾圆
// function toChineseNumber($money){
//   $money = round($money,2);
//   $cnynums = array("零","壹","贰","叁","肆","伍","陆","柒","捌","玖");
//   $cnyunits = array("圆","角","分");
//   $cnygrees = array("拾","佰","仟","万","拾","佰","仟","亿");
//   list($int,$dec) = explode(".",$money,2);
//   $dec = array_filter(array($dec[1],$dec[0]));
//   $ret = array_merge($dec,array(implode("",cnyMapUnit(str_split($int),$cnygrees)),""));
//   $ret = implode("",array_reverse(cnyMapUnit($ret,$cnyunits)));
//   return str_replace(array_keys($cnynums),$cnynums,$ret);
// }
// function cnyMapUnit($list,$units) {
//   $ul=count($units);
//   $xs=array();
//   foreach (array_reverse($list) as $x) {
//     $l=count($xs);
//     if ($x!="0" || !($l%4))
//       $n=($x=='0'?'':$x).($units[($l-1)%$ul]);
//     else $n=is_numeric($xs[0][0])?$x:'';
//  array_unshift($xs,$n);
//  }
//  return $xs;
//  }


// function tra($target){
//   switch ($target) {
//     case 1:
//     return "壹";
//     case 2:
//     return "贰";
//     case 3:
//     return "仨";
//     case 4:
//     return "肆";
//     case 5:
//     return "伍";
//     case 6:
//     return "陆";
//     case 7:
//     return "柒";
//     case 8:
//     return "捌";
//     case 9:
//     return "玖";
//     case 0:
//     return "零";
//     default:
//       echo "请输入正确数字";
//       break;
//   }
// }
// function add_unit($unit){
//   switch ($unit) {
//     case 0:
//         return "";
//     case 1:
//         return "";
//     case 2:
//         return "拾";
//     case 3 :
//         return "百";
//     case 4:
//         return "千";
//     case 5 :
//         return "万";
//     case 6 :
//         return "拾万";
//     case 7 :
//         return "百万";
//     case 8 :
//         return "千万";
//     case 9 :
//         return "亿";
//
//   }
// }
//
// function change($num){
//   $arr = str_split($num);
//   $nstr = "";
//   $count = count($arr);
//   $date = $count;
//   for($i = 0; $i < $count ; $i ++){
//     $nstr .= tra($arr[$i]);
//     if($date > 8 && $date <= 9 ){
//       $nstr .= add_unit($date);
//       $date -= 1;
//     }else if(5 < $date && $date <= 8 ){
//       $nstr .= add_unit($date-4);
//       $date -= 1;
//     }else if($date <= 5){
//       $nstr .= add_unit($date);
//       $date -= 1;
//     }else if($date >9 ){
//       $nstr .= add_unit($date - 8);
//       $date -= 1;
//     }
//   }
//   return $nstr ;
// }
// $n = 123456789;
//  echo change($n);
//

//将字符串分割成数组，并且每位循环以后返回成大写的名称，并返回数组 利用字符串总长度来判断单位，而后将数组键值后面加上单位，再把数组还原成字符串

 ?>
<style media="screen">
  .content{
    width: 100px;
    height: 100px;
    border: solid 1px black;
    background: red;
    display: none;

  }
  .active{

    background-color: yellow;

  }

</style>
<ul>

<button type="button" class="taboff" id="1" onclick="tabit(1)" >1 <div  class="content">
111
 </div></button>
 <button  type="button" class="taboff" id="2" onclick="tabit(2)" >2 <div  class="content">
 222
  </div></button>
  <button type="button" class="taboff" id="3" onclick="tabit(3)" >3 <div  class="content">
  333
   </div></button>
</ul>




 <script>
 var lastTab; //临时存储上次时的tab ID值

 function tabit(cid) {

 //如果上次有存储值，且和本次请求切换的是同一个，那么直接提前结束

 if( lastTab && lastTab == cid)
           return;

 //否则，改变上次的tab状态为隐藏状态，并且置换本次请求的tab为当前状态

 /*这里要注意考虑第一次触发这个函数的情况，因为这个时候lastTab是undefined，所以直接查找id对应的元素肯定会报js错误的*/
 if(lastTab) {
     gi(lastTab).className = "taboff";
     var n  = gt("button")[(lastTab - 1)];
     n.getElementsByTagName("div")[0].style.display = "none";

 }

 gi(cid).className="active";
 var n  = gt("button")[(cid-1)];
 n.getElementsByTagName("div")[0].style.display = "block";


 //最后将本次的tab记录下来以备下次切换使用

 lastTab = cid;
 }

 //根据id获取对应的元素对象

 function gi(id) {

         return document.getElementById(id);

 }
function gt(tag){
  return document.getElementsByTagName(tag);
}



 </script>
 <!-- <script>

 function add(){
   var n = window.prompt("input");
   var str = "";
   var le = n.length;
   for(l = 0 ; l<n.length-1; l ++){
     if(tra(n[l])==""){
       str += tra(n[l])+cha(0);
       if(tra(n[n.length-4])==""){
         str += tra(n[n.length-4])+ "零"+cha(0);
       }
     }else{
       str += tra(n[l]) + cha(n.length-l);
     }
   //更改数字为大写计数，增加单位写入每位数值背后
   }
   //从第一位开始计数  写上单位 依次往下计数，tra（）+cha（）
   //12345  壹万两千三百四shif
 document.write(str);
 }

 function cha(l){//增加单位
   switch (l) {
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

   }
 }

 function tra(m){
   switch (m) {
     case "1":
     return "壹";

     case "2":
     return "两";

     case "3":
     return "叁";

     case "4":
     return "肆";

     case "5":
     return "伍";

     case "6":
     return "陆";

     case "7":
     return "柒";

     case "8":
     return "扒";

     case "9":
     return "玖";

     case "0":
     return "";

   }
 }


 </script> -->

 <!-- <div id="products" ></div>
 <button type="button" onclick="get()" >获取</button>
 <script>
 function get(){
   $.ajax({
      type: "GET",
      async: false,
      url: "index.php",
      success: function(date){
       $("#products").append(date);
         }
   });
 }


 </script> -->
<!-- <script>
var box  = document.getElementById("box");
box.onmouseover = function(){
  var e = e || window.event;
  var target = e.target || e.srcElement
  if(target.nodeName == "INPUT"){
    switch (target.id) {
      case "add":
      target.style.color = "red";
        break;
        case "remove":
        target.style.color = "red";

          break;
          case "move":
          target.style.color = "red";

            break;
            case "select":
            target.style.color = "red";

              break;

    }
  }
  box.onmouseout = function(){
    var e = e || window.event;
    var target = e.target || e.srcElement
    if(target.nodeName == "INPUT"){
      switch (target.id) {
        case "add":
        target.style.color = "black";
          break;
          case "remove":
          target.style.color = "black";

            break;
            case "move":
            target.style.color = "black";

              break;
              case "select":
              target.style.color = "black";

                break;

      }
    }

}
}
</script>

<div id="box">
        <input type="button" id="add" value="添加" />
        <input type="button" id="remove" value="删除" />
        <input type="button" id="move" value="移动" />
        <input type="button" id="select" value="选择" />
    </div>

    <input type="button" name="" id="btn" value="添加" />
        <ul id="ul1" style="list-style:none;">
            <li >111</li>
            <li>222</li>
            <li>333</li>
            <li >444</li>
        </ul>

<script>
 var btn = document.getElementById("btn");
 btn.onclick = function(){
   var n = document.createElement("li");
   n.setAttribute("onclick","del(this)");
   n.innerHTML = "555";
   ul.appendChild(n);
 }
 var ul = document.getElementsByTagName("ul")[0];

 ul.onmouseover = function(){
   var e = e || window.event;
   var target = e.target || e.srcElement;
   if(target.nodeName == "LI"){
     target.style.color = "red";
   }

 }
 ul.onmouseout = function(){
   var e = e || window.event;
   var target = e.target || e.srcElement;
    if(target.nodeName == "LI"){
      target.style.color = "black";
    }
 }

 ul.onclick = function(){
   var e = e || window.event;
   var target = e.target || e.srcElement;
    if(target.nodeName == "LI"){
      target.remove();
    }
 }

</script> -->


<!-- <script>
function strto(str){
  var obj = {};//
  var arr = [];
  for(var prop in str){
    if(obj[str[prop]]){
      if(obj[str[prop]] == 1 ){
        obj[str[prop]] += 1;
      }
    }else{
      obj[str[prop]] = 1;
    }
  }
  for(var pro in obj){
    if(obj[pro] == 1){
      arr.push(pro);

    }
  }
  return arr[0];

}

</script>



$str = "asaaadasdasdasdgasgfhfghrwetwerwrwerwersdzxczx";
function strtoarr($str){//字符串转化为数组
  $str = chunk_split($str,1,",");
  $str = explode(",",$str);
  return $str;
}
function strtone($str){
  $str = strtoarr($str);
  $arr = array();
  $count = count($str);
  for($i=0;$i<$count;$i++){
    if($arr[$str[$i]] != $str[$i] ){
      $arr[$str[$i]] = $str[$i];
    }
  }
  $newstr = implode("",$arr);
  return $newstr;
}
echo $str."<br />";
echo strtone($str);
?>





// $pri = 123456789;
// function price($pri){
//   $len = strlen($pri);//获取参数的字符串长度
//   switch ($pri) {
//     case 1:
//       echo "壹";
//       return;
//     case 2:
//       echo "贰";
//       return;
//     case 3:
//       echo "叁";
//       return;
//     case 4:
//       echo "肆";
//       return;
//     case 5:
//       echo "伍";
//       return;
//     case 6:
//       echo "陆";
//       return;
//     case 7:
//       echo "柒";
//       return;
//     case 8:
//       echo "捌";
//       return;
//     case 9:
//       echo "玖";
//       return;
//     case 0:
//       echo "零";
//       return;
//   }
// }
//   price($pri);




// $arr1 = [1,3,3,4,5,5,6,4,5];
// $arr2 = [1,5,3,6];
// $arr3 = [];
// $arr4 = [];
// function arr($arr1,$arr2){
//   foreach($arr1 as $row1){
//     $arr3[$row1] = $row1;
//   }
//   foreach($arr2 as $row2){
//     if(isset($arr3[$row2])){
//       array_push($arr4,$row2);
//     }
//   }
//   return $arr4;
// }
//
// print_r(arr($arr1,$arr2));
// //
// $query = "SELECT sum(i.price * i.quantity) as sum , o.user_id FROM oder_items as i inner join order as o  ON i.order_id = o.order_id GROUP BY o.user_id ORDER BY sum DESC  limit 0,10 ";
// $db->getRows($query);
//

 ?>

 <button type="button" onclick="test()">测试</button>
<script>
function send(){
  var name = $("#name").val();
  $.ajax({
    url:"ajaxresponse.php",
    type:"GET",
    data:"name="+name,
    async : true,
    success : function(n){
      $("#div1").html(n);
    }
  });
}
</script> -->
<!-- <div id="ajax"></div>

<input type="text"  id="count"> -->
<!-- <script>
function test(){
  if(document.getElementById("block")){
    var block = document.getElementById("block").value;
    block = block*100;
  }else{
    var block = 0;
  }
  var count = document.getElementById("count").value;
  var xmlhttp ;
  if(window.XMLHttpRequest){
    xmlhttp = new window.XMLHttpRequest();
  }else{
    xmlhttp = new ActiveObject("Mircosoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      document.getElementById("ajax").innerHTML = xmlhttp.response;
    }
  }
  if(block != 0){
      xmlhttp.open("GET","ajaxresponse.php?count="+count+"&block="+block,true);
  }else{
      xmlhttp.open("GET","ajaxresponse.php?count="+count,true);
  }
      xmlhttp.send();
} -->
<script>
// Grand.prototype.lastName = "qiu";
// function Grand(){
//   this.name = "gaogui";
// }
// var grand = new Grand();
//
// Father.prototype = grand;
//
// function Father(){
//   this.age = 20;
// }
// var father = new Father();
//
// Son.prototype = father;
// function Son(){}
// var son = new Son();


// var inherit = (function(){
//   var F = function(){};
//   return function(Target,Origin){
//     F.prototype = Origin.prototype;
//     Target.prototype = new F();
//     Target.prototype.constructor = Target;
//     Target.prototype.uber = Origin.prototype ;
//   }
// }());
// Father.prototype.lastName = "qiu";
// function Father(){
//   this.name = "wei";
//   this.sex = "nan";
// }
// function Son(){}
//
// inherit(Son,Father);
//
// var son = new Son();
// var father = new Father();

// function inherit(Target,Origin){
//   function F(){}
//   F.prototype = Origin.prototype;
//   Target.prototype = new F();
//   Target.prototype.constructor = Target;
//   Target.prototype.uber = Origin.prototype ;
// }
// Father.prototype.lastName = "qiu";
// function Father(){
//   this.name = "wei";
//   this.sex = "nan";
// }
// function Son(){}
//
// inherit(Son,Father);
//
// var son = new Son();
// var father = new Father();

</script>
<!-- <script>
function send(){
var xml ;
var n = document.getElementById("name").value;
if(window.XMLHttpRequest){
  xml = new XMLHttpRequest();
}else{
  xml = new ActiveXObject("Mircosoft.XMLHTTP");
}

xml.onreadystatechange = function(){
  if(xml.readyState == 4 && xml.status == 200){
    document.getElementById("div1").innerHTML = xml.responseText;
  }
}

xml.open("GET","ajaxresponse.php?name="+n,true);
xml.send();
}
</script> -->

<!-- <script>
function post(){
var name = document.getElementById("name").value;
var password = document.getElementById("password").value;
if(window.XMLHttpRequest){
  var xmlhttp  = new XMLHttpRequest();
}else{
  var xmlhttp = new ActiveXObject("Mircosoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
    document.getElementById("div1").innerHTML = xmlhttp.responseText;
  }
}
xmlhttp.open("POST","ajaxresponse.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("name="+name+"&password="+password);

}
</script> -->
<!-- <input type="text" id="name" >
<input type="text" id="password">
<button type="button" onclick="post()" >获取</button>
<div id="div1"></div> -->


<script>
// function Peson(name,age,sex){
//   this.name = name;
//   this.age = age ;
//   this.sex = sex ;
// }
// function Peson1(job){
//   this.job = job;
// }
// function Student(name,age,sex,job){
//   Peson1.call(this,job);
//   Peson.call(this,name,age,sex);
//
//
// }
//
// var student = new Student('qiuwei','12','nan','PHPer');


</script>

<!-- <script>
function btgod(thisis){
  var n = thisis;
  if(n == ""){
    return;
  }
if(window.XMLHttpRequest){
  var xmlhttp = new XMLHttpRequest();
}else{
  var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function (){
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
    var n = xmlhttp.responseXML;
    document.getElementById("div1").innerHTML = xmlhttp.responseText;
  }
}
xmlhttp.open("get",'ajaxresponse.php?name='+n,true);
xmlhttp.send();
}
</script> -->
<!-- <script>
// function btgod(){
//   var name = $("#name").val();
//   var password = $("#password").val();
//   if(name =="" && password == ""){
//     alert("111");
//     return;
//   }
//   $.post("ajaxresponse.php"
//      ,{
//        name : name,
//        password : password
//      }
//    ,function(date,status){
//      if(status == "success"){
//        alert(date);
//      }
//    });
// }

function btgod(){
  var name  = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  if(window.XMLHttpRequest){
    var xmlhttp = new XMLHttpRequest();
  }else{
    var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById("div1").innerHTML = xmlhttp.responseText;
      alert(xmlhttp.responseText);
    }
    }
    xmlhttp.open("POST","ajaxresponse.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("name="+name+"&password="+password);
}

</script>
<div id="div1"></div>
<input type="text" id="name" >
<input type="text" id="password">
<button  type="button" onclick="btgod()" >获取</button> -->



<!-- <table id="demo" lay-filter="test"></table>

<script>
layui.use('table', function(){
  var table = layui.table;

  //第一个实例
  table.render({
    elem: '#demo'
    ,height: 900
    ,url: 'json.php' //数据接口
    ,page: true //开启分页
    ,cols: [[ //表头
      {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'}
      ,{field: 'orderid', title: '用户名', width:80}
      ,{field: 'productid', title: '性别', width:80, sort: true}
      ,{field: 'title', title: '城市', width:80}
      ,{field: 'count', title: '城市', width:80}
      ,{field: 'price', title: '城市', width:80}
    ]]
  });
});
</script> -->
