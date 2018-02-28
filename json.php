<?php include 'config.php'; ?>
<?php
   $count = "SELECT count(id) as count FROM orders_inf";
   $count = $db->getRow($count);
   $limit = $_GET['limit'];
   $page = $_GET['page'];
   $page = ($page - 1)*$limit;
   $query = "SELECT * FROM orders_inf LIMIT $page,$limit ";
   $query = $db->getRows($query);
   $json = json_encode($query);
   echo '{"code":0,"msg":"","count":'.$count['count'].',"data":'.$json.'}';
 ?>
