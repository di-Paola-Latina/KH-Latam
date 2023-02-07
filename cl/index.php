<?php
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
"https" : "http") . "://" . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N7XKNHG');</script>
        <!-- End Google Tag Manager -->


        <title>King&#x27;s Hawaiian</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/hover_effect.css">
        <meta name="description" content="Desde nuestros humildes comienzos en 1950 en un pequeño pueblo llamado Hilo, en la “Gran Isla” de Hawaii, nos hemos mantenido comprometidos con la calidad, integridad y el Espíritu Aloha. Nuestro Original Hawaiian Sweet es perfecto para cualquier comida familiar, celebración o reunión.">
        <meta name="keywords" content="pan, pan de molde, hot dog, pan de completo, hawaii, pan dulce, completo, rolls, pan rolls, pan hawaiiano" />
        <meta name="facebook-domain-verification" content="94ew5l19btwoi9znraq174f4m7a3wc" />

        <meta property="og:site_name"     content="King's Hawaiian" />    
        <meta property="og:url"           content="https://kingshawaiianlatam.com" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="King's Hawaiian" />
        <meta property="og:description"   content="Desde nuestros humildes comienzos en 1950 en un pequeño pueblo llamado Hilo, en la “Gran Isla” de Hawaii, nos hemos mantenido comprometidos con la calidad, integridad y el Espíritu Aloha. Nuestro Original Hawaiian Sweet es perfecto para cualquier comida familiar, celebración o reunión." />
        <meta property="og:image"         content="<?php echo $link;?>/img/img-fb.jpg" />
    </head>
    <body onresize="setLeft()">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7XKNHG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php include_once "templates/top_nav_new.html";?>
        <?php include_once "templates/carrousel-arriba.html";?>
        <?php include_once "templates/recetas.php";?>
        <?php include_once "templates/productos.php";?>
        <?php include_once "templates/secciones.php";?>
        <?php include_once "templates/footer.html";?>
        
        <script src="js/setLeft.js"></script>
        <script src="js/head.js"></script>
        <script src="js/runAll.js"></script>
        <script src="lib/js/jquery-3.5.1.slim.min.js"></script>
        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/popper.min.js"></script>
        
        
        
    </body>
</html>
