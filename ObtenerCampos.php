<?php


function getUpdate($tabla,$Arreglo,$id,$campo){
$sql="Select ";
$coma=",";
$conta=0;
foreach ($Arreglo as $key) {
   if($conta == count($Arreglo)-1) { 
$coma="";
    } 
$sql.=$key." ".$coma;
$conta++;
}

$sql.="from ".$tabla." where ".$campo." = ".$id;


return $sql;

}


?>
