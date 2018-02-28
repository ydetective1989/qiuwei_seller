<?php include("config.php") ; ?>
<?php
if($_POST){
  $name=$_POST['name'];
  $cloth=$_POST['cloth'];
  $sex=$_POST['sex'];
  $factory=$_POST['factory'];
  $price=$_POST['price'];
  $talk=$_POST['talk'];

  $arr=array(
    'name' => $name,
    'cloth' => $cloth,
    'sex' => $sex,
    'factory' => $factory,
    'price' => $price,
    'talk' => $talk
  );
  $db->insert('iteam',$arr);
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
<form class="layui-form" action="additeam.php" method="post">
  <div class="layui-form-item">
    <label class="layui-form-label">商品名</label>
    <div class="layui-input-inline">
      <input type="text" id="name" name="name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">穿着属性</label>
    <div class="layui-input-inline">
      <select id="cloth" name="cloth" lay-verify="required">
        <option value=""></option>
        <option value="上衣">上衣</option>
        <option value="裤子">裤子</option>
      </select>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">性别属性</label>
    <div class="layui-input-inline">
      <select id="sex" name="sex" lay-verify="required">
        <option value=""></option>
        <option value="男">男</option>
        <option value="女">女</option>
      </select>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">厂家</label>
    <div class="layui-input-inline">
      <select id="factory" name="factory" lay-verify="required">
        <option value=""></option>
        <?php
        $brand="SELECT name FROM brand WHERE hide=1 ";
        $brand=$db->getRows($brand);
        if($brand){
          foreach($brand as $row){
            echo   '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          }
        }else{
          echo'<option disabled value="">请添加品牌</option>';
        }?>
      </select>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">进货价</label>
    <div class="layui-input-inline">
      <input type="text" id="price"  name="price" required  lay-verify="required" placeholder="请输入进货价" autocomplete="off" class="layui-input">
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
