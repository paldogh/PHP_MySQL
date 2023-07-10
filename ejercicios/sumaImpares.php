<?php
/*devuelve la suma 
números impares 
 del 1 al 11 */
 $suma=0;
for ($i=1; $i <=11; $i++) { 
    if ($i % 2 ==1) {
  $suma= $i  +$suma;
}
}
echo $suma."";
?>