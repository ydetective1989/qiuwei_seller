<?php include 'config.php'; ?>
<?php
extract($_POST);
if($username){$where .="AND name LIKE '%".$username."%' ";}
if($phone){$where .="AND phone LIKE '%".$phone."%' ";}
if($taoid){$where .="AND taoid=$taoid ";}
if($wangwang){$where .="AND wangwang LIKE '%".$wangwang."%'";}
if($where==""){echo "请输入查询条件"; return;}
$query = "SELECT * FROM orders WHERE 1=1 $where";
$rows = $db->getRows($query);
if($rows){
  foreach($rows as $row){
    echo $row['id']."<br>";
    echo $row['name']."<br>";
    echo $row['address']."<br>";
  }
}
?>
