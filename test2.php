<?php include 'config.php'; ?>
<?php
if(isset($_POST['iteam'])&&!empty($_POST['iteam'])){
$iteam = $_POST['iteam'];
?>
<div class="layui-form-item">
  <label class="layui-form-label">价格</label>
  <div class="layui-input-inline">
    <?php
echo '<input type="text" class="layui-input" value="'.$iteam.'" name="product[]" >';
echo '<input type="text" class="layui-input" value="1" name="count" > ';
echo "</div>";
}
?>
<?php
if(isset($_POST['name'])&&!empty($_POST['name'])){
$name = $_POST['name'];
$name= explode("||",$name);
//echo '<input type="checkbox"  name="check" > ';
echo '<input type="text" value="'.$name['1'].'" name="name[]" id="idteamname" >';
echo '<input type="text" value="'.$name['0'].'" name="id[]" id="iteamid" >';
echo '<input type="text" value="1" name="total[]" id="total"> ';
}
?>
