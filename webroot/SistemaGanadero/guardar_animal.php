<?php

include("conexion.php");

$arete=$_POST['arete'];
$peso_inicial=$_POST['peso_inicial'];
$peso_final=$_POST['peso_final'];
$dias=$_POST['dias'];
$costo=$_POST['costo'];
$precio=$_POST['precio'];
$origen=$_POST['origen'];

$nombreFoto=$_FILES['foto']['name'];
$rutaTemporal=$_FILES['foto']['tmp_name'];

$rutaDestino="fotos_animales/".$nombreFoto;

move_uploaded_file($rutaTemporal,$rutaDestino);

$sql="INSERT INTO animales
(arete,peso_inicial,peso_final,dias_confinamiento,costo_inicial,precio_final,origen,foto)

VALUES
('$arete','$peso_inicial','$peso_final','$dias','$costo','$precio','$origen','$rutaDestino')";

mysqli_query($conexion,$sql);

echo "Animal registrado correctamente";

?>