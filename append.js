var x = document.getElementById("products");
  x.onclick = function(){
    var e = e || window.event;
    var target = e.target || e.srcElement;
    if(target.nodeName == "BUTTON"){
      target.parentNode.parentNode.parentNode.removeChild(target.parentNode.parentNode);
    }
}

    // function del(thisis){
    //   var n = window.confirm("确认是否删除?");
    //   if(n == true){
    //   thisis.parentNode.parentNode.parentNode.removeChild(thisis.parentNode.parentNode);
    // }
