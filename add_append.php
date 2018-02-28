<?php include 'config.php'; ?>
<?php
if(isset($_POST['iteam'])&&!empty($_POST['iteam'])){
$iteam = $_POST['iteam'];
$query = "SELECT * FROM iteam WHERE id = '$iteam'";
$iteam = $db->getRow($query);

?>

      <tr>
      <td><?php echo '<input type="hidden" class="layui-input" value="'.$iteam['id'].'" name="productid[]" >';?><?php echo $iteam['id'] ;?></td>
      <td><?php echo '<input type="hidden" class="layui-input" value="'.$iteam['name'].'" name="product[]" >';?><?php echo $iteam['name'] ;?></td>
      <td><?php echo '<input type="text" class="layui-input" value="1" name="count[]" > ';?></td>
      <td><?php echo '<input type="text" class="layui-input" value="" name="price[]" > '; ?></td>
      <td><?php echo '<button type="button" onclick="del(this)">X</button>'; ?></td>
      </tr>

<?php } ?>
