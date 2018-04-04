<?php

$name = str_replace(strtolower(trim(substr(strrchr($_SERVER["PHP_SELF"], '/'),1))),"",$_SERVER["PHP_SELF"]);

// echo substr(strrchr($_SERVER["PHP_SELF"],"/"),1);
echo $_SERVER["PHP_SELF"];
// echo $name;
echo $_SERVER['REQUEST_URI'];
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['HTTP_REFERER'];

 ?>
