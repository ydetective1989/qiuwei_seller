<?php include("config.php"); ?>
<?php include 'head.php'; ?>
 <table id="demo" lay-filter="test"></table>

<script>
layui.use('table', function(){
  var table = layui.table;

  //第一个实例
  table.render({
    elem: '#demo'
    ,height: 900
    ,url: 'json.php' //数据接口
    ,page: true //开启分页
    ,cols: [[ //表头
      {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'}
      ,{field: 'orderid', title: '用户名', width:80}
      ,{field: 'productid', title: '性别', width:80, sort: true}
      ,{field: 'title', title: '城市', width:80}
      ,{field: 'count', title: '城市', width:80}
      ,{field: 'price', title: '城市', width:80}
    ]]
  });
});
</script>
