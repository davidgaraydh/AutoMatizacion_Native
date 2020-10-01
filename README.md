# AutoMatizacion_Native
Funciones o clases que ayuden a crear o hacer cosas mas rapidamente en PHP nativo


**Usar la funcion de insercion facil:**

$ArrayInsertByMany=[];


&nbsp;
$ArrayInsertByMany[0]=$usuario;


&nbsp;
$ArrayInsertByMany[1]=$Accion;


&nbsp;
$ArrayInsertByMany[2]=$pantalla;


&nbsp;
$ArrayInsertByMany[3]=$rol;


&nbsp;
$ArrayInsertByMany[4]=1;


&nbsp;

$sql=InsertEasy("Nombre_Tabla",$ArrayInsertByMany);


&nbsp;

**Usar la eliminacion de muchos registros de un datatable**

$_POST["ids"]="Un arreglo de id's obtenidos de la tabla";


&nbsp;

$sql= deleteAll("tb_Usuario",$_POST["ids"],"idUsuario");


&nbsp;


**Usar la eliminacion de un solo usuario:**

$sql= deleteItem("tb_Usuario",$_POST["id"],"idUsuario");


&nbsp;

**Usar la funcion de cargar tablas de forma facil**

$Iconos=[];


&nbsp;
array_push($Iconos, "fas fa-edit","fas fa-trash","fas fa-asterisk");


&nbsp;
$Colores=[];


&nbsp;
array_push($Colores, "text-success","text-danger","text-info");


&nbsp;
$Metodos=[];


&nbsp;
array_push($Metodos, "getUpdate","deleteItem","getUpdate");


&nbsp;
$FieldsVisible=array("idUsuario","NombreUsuario", "ApellidoP", "Celular","Nick");


&nbsp;
$table= LoadTableEasy($conn,"consulta",$FieldsVisible,3,$Iconos,$Colores,$Metodos,1);


&nbsp;


**Usar la funcion para obtener campos especificos**

$FieldsVisible=array("email","Celular","Edad","Sexo","Calle","Colonia","NumeroCasa","Nick","Pass","Rol","RutaImgPerfil","idUsuario");


&nbsp;
$sql= getUpdate("tb_Usuario",$FieldsVisible,$_POST["id"],"idUsuario");


&nbsp;

**Usar la funcion para actualizar campos:**

$FieldsVisible=array("email","Celular","Edad","Sexo","Calle","Colonia","NumeroCasa","Nick","Rol","RutaImgPerfil","Img_Product");


&nbsp;
$sql= update("tb_Usuario",$FieldsVisible,$_POST["id"],"idUsuario",$ArrayUpdate);

