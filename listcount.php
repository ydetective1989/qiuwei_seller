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
        <a class="" href="javascript:;">订单统计</a>
        <dl class="layui-nav-child">
          <dd><a target="admin" href="listcount_order.php">统计详情</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item ">
        <a href="javascript:;">商品统计</a>
        <dl class="layui-nav-child">
          <dd><a target="admin" href="listcount_cloth.php">类别</a></dd>

        </dl>
      </li>

      <li class="layui-nav-item ">
        <a href="javascript:;">品牌统计</a>
        <dl class="layui-nav-child">
          <dd><a target="admin" href="listcount_brand.php">品牌统计</a></dd>


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
