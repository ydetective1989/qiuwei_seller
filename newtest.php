<style media="screen">

  ul{
    width:150px;
    height: 300px;
    position: relative;
    list-style: none;
    display: none;
    opacity: 0.5;
    box-sizing: border-box;
    transition: all 0.2s;

  }
  ul li{
    width: 150px;
    height: 30px;
    border: 1px solid black;
    position:relative;
    background: gray;
    opacity: 0.5;

  }

</style>

  <ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>

  </ul>

<input type="text" >
<script type="text/javascript">
   var e = e || window.event;
   var menu = document.getElementsByTagName("div")[0];
   var ul = document.getElementsByTagName("ul")[0];

     document.onmousedown = function(e){

       document.oncontextmenu = function(){
         return false;
       }

       if(e.button == 2){
         ul.style.left = parseInt(e.pageX) + "px";
         ul.style.top = parseInt(e.pageY) + "px";
         ul.style.display = "block";
       }
       //
      //  if(e.button == 0 || e.button == 1){
      //    ul.style.display = "none";
       //
      //  }

       ul.onmouseover = function(e){
         var target = e.target || e.srcElement;
         target.addEventListener("click",function(e){
           alert(1);
           e.stopPropagation();
         },false);

         if(target.nodeName == "LI"){
           target.style.opacity = 1;
         }
       }

       ul.onmouseout = function(e){
         var target = e.target || e.srcElement;
         if(target.nodeName == "LI"){
           target.style.opacity = 0.5;
         }
       }

     }


</script>
