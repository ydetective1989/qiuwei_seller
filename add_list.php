<?php include 'config.php'; ?>
<?php
if($_POST){
  $iteam = array();
  $count = array();
  $price = array();
  $taoid = $_POST['taoid'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $wangwang = $_POST['wangwang'];
  $iteam = $_POST['productid'];
  $iteamname = $_POST['product'];
  $count = $_POST['count'];
  $price = $_POST['price'];
  $baseprice = $_POST['baseprice'];
  $postprice = $_POST['postprice'];
  $buydate = $_POST['buydate'];
  $talk = $_POST['talk'];
  $arr = array(
    'name' => $name,
    'address' => $address,
    'phone' => $phone,
    'taoid' => $taoid,
    'wangwang' => $wangwang,
    'baseprice' => $baseprice,
    'postprice' => $postprice,
    'buydate' => $buydate,
    'talk' => $talk
  );
  $db->insert('orders',$arr);

  $len = count($iteam);
  for($i = 0; $i < $len; $i++){
  $arr_inf = array(
    'orderid' => $taoid,
    'productid' => $iteam[$i],
    'title' => $iteamname[$i],
    'count' => $count[$i],
    'price' => $price[$i]
  );
  $db->insert('orders_inf',$arr_inf);
}
  echo"添加订单成功";

}else{
   ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-3.2.1.min.js" >
</script>
<script type="text/javascript" src="layui.js" >
</script>
<link rel="stylesheet" href="css\layui.css">
</head>
<body class="layui-layout-body">
<form class="layui-form" action="" method="post">

  <div class="layui-form-item">
    <label class="layui-form-label">淘宝订单编号</label>
    <div class="layui-input-inline">
      <input type="text" id="taoid" name="taoid" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>

    <label class="layui-form-label">客户姓名</label>
    <div class="layui-input-inline">
      <input type="text" id="name" name="name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">客户地址</label>
    <div class="layui-input-block">
      <input type="text" id="address" name="address" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">客户电话</label>
    <div class="layui-input-inline">
      <input type="text" id="phone" name="phone" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
    <label class="layui-form-label">客户旺旺号</label>
    <div class="layui-input-inline">
      <input type="text" id="wangwang" name="wangwang" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">购买商品</label>
    <input class="layui-btn" type="button" value="选取商品" onclick="addpro()" >
    <div class="layui-input-block" >
      <div class="layui-form-item">
      <table class="layui-table">
        <colgroup>
          <col width="150">
          <col width="200">
          <col>
        </colgroup>
        <thead>
          <tr>
            <th>产品编码</th>
            <th>产品名称</th>
            <th>数量</th>
            <th>价格</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody id="products" >
        </tbody>
        </table>
        </div>

    </div>
  </div>
  <script>
  function addpro(){
    $.post('add_product.php', {}, function(str){
         layer.open({
          type: 1,
          content: str, //注意，如果str是object，那么需要字符拼接。
          area: ['300px', '300px']
        });
      });
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

    function del(thisis){
      var n = window.confirm("确认是否删除?");
      if(n == true){
      thisis.parentNode.parentNode.parentNode.removeChild(thisis.parentNode.parentNode);
    }


    }
  </script>
  <div class="layui-form-item">
    <label class="layui-form-label">邮费</label>
    <div class="layui-input-inline">
      <input type="text" id="postprice" name="postprice" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">成本</label>
    <div class="layui-input-inline">
      <input type="text" id="baseprice" name="baseprice" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
    <label class="layui-form-label">购买日期</label>
    <div class="layui-input-inline">
      <input type="date" id="buydate" name="buydate" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>





  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea id="talk" name="talk" placeholder="请输入内容" class="layui-textarea"></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn"  lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>

<script>
//Demo
layui.use('form', function(){
  var form = layui.form;

  //监听提交

});
</script>
</body>
</html>
<?php }?>
