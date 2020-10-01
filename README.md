# AutoMatizacion_Native
Funciones o clases que ayuden a crear o hacer cosas mas rapidamente en PHP nativo


Usar la funcion de insercion facil:

$ArrayInsertByMany=[];
$ArrayInsertByMany[0]=$usuario;
$ArrayInsertByMany[1]=$Accion;
$ArrayInsertByMany[2]=$pantalla;
$ArrayInsertByMany[3]=$rol;
$ArrayInsertByMany[4]=1;

$sql=InsertEasy("Nombre_Tabla",$ArrayInsertByMany);



Usar la eliminacion de muchos registros de un datatable

$_POST["ids"]="Un arreglo de id's obtenidos de la tabla";

$sql= deleteAll("tb_Usuario",$_POST["ids"],"idUsuario");


Usar la eliminacion de un solo usuario:

$sql= deleteItem("tb_Usuario",$_POST["id"],"idUsuario");

Usar la funcion de cargar tablas de forma facil

$Iconos=[];
array_push($Iconos, "fas fa-edit","fas fa-trash","fas fa-asterisk");
$Colores=[];
array_push($Colores, "text-success","text-danger","text-info");
$Metodos=[];
array_push($Metodos, "getUpdate","deleteItem","getUpdate");
$FieldsVisible=array("idUsuario","NombreUsuario", "ApellidoP", "Celular","Nick");
$table= LoadTableEasy($conn,"consulta`",$FieldsVisible,3,$Iconos,$Colores,$Metodos,1);


Usar la funcion para obtener campos especificos

$FieldsVisible=array("email","Celular","Edad","Sexo","Calle","Colonia","NumeroCasa","Nick","Pass","Rol","RutaImgPerfil","idUsuario");
$sql= getUpdate("tb_Usuario",$FieldsVisible,$_POST["id"],"idUsuario");

Usar la funcion para actualizar campos:

$FieldsVisible=array("email","Celular","Edad","Sexo","Calle","Colonia","NumeroCasa","Nick","Rol","RutaImgPerfil","Img_Product");
$sql= update("tb_Usuario",$FieldsVisible,$_POST["id"],"idUsuario",$ArrayUpdate);

