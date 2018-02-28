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
        <a class="" href="javascript:;">商品管理</a>
        <dl class="layui-nav-child">
          <dd><a target="admin" href="additeam.php">添加商品</a></dd>
          <dd><a target="admin" href="add_brand.php">添加品牌</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item ">
        <a target="admin" href="iteam_list.php">分类查询</a>
        <dl class="layui-nav-child">
        <dd><a target="admin" href="iteam_list.php">商品查询</a></dd>
        <dd><a target="admin" href="brand_list.php">品牌查询</a></dd>
        </dl>
      </li>


    </ul>
  </div>
</div>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div   style="padding: 15px;"><iframe class="layui-container" height="800" name="admin"  scrolling= "no" frameborder="0"></iframe></div>
</div>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;

});
</script>
</body>
</html>
