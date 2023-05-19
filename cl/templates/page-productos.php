<?php
include "../server/productos_info.php";
$contar_productos = count($productos);
//echo $contar_productos;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-white container-general">
    <div class="row no-gutters mx-md-10 mx-1">
        <?php
        for($i=0;$i<$contar_productos;$i++){
                if ($i%2==0){
        ?>
        <div class="card mb-3 w-100 border-0">
            <div class="row no-gutters">
                <div class="col-md-6 align-self-center order-md-1 order-2">
                    <div class="card-body text-md-left text-center marron ml-md-5">
                        <h3 class="h3 marron ml-md-5"><b><?php echo $productos[$i]['titulo'];?></b></h3>
                        <p class="h4 marron ml-md-5"><?php echo $productos[$i]['unidades'];?></p>
                        <p class="body-p ml-md-5"><?php echo $productos[$i]['description'];?></p>
                        <!-- <p class="body-p ml-md-5">
                            <a href="#" title="" alt=""class="text-dark mt-3" data-bs-toggle="modal" data-bs-target="#<?php echo $productos[$i]['idModal'];?>">INFORMACIÓN NUTRICIONAL</a>
                        </p> -->
                        <a href="https://kingshawaiianlatam.com/pan-de-molde/" class="btn btn-estructura btn-naranja mt-md-3 ml-md-5 mt-3">¿Dónde comprar?</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center order-md-2 order-1">
                    <img src="../img/home/productos/<?php echo $productos[$i]['img'];?>" class="card-img w-75 d-block mr-md-auto ml-md-0 mx-auto " alt="...">
                </div>
            </div>
        </div>
        <div class="w-80 bg-naranja mx-auto my-5" style="height: 1px;"></div>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $productos[$i]['idModal'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $productos[$i]['informacion'];?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <?php            
                }else{
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
                        <!-- <p class="body-p ml-md-5 mr-md-5">
                            <a href="#" title="" alt=""class="text-dark mt-3" data-bs-toggle="modal" data-bs-target="#<?php echo $productos[$i]['idModal'];?>">INFORMACIÓN NUTRICIONAL</a>
                        </p> -->
                        <a href="https://kingshawaiianlatam.com/pan-de-molde/" class="btn btn-estructura btn-naranja mt-md-3 mr-md-5 mt-3">¿Dónde comprar?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-naranja mx-auto my-5" style="height: 1px;"></div>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $productos[$i]['idModal'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $productos[$i]['informacion'];?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
            }
        ?>
        <!-- ABAJO DE TODO RECETAS -->
        <div class="card mb-3 w-100 bg-light border-0">
            <div class="row no-gutters ">
                <div class="col-md-6 align-self-center order-md-1 order-2">
                    <div class="card-body text-center ml-md-5">
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

    

        
    