<?php
$contar_productos = count($productos);
//echo $contar_recetas;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<div class="bg-white max-90">
<h2 class="text-center p-md-5 p-5 h3-h2 mt-3 mt-md-1"><b>PREPARACIONES CON ESTE PAN ÚNICO</b></h2>
  <div class="row row-cols-1 justify-content-center mx-md-5 px-md-5 px-2 mx-0">
      <?php
        for($i=0;$i<$contar_productos;$i++){
      ?>
      <div class="col-9 mb-4 p-md-3 p-md-1 mx-auto">
        <div class="row border-0 bg-white h-100">
          <div class="col-12 col-lg-6 text-center">
            <img src="img/home/<?php echo $productos[$i]['img'];?>" class="card-img-top w-75 mx-auto" alt="...">
          </div>
          <div class="col-12 col-lg-4 align-self-center">
          <h6 class="text-center h6 marron"><?php echo $productos[$i]['titulo'];?></h6>
              <p class="text-center my-4">
                <a href="productos" class="btn btn-estructura btn-naranja mt-1"><span class="btn-medio">VER PRODUCTO</span></a>
              </p>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
  </div>
</div>

    

        
    