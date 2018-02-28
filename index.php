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
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">layui 后台布局</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a target="main" href="bill.php">订单</a></li>
      <li class="layui-nav-item"><a target="main" href="iteamindex.php">商品</a></li>
      <li class="layui-nav-item"><a target="main" href="listcount.php">销售统计</a></li>

    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          贤心
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <?php
      if(isset($_COOKIE['user'])){
        $name=$_COOKIE['user'];?>
        <li class="layui-nav-item"><a href="loginout.php">登出</a></li>
      <?php }else{?>
        <li class="layui-nav-item"><a href="login.php">请登录</a></li>
    <?php  }?>

    </ul>
  </div>
  <div class="layui-body-left layui-bg-cyan">
    <!-- 内容主体区域 -->

          <iframe class="layui-col-md12" src="bill.php" name="main" height="1500"   scrolling= "no" frameborder="0"></iframe>

  </div>



  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
  </div>
</div>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;

});
</script>
</body>
</html>
