<?php

function InsertEasy($tabla,$Post){

  $sql="";
  $campos=count($Post);
  $conta=0;

$coma=",";
$sql .= "INSERT INTO ".$tabla." values(null,";

foreach ($Post as $key) {
 if($conta == count($Post)-1) { 
$coma="";
    } 
      $foo = (int) $key;
if($foo!=""){
$sql .=$key.$coma;
}else{
  if(preg_match("/['']/", $key)) {
  $sql .="".$key."".$coma."";
  }else{
      $sql .="'".$key."'".$coma."";
  }

}
$conta++;
}

$sql .=",'".date("Y-m-d H:i:s")."'";
$sql .=",1";

$sql.=");";



return $sql;

}

?>
