function addpro(){
  var n = document.getElementsByTagName("tr");
  if(n.length > 6){
    alert("不能超过5个商品");
    return;
  }else{
    $.post('add_product.php', {}, function(str){
         layer.open({
          type: 1,
          content: str, //注意，如果str是object，那么需要字符拼接。
          area: ['300px', '300px']
        });
      });
  }

}
function btgod(){//执行添加商品列表
     //按钮单击时执行
           //Ajax调用处理
           var iteams = $("#iteam").val();
           var len = $("#iteam").length;
         $.ajax({
            type: "POST",
            async: false,
            url: "add_append.php",
            data: "iteam="+iteams,
            success: function(date){
             $("#products").append(date);
             layer.close(layer.index);
               }
         });
      };
function ajax(url,fun,type,bool,data){
  var xmlhttp = new window.XMLHttpRequest() || new ActiveObject("Microfost XMLHTTP");
  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
                  fun;
    }
    if(type == "GET"){
      xmlhttp.open(type,url,bool);
      xmlhttp.send(data);
    }
    if(type == "POST"){
      xmlhttp.open(type,url,bool);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send(data);
    }
  }
}
