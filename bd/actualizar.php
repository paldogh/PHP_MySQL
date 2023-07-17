
<?php
/* paso 1. hacer la conexión link= */
$link=mysqli_connect("localhost","root","","datos23");
//verificamos la conexión
if($link===0) {
 die ("Error ".mysqli_connect_error() );
}
/*paso 2 obtener los datos del formulario */
$id = $_POST["id"];
$nombre=$_POST["nombre"];
$telefono=$_POST["tel"];
$correo=$_POST["email"];
$mensaje=$_POST["msj"];
/*paso3 consulta */ 
$actualizar = "UPDATE formulario SET nombre='$nombre', telefono='$telefono', correo='$correo' , msj='$mensaje' WHERE id=$id     ";
/*paso4 ejecutar la consulta */
if(mysqli_query($link,$actualizar )){
    if (mysqli_affected_rows($conn) > 0) {


    echo '<script type="text/javascript">
  alert("datos actualizados :D");
window.location.href="actualizar.html"
</script>
'; 
    }else {
        echo "No se encontró un registro con el ID proporcionado.";
    
    }
}else{
    echo '<script type="text/javascript">
    alert("datos no actualizados :S");
  window.location.href="actualizar.html"
  </script>
  '; 
}
mysqli_close($link);
?>

