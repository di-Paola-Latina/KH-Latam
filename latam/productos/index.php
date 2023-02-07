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
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
          (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
          m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

          ym(76216900, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
          });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/76216900" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->


        <title>King's Hawaiian - Productos -</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/app.css">
        <link rel="stylesheet" type="text/css" href="../css/productos.css">
        <meta name="description" content="King's Hawaiian - Productos">
        <meta name="facebook-domain-verification" content="q3nptg5950t71mts73wwuhaj6hskh8" />
    
        <meta property="og:url"           content="https://kingshawaiianlatam.com" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="kingshawaiianlatam.com" />
        <meta property="og:description"   content="King's Hawaiian" />
        <meta property="og:image"         content="<?php echo $link;?>/img/home/KH_logo.png" />
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7XKNHG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php include_once "../templates/top_nav_productos.html";?>
        <?php include_once "../templates/page-productos.php";?>
        <?php include_once "../templates/footer-secciones.html";?>
        
    
        
        
        <script src="../js/head.js"></script>
        <script src="../js/aparece.js"></script>
        
        <script src="../js/runAll.js"></script>
        <script src="../lib/js/jquery-3.5.1.slim.min.js"></script>
        <script src="../lib/js/bootstrap.min.js"></script>
        <script src="../lib/js/popper.min.js"></script>
        <script src="../js/contact.js"></script>
        <script src="../lib/js/jquery.min.js"></script>
        
        <!--<script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if ((this.hash !== "")&&(this.hash !== "#carouselExampleControls")) {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;
              
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top - 100}, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                //window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>-->
        
    </body>
</html>
