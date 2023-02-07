<?php
include "../server/productos_info.php";
$contar_productos = count($productos);
//echo $contar_productos;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-white container-general">
    <div class="row no-gutters mx-md-10 mx-1 mt-4">
        <?php
        for($i=0;$i<$contar_productos;$i++){
                if ($i%2==0){
        ?>
        <div class="card mb-3 w-100 border-0">
            <div class="row no-gutters">
                <div class="col-md-6 align-self-center">
                    <img src="../img/home/productos/<?php echo $productos[$i]['img'];?>" class="card-img w-75 d-block ml-md-auto mr-md-0 mx-auto" alt="...">
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="card-body text-md-right text-center marron mr-md-5">
                        <h2 class="h3 marron mr-md-5"><b><?php echo $productos[$i]['titulo'];?></b></h2>
                        <p class="h4 marron mr-md-5"><?php echo $productos[$i]['unidades'];?></p>
                        <p class="body-p mr-md-5"><?php echo $productos[$i]['description'];?></p>
                        <!-- <p class="body-p mr-md-5"><a href="#" title="" alt=""class="text-dark mt-3">INFORMACIÓN NUTRICIONAL</a></p> -->
                        <a target="_blank" href="https://www.pricesmart.com/site/es/seleccionar-pais" class="btn btn-estructura btn-naranja mt-md-3 mr-md-5 mt-3">¿Dónde comprar?</a>
                        <img src="../img/home/productos/<?php echo $productos[$i]['img_2'];?>" class="card-img w-100 d-block ml-md-auto mr-md-0 mx-auto mt-5" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-naranja mx-auto my-5" style="height: 1px;"></div>
        
        <?php            
                }else{
        ?>
        <div class="card mb-3 w-100 border-0">
            <div class="row no-gutters">
                <div class="col-md-6 align-self-center order-md-1 order-2">
                    <div class="card-body text-md-left text-center marron ml-md-5">
                        <h3 class="h3 marron ml-md-5"><b><?php echo $productos[$i]['titulo'];?></b></h3>
                        <p class="h4 marron ml-md-5"><?php echo $productos[$i]['unidades'];?></p>
                        <p class="body-p ml-md-5"><?php echo $productos[$i]['description'];?></p>
                        <!-- <p class="body-p ml-md-5"><a href="#" title="" alt=""class="text-dark mt-3">INFORMACIÓN NUTRICIONAL</a></p> -->
                        <a target="_blank" href="https://www.pricesmart.com/site/es/seleccionar-pais" class="btn btn-estructura btn-naranja mt-md-3 ml-md-5 mt-3">¿Dónde comprar?</a>
                        <img src="../img/home/productos/<?php echo $productos[$i]['img_2'];?>" class="card-img w-75 d-block ml-md-auto mr-md-0 mx-auto" alt="...">
                    </div>
                </div>
                <div class="col-md-6 align-self-center order-md-2 order-1">
                    <img src="../img/home/productos/<?php echo $productos[$i]['img'];?>" class="card-img w-75 d-block mr-md-auto ml-md-0 mx-auto " alt="...">
                </div>
            </div>
        </div>
        <div class="w-80 bg-naranja mx-auto my-5" style="height: 1px;"></div>
        <?php
                }
            }
        ?>
        <!-- ABAJO DE TODO RECETAS -->
        <div class="card mb-3 w-100 bg-light border-0">
            <div class="row no-gutters ">
                <div class="col-md-6 align-self-center order-md-1 order-2">
                    <div class="card-body ml-md-5">
                        <h2 class="h3 marron ml-md-5">RECETAS</h2>
                        <p class="body-p ml-md-5">
                            Para responder a la clásica pregunta ¿Qué comemos hoy?
                            presentamos una de nuestras recetas favoritas para que
                            puedas prepararla en casa con el irresistible sabor de
                            nuestro pan hawahiiano
                        </p>
                        <a class="ml-md-5 btn btn-estructura btn-naranja mt-md-4" href="../recetas"><span class="btn-medio">ver recetas</span></a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center bg-light order-md-2 order-1">
                    <img src="../img/home/productos/Recetas_600x600.png" class="card-img w-75 d-block mr-auto p-md-4 p-2 mr-md-5 bg-light" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>

    

        
    