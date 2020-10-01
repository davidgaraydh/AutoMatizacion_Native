<?php


function deleteItem($tabla,$id,$campo){
$sql="DELETE FROM ".$tabla." where ".$campo." =".$id;

return $sql;
}


function deleteAll($tabla,$ids,$campo){
$sql="";
if($ids[0]=="ALL"){
$sql="DELETE FROM ".$tabla;
}else {
  $sql="DELETE FROM ".$tabla." where ";
$Conector="or";
$conta=0;
foreach ($ids as $key) {
     if($conta == count($ids)-1) { 
$Conector="";
    } 
 $sql.=$campo." =".$key."  ".$Conector."  ";
 $conta++;
}
}




return $sql;
}




?>
