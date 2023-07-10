<?php
/* conexión a MYSQL desde PHP */
                     //dir del servidor  usuario   contraseña  nombre de la bd
$link= mysqli_connect("localhost","root","","datos23");
// revisamos si hay conexión
if ($link === 0 ) {
    echo "no hay conexión";
} else {
  //echo "succesfull conection";   
// crear 4 variables para enviar a la bd
$nombre = $_POST["nombre"];
$telefono =$_POST["tel"];
$email =$_POST["email"];
$mensaje=$_POST["msj"];
//consulta  INSERT a MYSQL
 $insertar= " insert into formulario  (nombre, telefono, correo, msj)      VALUES ('$nombre','$telefono', '$email','$mensaje') " ;
//corroborar 
if  (mysqli_query($link,$insertar )){
    echo"datos insertados exitosamente";
}else {
    echo "error: ".mysqli_error($link);
}
//cerramos conexión
mysqli_close($link);
}
?>