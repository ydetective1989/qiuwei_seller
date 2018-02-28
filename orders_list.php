<?php include("config.php"); ?>
<?php include("head.php"); ?>

<script>
//Demo
layui.use('form', function(){
  var form = layui.form;

  //监听提交

});
</script>
  <form class="layui-form" action="orders_list.php" method="post">
    <div class="layui-form-item">
      <label class="layui-form-label">客户名</label>
      <div class="layui-input-inline">
        <input type="text" id="name" name="name"   placeholder="请输入标题" autocomplete="off" class="layui-input">
      </div>
      <label class="layui-form-label">客户电话</label>
      <div class="layui-input-inline">
        <input type="text" id="phone" name="phone"   placeholder="请输入标题" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">淘宝订单号</label>
      <div class="layui-input-inline">
        <input type="text" id="taoid" name="taoid"    placeholder="请输入标题" autocomplete="off" class="layui-input">
      </div>
      <label class="layui-form-label">旺旺号</label>
      <div class="layui-input-inline">
        <input type="text" id="wangwang" name="wangwang"    placeholder="请输入标题" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">订单状态</label>
      <div class="layui-input-inline">
        <select id="state" required   name="state">
          <option value="0"></option>
          <option value="1">已付款</option>
          <option value="2">已发货</option>
          <option value="3">已确认</option>
          <option value="4">退款中</option>
          <option value="5">已关闭</option>
        </select>
      </div>
    </div>



    <div class="layui-form-item">
      <div class="layui-input-block">
        <button class="layui-btn"  lay-submit lay-filter="formDemo">立即提交</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>

  <table class="layui-table" lay-even="" lay-skin="line">
    <colgroup>
      <col width="100">
      <col width="150">
      <col width="300">
      <col width="100">
      <col width="200">
    </colgroup>
    <thead>
      <tr>
        <th>订单编号</th>
        <th>用户名</th>
        <th>用户地址</th>
        <th>订单状态</th>
        <th>操作</th>
      </tr>
    </thead>
    <?php
    if($_POST){
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $taoid=$_POST['taoid'];
      $wangwang=$_POST['wangwang'];
      $state=$_POST['state'];

      $where="";
      if($name!=""){
        $where.="AND name='$name'";
      }
      if($phone!=""){
        $where.="AND phone='$phone'";
      }
      if($taoid!=""){
        $where.="AND taoid='$taoid'";
      }
      if($wangwang!=""){
        $where.="AND wangwang='$phone'";
      }
      if($state!="0"){
        $where.="AND state='$state'";
      }
      $query="SELECT * FROM orders WHERE 1=1 $where AND hide=1   ";
      $query=$db->getPageRows($query,3);
      $list=$query['record'];
      $page=$query['pages'];
      foreach($list as $row){

        ?>
        <tbody>
        <tr>
        <td ><?php echo $row['id'];?></td>
        <td ><?php echo $row['name'];?></td>
        <td ><?php echo $row['address'];?></td>
        <td ><?php
        switch ($row['state'])
          {
          case 1:
            echo "已付款";
            break;
          case 2:
            echo "已发货";
            break;
          case 3:
              echo "已确认";
              break;
              case 4:
                echo "申请退款";
                break;
                case 5:
                  echo "已关闭";
                  break;
          default:
            echo "无状态";
          }
        ?>
      </td>


      <td>
          <a href="blogupdate.php?id=<?php echo $id ;?>" class="layui-btn layui-btn-mini" lay-event="edit">修改</a>
          <a  class="layui-btn layui-btn-danger layui-btn-mini" href="orders_show.php?id=<?php echo $row['id']; ?>"  >发货</a>
          <a  class="layui-btn layui-btn-danger layui-btn-mini" href="orders_refush.php?taoid=<?php echo $row['taoid']; ?>"  >退款</a>
          <a  class="layui-btn layui-btn-danger layui-btn-mini" href="orders_show.php?id=<?php echo $row['id']; ?>"  >查看</a>
        </td>
      </tr>
    </tbody>
    <?php   }

      ?>
        </table>
      <?php   echo'<div class="layui-laypage">'. $page.'</div>' ; ?>


    </body>
    </html>



<?php  }?>
