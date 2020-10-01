<?php

function LoadTableEasy($conn,$query,$arreglo,$ArregloButtons,$Iconos,$Colores,$Metodos,$deleteAll){

$checks="";
$Acciones="";
$table="";
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0) {
for($i=0;$i<count($arreglo);$i++){

    while($row = $result->fetch_assoc()) {
if($deleteAll==0){
$checks="";
}else if ($deleteAll==1){
$checks="<input type='checkbox'  data-id=".$row[$arreglo[0]]."  />";
}
if($ArregloButtons==0){
$Acciones="";
}else if($ArregloButtons==1){
$Acciones="<div class='col-lg-8 col-12 text-center mt-3 mb-3'><a id='update' data-toggle='tooltip' data-placement='top' title='Aqui puede Actualizar el registro que desee' onclick='".$Metodos[0]."(".$row[$arreglo[0]].",1)' data-tooltip title='Actualiza el registro' style='cursor:pointer'  class='".$Colores[0]."'  ><i class='".$Iconos[0]."'></i></a></div><div class='col-lg-4 col-12 text-center'>".$checks."</div>";
}else if($ArregloButtons==2){
$Acciones="<div class='col-lg-4 col-12 text-center mt-3 mb-3'><a id='update' data-toggle='tooltip' data-placement='top' title='Aqui puede Actualizar el registro que desee' onclick='".$Metodos[0]."(".$row[$arreglo[0]].",1)' data-tooltip title='Actualiza el registro' style='cursor:pointer'  class='".$Colores[0]."''  ><i class='".$Iconos[0]."'></i></a></div><div class='col-lg-4 col-12 text-center mt-3 mb-3'><a id='delete'  data-toggle='tooltip' data-placement='top' title='Aqui puedes eliminar este registro.' onclick='".$Metodos[1]."(".$row[$arreglo[0]].")'   class='".$Colores[1]."'' style='cursor:pointer'  ><i class='".$Iconos[1]."'></i></a></div><div class='col-lg-4 col-12 text-center'>".$checks."</div>";
}else if($ArregloButtons==3){
$Acciones="<div class='col-lg-3 col-4 text-center mt-3 mb-3'><a id='update' data-toggle='tooltip' data-placement='top' title='Aqui puede Actualizar el registro que desee' onclick='".$Metodos[0]."(".$row[$arreglo[0]].",1)' data-tooltip title='Actualiza el registro' style='cursor:pointer'  class='".$Colores[0]."''  ><i class='".$Iconos[0]."'></i></a></div><div class='col-lg-3 col-4 text-center mt-3 mb-3'><a id='delete'  data-toggle='tooltip' data-placement='top' title='Aqui puedes eliminar este registro.' onclick='".$Metodos[1]."(".$row[$arreglo[0]].")'   class='".$Colores[1]."'' style='cursor:pointer'  ><i class='".$Iconos[1]."'></i></a></div><div class='col-lg-3 col-4 text-center mt-3 mb-3'><a id='detail' data-toggle='tooltip' data-placement='top' title='Aqui puede ver el detalle del registro y no puede alterar nada' onclick='".$Metodos[2]."(".$row[$arreglo[0]].",2)' data-tooltip title='Ve l detalle de registro' style='cursor:pointer' class='".$Colores[2]."''><i class='".$Iconos[2]."'></i></a></div><div class='col-lg-3 col-12 text-center'>".$checks."</div>";
}

      $table.="<tr>";
       $table.= "<td>".$row[$arreglo[1]]."</td><td>".$row[$arreglo[2]]."</td><td>".$row[$arreglo[3]]."</td><td>".$row[$arreglo[4]]."</td><td><div class='col-lg-12'><div class='row'>".$Acciones."</div></div></td>";
       $table.="</tr>";
    }


}
} 

return $table;

}


?>
