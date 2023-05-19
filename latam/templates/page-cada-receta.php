
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-white container-breadcrumb">
    <div class="row no-gutters">
        <div class="col-md-8 col-12 text-left pl-md-4">
            <img src="../../img/home/recetas/<?php echo $receta_actual['pan'];?>/<?php echo $receta_actual['img'];?>" class="w-foto-receta" alt="...">
        </div>
        <div class="col-md-4 col-12 p-1 p-md-0 text-left">
            <h3 class="marron h3-27 pt-5"><b><?php echo $receta_actual['titulo'];?></b></h3>
            <br/>
            <div class="marron p-light">
                <span class="h6 marron">PREP:</span>&nbsp;&nbsp;<?php echo $receta_actual['tiempo'];?>&nbsp;&nbsp;|&nbsp;&nbsp;   
                <span class="h6 marron">COOK:</span>&nbsp;&nbsp;<?php echo $receta_actual['coccion'];?>&nbsp;&nbsp;|&nbsp;&nbsp; 
                <span class="h6 marron">PORCIONES:</span>&nbsp;&nbsp;<?php echo $receta_actual['porciones'];?>
            </div>
            
            <div class="mt-5">
                <button type="button" class="btn-estructura btn-naranja" onclick="window.print();">IMPRIMIR RECETA</button>
            </div>
        </div>
    </div>     
    
    <div class="row no-gutters mt-5 pl-md-4">
        <div class="col-md-8 col-12 text-left plicas">
            <h3 class="naranja h5">INGREDIENTES PARA ESTA RECETA:</h3>
            <hr style="width:90%;text-align:left;margin-left:0">
            <ul>
                <?php 
                    foreach($receta_actual['ingredientes'] as $ingredientes){
                ?> 
                    <li class="marron body-p">&nbsp;&nbsp;<?php echo $ingredientes;?></li>   
                <?php
                    }
                ?>
                    
            </ul>    
        </div>                
        <div class="col-md-4 col-12 text-left">
            <h3 class="naranja h5">NUESTRO PRODUCTO UTILIZADO</h3>
            <hr>
            <img src="../../img/home/recetas/<?php echo $receta_actual['pan'];?>/PRODUCTOQUESEUSO.png" class="mx-auto d-block w-foto-producto" alt="...">
            <h4 class="marron h4 text-center p-md-5 p-3"><?php echo $receta_actual['uso'];?></h4> 
            <div class="text-center mb-5">
                <a target="_blank" href="https://www.pricesmart.com/site/es/seleccionar-pais" class="btn btn-estructura btn-naranja">¿D&Oacute;NDE COMPRAR?</a>
            </div>    
        </div>
        <div class="col-md-12 col-12 text-left">
            <h3 class="naranja h5">PREPARACIÓN</h3>
            <hr>
            <div class="row no-gutters">
                <?php
                    $numeracion = 1;
                    foreach($receta_actual['preparacion'] as $preparacion){
                ?>
                <div class="col-12 card border-0 bg-white mt-1">
                    <div class="marron p-light">
                        <p>
                            <strong class="paso">Paso <?php echo $numeracion;?></strong>
                            <br/>
                            <?php echo $preparacion;?>
                        </p>
                    </div>
                </div>
                <?php
                    $numeracion++;  
                    }
                ?>
            </div>
        </div>
    </div>
    
    <!-- PREPARACION -->
    
    
               
</div>   
<div class="bg-light mb-5 container-breadcrumb">
  <h3 class="text-center p-5 marron h3">OTRAS RECETAS</h3>
  <div class="row row-cols-1 row-cols-lg-3 no-gutters mx-md-4 p-3 mx-0">
      <?php
        shuffle($recetas);
        for($i=0;$i<3;$i++){
      ?>
    <div class="col mb-4 p-md-3 p-2 hover_container">
        <div class="card hover-bg-black border-0">
          <img src="../../img/home/recetas/<?php echo $recetas[$i]['pan'];?>/<?php echo $recetas[$i]['img'];?>" class="card-img-top hover_image bg-white" alt="...">
          <div class="hover_middle w-100">
            <a class="btn btn-estructura btn-white" href="../<?php echo $recetas[$i]['link'];?>"><span class="btn-medio">VER RECETA</span></a>
          </div>
        </div>
        <div class="text-center">
            <h6 class="text-uppercase marron h6 p-2"><?php echo $recetas[$i]['titulo'];?>
            <br/>
            <ul class="list-inline">
                <li class="list-inline-item marron body-p"><b>PREP: </b><?php echo $recetas[$i]['tiempo'];?></li>
                <li class="list-inline-item marron body-p"><b>COOK: </b><?php echo $recetas[$i]['coccion'];?></li>
                <li class="list-inline-item marron body-p"><b>PORCIONES: </b><?php echo $recetas[$i]['porciones'];?></li>
            </ul>
        </div>
    </div>
        
      <?php
        }
      ?>
  </div>
</div>  
        
    