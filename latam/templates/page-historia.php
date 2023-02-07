<?php
include "../server/historias_info.php";
$contar_historias = count($historias);
//echo $contar_productos;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class=" bg-white pt-md-4 p-2 container-general">
    <div class="row no-gutters mx-md-4 mx-1">
        <?php
        for($i=0;$i<$contar_historias;$i++){
                if ($i%2==0){
        ?>
        <div class="text-center col-12 h3 naranja my-3"><h2><?php echo $historias[$i]['titulo'];?></h2></div>
        <div class="card mb-3 w-100 border-0">
            <div class="row no-gutters ">
                <div class="col-md-5  align-self-center order-3 order-md-1 pl-4">
                    <div class="card-body text-left marron">
                        <p class="h5 marron text-left"><b><?php echo $historias[$i]['subtitulo'];?></b></p>
                        <p class="body-p"><?php echo $historias[$i]['description'];?></p>
                    </div>
                </div>
                <div class="col-md-2 timeline order-2 order-md-2"></div>
                <div class="col-md-5 text-center align-self-center order-1 order-md-3 pr-md-5">
                    <img src="../img/home/historia/<?php echo $historias[$i]['img'];?>" class="card-img w-100 mr-md-4" alt="...">
                </div>
            </div>
        </div>
        <!--<div class="w-75 bg-marron mx-auto my-5" style="height: 2px;"></div>-->
        <?php            
                }else{
        ?>
        <div class="text-center col-12 h3 naranja my-3"><h2><b><?php echo $historias[$i]['titulo'];?></h2></b></div>
        <div class="card mb-3 w-100 border-0">
            <div class="row no-gutters">
                <div class="col-md-5 text-center align-self-center pr-md-4">
                    <img src="../img/home/historia/<?php echo $historias[$i]['img'];?>" class="order-first card-img w-100 ml-md-4" alt="...">
                </div>
                <div class="col-md-2 timeline"></div>
                <div class="col-md-5 align-self-center pr-md-4">
                    <div class="card-body text-left marron">
                    <p class="h5 marron text-left"><b><?php echo $historias[$i]['subtitulo'];?></b></p>
                        <p class="body-p"><?php echo $historias[$i]['description'];?></p>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="w-75 bg-marron mx-auto my-5" style="height: 2px;"></div>-->
        <?php
                }
            }
        ?>
        <div class="col-md-12 text-center my-5">
            <img src="../img/home/historia/70th_Anniversary.png" class="card-img d-block mx-auto  w-20" alt="...">
        </div>
        <!-- ABAJO DE TODO RECETAS -->
        
    </div>
    <div class="card mb-3 w-100 bg-light border-0">
        <div class="row no-gutters m-5">
            <div class="col-md-12 text-center p-md-3">
                <div class="card-body w-100">
                    <!--<h2 class="h2 naranja mb-5">VER PRODUCTOS</h2>-->
                    <a class="btn-estructura btn-naranja" href="../productos"><span class="btn-medio">IR A PRODUCTOS</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

    

        
    