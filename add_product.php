<?php include 'config.php'; ?>
<select id="iteam" required   name="iteam" lay-verify="required" multiple="multiple"  >
  <?php
  $query="SELECT * FROM iteam  WHERE hide=1 ";
  $query=$db->getRows($query);
  if($query){
    foreach($query as $row){
      echo   '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
  }else{
    echo'<option disabled value="">请添加商品</option>';
  }?>
</select>
  <input class="layui-btn" type="button" value="选取商品" onclick="btgod()" >
