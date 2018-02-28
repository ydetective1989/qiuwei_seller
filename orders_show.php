<?php include("config.php"); ?>
<?php include("head.php"); ?>
<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];
?>
<table class="layui-table" lay-even="" lay-skin="line">
  <colgroup>
    <col width="100">
    <col width="200">
    <col width="300">
    <col width="50">
  </colgroup>
  <thead>
    <?php

    $query="SELECT * FROM orders WHERE id='$id' AND hide=1  ";
    $query=$db->getPageRows($query,5);
    $list=$query['record'];
    $page=$query['pages'];
    foreach($list as $row){?>
        <tbody>
    <tr>
      <th>订单编号</th>
      <td><?php echo $row['id'];?></td>
        <td></td>
    </tr>
    <tr>
      <th>淘宝订单号</th>
      <td><?php echo $row['taoid'];?></td>
      <td></td>
    </tr>
    <tr>
      <th>客户姓名</th>
      <td><?php echo $row['name'];?></td>
      <td></td>
    </tr>
    <tr>
      <th>客户电话</th>
      <td><?php echo $row['phone'];?></td>
      <td></td>
    </tr>
    <tr>
      <th>客户地址</th>
      <td><?php echo $row['address'];?></td>
      <td></td>
    </tr>
    <tr>
      <th>旺旺号</th>
      <td><?php echo $row['wangwang'];?></td>
      <td></td>
    </tr>
    <tr>

        <colgroup>
          <col width="150">
          <col width="200">
          <col>
        </colgroup>
        <thead>
          <tr>
            <th>产品名称</th>
            <th>数量</th>
            <th>价格</th>
          </tr>
        </thead>
    <?php
    $id=$row['taoid'];
    $query="SELECT * FROM orders_inf WHERE orderid='$id'" ;
    $query=$db->getRows($query);

    foreach($query as $rows){?>

          <tbody id="products" >
            <tr>
              <td><?php echo $rows['title'];?></td>
              <td><?php echo $rows['count'];?></td>
              <td><?php echo $rows['price'];?></td>
            </tr>



  <?php
   $price += $rows['price'];
} ?>
        </tbody>
        </tr>
    <tr>
      <th>成本金额</th>
      <td><?php echo $price?></td>
      <td></td>
    </tr>
    <tr>
      <th>运费</th>
      <td><?php echo $row['postprice'];?></td>
      <td></td>
    </tr>
    <tr>
      <th>购买日期</th>
      <td><?php echo $row['buydate'];?></td>
      <td></td>
    </tr>
    <tr>
      <th>备注</th>
      <td><?php echo $row['talk'];?></td>
      <td><a href="blogupdate.php?id=<?php echo $id ;?>" class="layui-btn layui-btn-mini" lay-event="edit">修改</a>
      <a  class="layui-btn layui-btn-danger layui-btn-mini" href="oreders_show.php?id=<?php echo $row['id']; ?>"  >查看</a></td>
    </tr>

</tbody>
  </thead>

<?php   }

  ?>
    </table>
  <?php   echo'<div class="layui-laypage">'. $page.'</div>' ; ?>
  <script>
  layui.user("jQuery",function(){
    var $=layui.$;
    function del(id){
          $.ajax({
            type: "GET",
            async: false,
            url: "blogdelete.php",
            data: "id="+id,
            success: function(ok){
                if(ok=="1"){
                     alert("操作成功！");
                     window.location.reload();
                }else{
                     alert(ok);
                }
              }
          });
        }
  });
  </script>
  <script>
  function del(id){
        $.ajax({
          type: "GET",
          async: false,
          url: "blogdelete.php",
          data: "id="+id,
          success: function(ok){
              if(ok=="1"){
                   alert("操作成功！");
                   window.location.reload();
              }else{
                   alert(ok);
              }
            }
        });
      }
  </script>
</body>
</html>
<?php }else{
  echo"请提供正确订单编号";
}?>
