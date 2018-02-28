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

<div class="layui-side layui-bg-black">
  <div class="layui-side-scroll">
    <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
    <ul class="layui-nav layui-nav-tree"  lay-filter="test">
      <li class="layui-nav-item ">
        <a class="" href="javascript:;">状态</a>
        <dl class="layui-nav-child">
          <dd><a target="admin" href="playerdate.php">基础数据</a></dd>
          <dd><a target="admin" href="weaponequiped.php">武器</a></dd>
          <dd><a target="admin" href="defequiped.php">防具</a></dd>
          <dd><a target="admin" href="shoesequiped.php">鞋子</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item ">
        <a href="javascript:;">道具</a>
        <dl class="layui-nav-child">
          <dd><a target="admin" href="water_list.php">药水</a></dd>
          <dd><a href="javascript:;">任务用品</a></dd>
          <dd><a href="">超链接</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">云市场</a></li>
      <li class="layui-nav-item"><a href="">发布商品</a></li>
    </ul>
  </div>
</div>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div   style="padding: 15px;"><iframe class="layui-container" src="playerdate.php" height="800" name="admin"  scrolling= "no" frameborder="0"></iframe></div>
</div>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;

});
</script>
</body>
</html>
