<?php include 'config.php';?>
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
<form class="layui-form" action="test.php" method="post">
<div class="layui-form-item">
  <label class="layui-form-label">购买商品</label>
  <div class="layui-input-inline">
    <select id="iteam" name="iteam" lay-verify="required">
      <option value="0"></option>
      <?php
      $query="SELECT * FROM iteam WHERE hide=1 ";
      $query=$db->getRows($query);
      if($query){
        foreach($query as $row){
          echo   '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
      }else{
        echo'<option disabled value="">请添加商品</option>';
      }?>
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
<script>
layui.use('form',function(){
var form = layui.form;
});
</script>
