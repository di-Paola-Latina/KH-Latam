<?php
 header("Content-Type: text/html;charset=utf-8");

//Empresas
$retails = array( "Jumbo", "Unimarc", "Lider");

//Comunas
$comunas = array( 
    "Jumbo" => array(
        "Macul", "Peñalolén", "Valparaiso"
    ),
    "Unimarc" => array(
        "Macul", "Peñalolén"
    ),
    "Lider" => array(
        "Peñalolén", "Valparaiso"
    )
);

//Tiendas
$tiendas[0] = array (
    "retail" => "Jumbo",
    "comuna" => "Macul",
    "titulo" => "Jumbo Macul",
    "direccion" => "Avenida Test 123"
);

$tiendas[1] = array (
    "retail" => "Jumbo",
    "comuna" => "Valparaiso",
    "titulo" => "Jumbo Barón",
    "direccion" => "Calle Valpo 123"
);

?>