<?php
/* conexipon a mysql */
$link =mysqli_connect("localhost","root","","datos23");
//comprobamos conexión   7
if($link === 0){
    echo "error";
}
//consulta 
$consulta = " SELECT * FROM formulario " ;
$resultado = $link->query($consulta);  
// encabezado de la tabla
echo '<table border="1">';
echo '<tr>';
echo '<th>Clave</th>';
echo '<th>Nombre</th>';
echo '<th>Teléfono</th>';
echo '<th>Mensaje</th>';
echo'</tr>';
//recorremos c/u registros
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['id'].'</td>' ; 
    echo  '<td>'.$fila['nombre'].'</td>' ; 
    echo  '<td>'.$fila['telefono'].'</td>' ; 
    echo  '<td>'.$fila['msj'].'</td>' ; 

echo '</tr>';
}

?>