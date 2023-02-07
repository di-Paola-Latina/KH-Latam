<?php
include "../server/recetas_info.php";
$contar_recetas = count($recetas);
//echo $contar_recetas;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-white container-general" id="productos">

  <!--<h2 id="productos" class="text-center p-5 h2" ><b>TODAS LAS RECETAS</b></h2>-->
  
  <div class="row row-cols-1 row-cols-lg-2 no-gutters px-md-3 px-xl-5 px-2 mx-0" >
      <?php
        shuffle($recetas);
        for($i=0;$i<$contar_recetas;$i++){
      ?>
    <div class="col mb-4 p-md-3 p-2 hover_container filtros <?php echo $recetas[$i]['pan'];?> show">
      <div class="card hover-bg-black border-0">
        <img src="../img/home/recetas/<?php echo $recetas[$i]['pan'];?>/<?php echo $recetas[$i]['img'];?>" class="card-img-top hover_image bg-white" alt="...">
        <div class="hover_middle w-100">
          <a class="btn btn-estructura btn-white" href="<?php echo $recetas[$i]['link'];?>"><span class="btn-medio">ver receta</span></a>
        </div>
      </div>
      <div class="text-left">
        <h3 class="text-uppercase marron h3 pt-3"><?php echo $recetas[$i]['titulo'];?></h3>
        <div class="marron p-light">
          <span class="h6 marron">PREP:</span>&nbsp;&nbsp;<?php echo $recetas[$i]['tiempo'];?>&nbsp;&nbsp;|&nbsp;&nbsp;   
          <span class="h6 marron">COOK:</span>&nbsp;&nbsp;<?php echo $recetas[$i]['coccion'];?>&nbsp;&nbsp;|&nbsp;&nbsp; 
          <span class="h6 marron">PORCIONES:</span>&nbsp;&nbsp;<?php echo $recetas[$i]['porciones'];?>
        </div>
      </div>
    </div>
      <?php
        }
      ?>
  </div>
</div>   

        
    