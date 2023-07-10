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
//recorremos c/u registros
echo '<table border="1">';
while ($fila = $resultado->fetch_assoc()){
    echo '<tr>';   /* fila de nuestra tabla */ 
    echo  '<td>'.$fila['id'].'<td>' ; 

echo '</tr>';
}

?>