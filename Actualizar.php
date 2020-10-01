<?php

function Update($tabla,$Arreglo,$id,$campo,$Updates){
$sql="Update ".$tabla." set ";
$coma=",";
$conta=0;
foreach ($Updates as $key) {
   if($conta == count($Updates)-1) { 
$coma="";
    } 
$sql.= $Arreglo[$conta]." = '".$Updates[$conta]."' ".$coma;
$conta++;
}

$sql.=" where ".$campo." = ".$id;


return $sql;
}


?>
