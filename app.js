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
