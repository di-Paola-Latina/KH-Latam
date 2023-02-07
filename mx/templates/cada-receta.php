<?php
include "../server/recetas_info.php";
$contar_recetas = count($recetas)+1;
//echo $contar_recetas;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-light">
  <h4 class="text-center p-5 naranja "><b>TODAS LAS RECETAS</b></h4>
  <div class="row row-cols-3 row-cols-lg-3 no-gutters mx-md-5 px-md-5 px-2 mx-0">
      <?php
        for($i=1;$i<$contar_recetas;$i++){
      ?>
    <div class="col mb-4 p-md-3 p-2 hover_container">
        <div class="card hover-bg-black border-0">
          <img src="../img/home/recetas/<?php echo $recetas[$i]['pan'];?>/<?php echo $recetas[$i]['img'];?>" class="card-img-top hover_image bg-white" alt="...">
          <div class="hover_middle">
            <a class="hover_text" href="<?php echo $recetas[$i]['link'];?>">VER RECETA</a>
          </div>
        </div>
        <div class="text-center">
            <h6 class="text-uppercase p-2 marron"><?php echo $recetas[$i]['titulo'];?>
            <br/>
            <ul class="list-inline">
                <li class="list-inline-item marron"><small class="marron"><b>PREP:</b><?php echo $recetas[$i]['tiempo'];?></small></li>
                <li class="list-inline-item marron"><small class="marron"><b>COOK:</b><?php echo $recetas[$i]['coccion'];?></small></li>
                <li class="list-inline-item marron"><small class="marron"><b>PORCIONES:</b><?php echo $recetas[$i]['porciones'];?></small></li>
            </ul>
        </div>
    </div>
        
      <?php
        }
      ?>
  </div>
  <div class="text-center p-md-5 p-5">
    <button type="button" class="btn bg-naranja text-white mx-auto px-5 py-2 rounded-pill">VER MAS RECETAS</button>
  </div>
</div>   

        
    