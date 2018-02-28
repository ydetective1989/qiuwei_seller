<?php include("config.php") ; ?>
<?php
if($_POST){
  $name=$_POST['name'];
  $qq=$_POST['qq'];
  $narture=$_POST['narture'];
  $talk=$_POST['talk'];

  $arr=array(
    'name' => $name,
    'qq' => $qq,
    'narture' => $narture,
    'talk' => $talk
  );
  $db->insert('brand',$arr);
  echo"添加成功";
}else{?>
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
<form class="layui-form" action="add_brand.php" method="post">
  <div class="layui-form-item">
    <label class="layui-form-label">品牌名</label>
    <div class="layui-input-inline">
      <input type="text" id="name" name="name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">QQ群号</label>
    <div class="layui-input-inline">
        <input type="text" id="qq" name="qq" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">主卖类目</label>
    <div class="layui-input-inline">
      <select id="narture" name="narture" lay-verify="required">
        <option value=""></option>
        <option value="牛仔">牛仔</option>
        <option value="休闲">休闲</option>
      </select>
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
<?php } ?>
