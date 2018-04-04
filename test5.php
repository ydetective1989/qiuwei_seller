<?php
$array = explode(',', 'apple,banana,watermelon');
print_r($array);
 ?>
<button type="button" >删除</button>
全选：<input type="checkbox" name="" value="">
<div class="">
  <div><input type="checkbox" name="" value="">11</div>
  <div><input type="checkbox" name="" value="">22</div>
  <div><input type="checkbox" name="" value="">33</div>
  <div><input type="checkbox" name="" value="">44</div>
  <div><input type="checkbox" name="" value="">55</div>
  <div><input type="checkbox" name="" value="">66</div>
</div>
<script type="text/javascript">
var div = document.getElementsByTagName("div")[0];
var checkbox = div.getElementsByTagName("input");
var checkall = document.getElementsByTagName("input")[0];
var len = checkbox.length;
var button = document.getElementsByTagName("button")[0];
checkall.addEventListener("change",choseall,false);
checkall.addEventListener("change",cancelall,false);
function choseall(){
  if(checkall.checked == true){
    for(var i = 0 ; i < len; i ++){
      if(checkbox[i]){
        checkbox[i].checked = true;
      }
    }
  }
}
function cancelall(){
  if(checkall.checked == false){
    for(var i = 0 ; i < len; i ++){
      if(checkbox[i]){
        checkbox[i].checked = false;
      }
    }
  }
}

function checked(){
  for(var i = len -1 ; i >= 0; i --){
    if(checkbox[i] && checkbox[i].checked == true){
      checkbox[i].parentNode.parentNode.removeChild(checkbox[i].parentNode);
    }
  }
}
button.addEventListener("click",checked,false);


</script>
