<?php include("config.php"); ?>
<?php
if(isset($_GET['taoid'])){
  $taoid=$_GET['taoid'];?>
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
  <form class="layui-form" action="" method="post">

    <div class="layui-form-item">
      <label class="layui-form-label">订单状态</label>
      <div class="layui-input-inline">
        <select id="reson" required   name="reson">
          <option value="0"></option>
          <option value="1">已付款</option>
          <option value="2">已发货</option>
          <option value="3">已拒收</option>
          <option value="4">已退货</option>
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
</body>
</html>

  <?php
  if(isset($_POST['reson'])){
    $reson=$_POST['reson'];
    switch ($reson) {
      case '1':
      $state==5;
      if($_POST['talk']){
      $arr = array(
        'taoid' => $taoid,
        'reson' => $reson,
        'talk' => $talk
      );
      $db->insert('orders_refush',$arr);

      $array =array(
        'state' => 5
      );

      $where = array(
        'taoid' => $taoid
      );
      $db->update('orders',$array,$where);

      echo "提交成功";
    }else{?>
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
      <form class="layui-form" action="" method="post">


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
  </body>
  </html>

  <?php  }
        break;

        case '2':
        $state==2;
        if(isset($_POST['postname'])){
        $postname=$_POST['postname'];
        $postnum=$_POST['postnum'];
        $talk=$_POST['talk'];
        $arr = array(
          'taoid' => $taoid,
          'reson' => $reson,
          'postname' => $postnum,
          'postnum' => $postnum,
          'talk' => $talk
        );
        $db->insert('orders_refush',$arr);

        $array =array(
          'state' => 4
        );

        $where = array(
          'taoid' => $taoid
        );
        $db->update('orders',$array,$where);

        echo "提交成功";

      }else{?>
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
        <form class="layui-form" action="" method="post">

          <div class="layui-form-item">
            <label class="layui-form-label">快递公司</label>
            <div class="layui-input-inline">
              <select id="postname" required   name="postname">
                <option value="0"></option>
                <option value="1">韵达快递</option>
                <option value="2">中通快递</option>
                <option value="3">圆通快递</option>
                <option value="4">顺丰快递</option>
              </select>
            </div>
          </div>

          <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">快递单号</label>
            <div class="layui-input-block">
              <textarea id="postnum" name="postnum" placeholder="请输入内容" class="layui-textarea"></textarea>
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
    </body>
    </html>

<?php  }
          break;
          case '3':
          $state==4;
          if(isset($_POST['postname'])){


            $arr = array(
              'taoid' => $taoid,
              'reson' => $reson,
              'postname' => $postnum,
              'postnum' => $postnum,
              'talk' => $talk
            );
            $db->insert('orders_refush',$arr);

            $array =array(
              'state' => 4
            );

            $where = array(
              'taoid' => $taoid
            );
            $db->update('orders',$array,$where);

            echo "提交成功";
          }else{ ?>
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
            <form class="layui-form" action="" method="post">

              <div class="layui-form-item">
                <label class="layui-form-label">快递公司</label>
                <div class="layui-input-inline">
                  <select id="postname" required   name="postname">
                    <option value="0"></option>
                    <option value="1">韵达快递</option>
                    <option value="2">中通快递</option>
                    <option value="3">圆通快递</option>
                    <option value="4">顺丰快递</option>
                  </select>
                </div>
              </div>

              <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">快递单号</label>
                <div class="layui-input-block">
                  <textarea id="postnum" name="postnum" placeholder="请输入内容" class="layui-textarea"></textarea>
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
        </body>
        </html>


      <?php    }

            break;

            case '4':
            $state==4;
            if(isset($_POST['talk'])){
              $arr = array(
                'taoid' => $taoid,
                'reson' => $reson,
                'talk' => $talk
              );
              $db->insert('orders_refush',$arr);

              $array =array(
                'state' => 5
              );

              $where = array(
                'taoid' => $taoid
              );
              $db->update('orders',$array,$where);

              echo "提交成功";
            }else{ ?>
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
              <form class="layui-form" action="" method="post">


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
          </body>
          </html>

    <?php  }

              break;
      default:
        echo"请选择退款原因";
        break;
    }
  } ?>
<script>
//Demo
layui.use('form', function(){
  var form = layui.form;

  //监听提交

});
</script>

<?php
}else{
  echo"请提供正确的订单编号";
} ?>
