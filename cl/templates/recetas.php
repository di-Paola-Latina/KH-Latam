<?php
include "server/home_info.php";
$contar_recetas = count($recetas);
//echo $contar_recetas;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-white max-85">
  <h2 class="text-center p-md-5 p-5 naranja h3-h2">PRUEBA ESTAS RECETAS IRRESISTIBLES</h2>
  <div class="row row-cols-1 row-cols-lg-3 no-gutters mx-md-5 px-md-5 px-2 mx-0">
      <?php
        for($i=0;$i<$contar_recetas;$i++){
      ?>
      <div class="col mb-4 p-md-3 p-2 hover_container">
          <div class="card hover-bg-black border-0">
            <img src="img/home/<?php echo $recetas[$i]['img'];?>" class="card-img-top hover_image bg-white w-100" alt="...">
            <?php 
              if($i==0){
            ?>
            <div class="hover-top-right">
              <img src="img/home/nuevo.png" class="card-img-top w-100" alt="...">
            </div>
            <?php
              }
            ?>
            <div class="hover_middle w-100">
              <a class="btn btn-estructura btn-white" href="<?php echo $recetas[$i]['link'];?>"><span class="btn-medio">VER RECETA</span></a>
            </div>
        </div>
        <div class="text-center">
          <h6 class="text-uppercase marron h6 p-2"><?php echo $recetas[$i]['titulo'];?></h6>
            <br/>
            <h4 class="mt-n4" style="color: #4e2f1a; font-size: 18px;font-weight: normal;"><?php echo $recetas[$i]['tiempo'];?></h4>
        </div>
      </div>
        
      <?php
        }
      ?>
  </div>
  <div class="text-center p-md-5 p-3">
    <a href="recetas" class="btn btn-estructura btn-naranja"><span class="btn-medio">VER MAS RECETAS</span></a>
  </div>
</div>   

        
    