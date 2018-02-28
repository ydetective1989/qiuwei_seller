<?php include 'head.php'; ?>
<script>
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


<?php
$pri = 123456789;
function price($pri){
  $len = strlen($pri);//获取参数的字符串长度
  switch ($pri) {
    case 1:
      echo "壹";
      return;
    case 2:
      echo "贰";
      return;
    case 3:
      echo "叁";
      return;
    case 4:
      echo "肆";
      return;
    case 5:
      echo "伍";
      return;
    case 6:
      echo "陆";
      return;
    case 7:
      echo "柒";
      return;
    case 8:
      echo "捌";
      return;
    case 9:
      echo "玖";
      return;
    case 0:
      echo "零";
      return;
  }
}
  price($pri);




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
<!-- <script>
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
<div id="ajax"></div>

<input type="text"  id="count">
<script>
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
}

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
