<?php include("config.php"); ?>
<?php include('head.php'); ?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-3.2.1.min.js" >
</script>
<script type="text/javascript" src="layui.js" >
</script>
<link rel="stylesheet" href="css\layui.css">
</head>
<body class="layui-layout-body">

<form class="layui-form" action="iteam_list.php" method="post">
  <div class="layui-form-item">
    <label class="layui-form-label">品牌</label>
    <div class="layui-input-inline">
      <select id="factory" name="factory" >
        <option value="">请选择品牌</option>
  <?php
  $brand="SELECT * FROM brand WHERE hide=1";
  $brand=$db->getRows($brand);
  foreach($brand as $row){
    $brands=$row['name'];
      echo '<option value="'.$brands.'">'.$brands.'</option>';
  }
   ?>
 </select>
</div>
</div>

<div class="layui-form-item">
 <label class="layui-form-label">性别</label>
 <div class="layui-input-inline">
   <select id="sex" name="sex" >
     <option value="">请选择性别</option>
     <option value="男">男</option>
     <option value="女">女</option>
</select>
</div>
</div>

<div class="layui-form-item">
  <label class="layui-form-label">属性</label>
  <div class="layui-input-inline">
    <select id="cloth" name="cloth" >
      <option value="">请选择属性</option>
<?php
$cloths="SELECT DISTINCT cloth FROM iteam WHERE hide=1";
$cloths=$db->getRows($cloths);
foreach($cloths as $row){
  $clothes=$row['cloth'];
    echo '<option value="'.$clothes.'">'.$clothes.'</option>';
}
 ?>
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
//Demo
layui.use('form', function(){
  var form = layui.form;

  //监听提交

});
</script>

<table class="layui-table" lay-even="" lay-skin="line">
  <colgroup>
    <col width="50">
    <col width="100">
    <col width="50">
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
      <th>名字</th>
      <th>属性</th>
      <th>性别</th>
      <th>厂家</th>
      <th>进货单价</th>
      <th>说明</th>
      <th>是否上线</th>
      <th>操作</th>
    </tr>
  </thead>
</body>
</html>
<?php if($_POST){
  $name=$_POST['name'];
  $cloth=$_POST['cloth'];
  $sex=$_POST['sex'];
  $factory=$_POST['factory'];
  $price=$_POST['price'];
  $talk=$_POST['talk'];
?>

  <?php
  $where="";
  if($sex!=""){
    $where.="AND sex='$sex'";
  }
  if($factory!=""){
    $where.="AND factory='$factory'";
  }
  if($cloth!=""){
    $where.="AND cloth='$cloth'";
  }
  $query="SELECT * FROM iteam WHERE 1=1 $where  ";
  $query=$db->getPageRows($query,5);
  $list=$query['record'];
  $page=$query['pages'];
  foreach($list as $row){
    ?>
    <tbody>
    <tr>
    <td ><?php echo $row['id'];?></td>
    <td ><?php echo $row['name'];?></td>
    <td ><?php echo $row['cloth'];?></td>
    <td ><?php echo $row['sex'];?></td>
    <td ><?php echo $row['factory'];?></td>
    <td ><?php echo $row['price'];?></td>
    <td ><?php echo $row['talk'];?></td>
    <td ><?php echo $row['hide'];?></td>
  <td>
      <a href="blogupdate.php?id=<?php echo $id ;?>" class="layui-btn layui-btn-mini" lay-event="edit">修改</a>
      <a class="layui-btn layui-btn-danger layui-btn-mini" onclick="del(<?php echo $id ;?>)"  >查看</a>
    </td>
  </tr>
</tbody>
<?php   }

  ?>
    </table>
  <?php   echo'<div class="layui-laypage">'. $page.'</div>' ; ?>

<?php } ?>
