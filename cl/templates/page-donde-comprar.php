<?php
include "../server/retail_info.php";
$contar_retails = count($retails);
$contar_comunas = count($comunas);
//echo $contar_productos;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<div class="bg-white container-general">
    <div class="row no-gutters mx-md-10 mx-1">
        <form method="post">
            <label for="Retail">Tienda</label>
            <select name="" id="lista_retails">
                <option value="">---</option>
                <?php
                    for($i=0;$i<$contar_retails;$i++){
                ?>
                    <option value="<?php echo $retails[$i];?>"><?php echo $retails[$i];?></option>
                <?php
                    }
                ?>
            </select>

            <label for="Comuna">Comuna</label>
            <select name="" id="">
                <option value="">---</option>
            </select>
        </form>
    </div>
</div>

    

        
    