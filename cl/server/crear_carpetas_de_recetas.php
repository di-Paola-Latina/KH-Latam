<?php
include "recetas_info.php";
$contar_recetas = count($recetas);
$fichero = 'C:/AppServ/www/kingshawaiian/recetas/demo/index.php';

for($i=0;$i<$contar_recetas;$i++){
    //PRIMERO CREO LA CARPETA
    $url = $recetas[$i]['link'];
    $estructura = "../recetas/".$url;

  // if(!mkdir($estructura, 0777, true)) {
       // die('Fallo al crear las carpetas...'. $estructura);
        $nuevo_fichero = "C:/AppServ/www/kingshawaiian/recetas/".$url."/index.php";
        if (!copy($fichero, $nuevo_fichero)) {
            echo "Error al copiar $fichero...\n";
        }
    //}
}


 
 