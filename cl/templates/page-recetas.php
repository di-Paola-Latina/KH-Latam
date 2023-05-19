<?php
include "../server/productos_info.php";
$contar_productos = count($productos);
//echo $contar_productos;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="row no-gutters bg-light pt-3 mb-5">
    <div class="col-12 container-general">
        <div class="row no-gutters">
            <div class="col-12 ">
                <h5 class="text-left marron h5 mx-5 my-5 pl-md-3"><b>Busca por tipo de pan</b></h5>
            </div>
            <div class="col-md-3 text-center">
                <a href="#" onclick="filterSelection('sliced');">
                    <img src="../img/home/recetas/SLICED.png"/>
                </a>
                <h6 class="h6-simple marron mt-3">Pan de molde</h6>
            </div>
            <div class="col-md-3 text-center">
                <a href="#" onclick='filterSelection("rolls")'>
                    <img src="../img/home/recetas/DINNER.png"/>
                </a>
                <h6 class="h6-simple marron mt-3">Dinner Rolls</h6>
            </div> 
            <div class="col-md-3 text-center">
                <a href="#" onclick='filterSelection("hamburguesa")'>
                    <img src="../img/home/recetas/BURGER.png"/>
                </a>
                <h6 class="h6-simple marron mt-3">Hamburger Buns</h6>
            </div> 
            <div class="col-md-3 text-center">
                <a href="#" onclick='filterSelection("hotdog")'>
                    <img src="../img/home/recetas/HOTDOG.png"/>
                </a>
                <h6 class="h6-simple marron mt-3">Hot Dog Buns</h6>
            </div>
        </div>        
    </div>
</div>    


    

        
    