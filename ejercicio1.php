<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
</head>
<body>
<?php
define('TAM',10); //definimos la constante para el tamaño
echo "<table border=1>"; //creamos la tabla
$suma=array();//Creamos un array llamado suma
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{

 for ($n2=1; $n2<=TAM; $n2++)
 {
 echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
 array_push($suma,$n=$n+1); //sumamos 1 al número mostrado para la siguiente vuelta del bucle e insertamos los valores en el array suma
 }
 echo "</tr>"; //cerramos la fila

 
}
echo "</table>";//cerramos la tabla

"</br>";

echo "La sumaa de los números del 1 al 100 es igual a ".array_sum($suma); //Mostramos el valor del array suma



?>
</body>
</html>