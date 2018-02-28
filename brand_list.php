<?php include("config.php"); ?>
<?php include('head.php'); ?>
<table class="layui-table" lay-even="" lay-skin="line">
  <colgroup>
    <col width="50">
    <col width="100">
    <col width="50">
    <col width="50">
    <col width="50">
    <col width="50">
    <col width="50">
    <col width="100">
  </colgroup>
  <thead>
    <tr>
      <th>ID</th>
      <th>品牌名</th>
      <th>QQ号</th>
      <th>主卖类目</th>
      <th>描述</th>
      <th>说明</th>
      <th>是否上线</th>
      <th>操作</th>
    </tr>
  </thead>
  <?php
  $query="SELECT * FROM brand WHERE hide=1  ";
  $query=$db->getPageRows($query,5);
  $list=$query['record'];
  $page=$query['pages'];
  foreach($list as $row){
    ?>
    <tbody>
    <tr>
    <td ><?php echo $row['id'];?></td>
    <td ><?php echo $row['name'];?></td>
    <td ><?php echo $row['qq'];?></td>
    <td ><?php echo $row['narture'];?></td>
    <td ><?php echo $row['talk'];?></td>
    <td ><?php echo $row['talk'];?></td>
    <td ><?php echo $row['hide'];?></td>
  <td>
      <a href="blogupdate.php?id=<?php echo $id ;?>" class="layui-btn layui-btn-mini" lay-event="edit">修改</a>
      <a  class="layui-btn layui-btn-danger layui-btn-mini" onclick="del(<?php echo $id ;?>)"  >状态</a>
    </td>
  </tr>
</tbody>
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
