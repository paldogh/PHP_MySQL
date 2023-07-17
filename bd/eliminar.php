<?php
//conexión a mysql
$link=mysqli_connect("localhost","root","","datos23");
//recoger el valor del html
$clave  = $_POST["clave"];
/*consulta eliminar */
 $elimina="DELETE FROM formulario WHERE id = '$clave' ";
    if (mysqli_query($link, $elimina)) {
        echo '<script type="text/javascript">
        alert("Delete successfully");
        window.location.href="consulta.php";
        </script> ';
    } else {
        echo "error".mysqli_error($link);
    }
    mysqli_close($link);
?>
