<?php include 'config.php'; ?>
<?php
$query = "SELECT * FROM iteam ";
$query = $db->getPageRows($query);
$list = $query['record'];
$page = $query['pages'];
if($query){?>
  <form action="" method="post">
  <select name="name" id="name">
    <?php
  foreach($list as $row){?>
    <option value="<?php echo $row['id'];?>||<?php echo $row['name'];?>"><?php echo $row['name'];?></option>;
  <?php }?>
</SELECT>
<input type="button" value="添加" onclick="btgod()" >
</form>
<script>
function btgod(){
     //按钮单击时执行
           //Ajax调用处理
           var names = $("#name").val();

         $.ajax({
            type: "POST",
            async: false,
            url: "test2.php",
            data: "name="+names,
            success: function(date){
             $("#myDiv").append(date);
               }
         });
      };
</script>
  <?php
}

 ?>
