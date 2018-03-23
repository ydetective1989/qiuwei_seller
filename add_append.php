<?php include 'config.php'; ?>
<?php
if(isset($_POST['iteam'])&&!empty($_POST['iteam'])){
$iteam = $_POST['iteam'];
$query = "SELECT * FROM iteam WHERE id = '$iteam'";
$iteam = $db->getRow($query);

?>

      <tr>
      <td><input type="hidden" class="layui-input" value="<?php echo $iteam['id'] ; ?>" name="productid[]" ><?php echo $iteam['id'] ;?></td>
      <td><input type="hidden" class="layui-input" value="<?php echo $iteam['name']; ?>" name="product[]" ><?php echo $iteam['name'] ;?></td>
      <td><input type="text" class="layui-input" value="1" name="count[]" ></td>
      <td><input type="text" class="layui-input" value="" name="price[]" ></td>
      <td><button type="button" >X</button></td>
      </tr>

<?php } ?>
