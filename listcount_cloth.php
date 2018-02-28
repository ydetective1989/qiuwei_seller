<?php include 'config.php'; ?>
<?php include 'head.php'; ?>
<?php
$query = "SELECT sum(orders_inf.price) as cprice , sum(orders_inf.count) as ccount  ,iteam.sex as sex,iteam.cloth as cloth, now() as now FROM orders_inf
inner join iteam on orders_inf.productid = iteam.id GROUP BY iteam.sex";
$query = $db->getRows($query);
 ?>
<table class="layui-table">
  <colgroup>
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>商品名称</th>
      <th>数量</th>
      <th>价格</th>
      <th>签名</th>

    </tr>
  </thead>
  <tbody>
    <?php
    foreach($query as $row){?>
      <tr>
        <td><?php echo $row['sex']; ?></td>
        <td><?php echo $row['ccount']; ?></td>
        <td><?php echo $row['cprice']; ?></td>
        <td><?php echo $row['cloth']; ?></td>

      </tr>
  <?php
      }

    ?>

  </tbody>
</table>
