<?php
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N7XKNHG');
  </script>
  <!-- End Google Tag Manager -->


  <title>King's Hawaiian - Recetas -</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/app.css">
  <link rel="stylesheet" type="text/css" href="../css/recetas.css">
  <link rel="stylesheet" type="text/css" href="../css/hover_effect.css">
  <link rel="stylesheet" type="text/css" href="../css/filter.css">
  <meta name="description" content="King's Hawaiian - Recetas">
  <meta name="facebook-domain-verification" content="pht4bqkl2lhnfy090w1egckicfxx8n" />

  <meta property="og:url" content="https://kingshawaiianlatam.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="kingshawaiianlatam.com" />
  <meta property="og:description" content="King's Hawaiian" />
  <meta property="og:image" content="<?php echo $link; ?>/img/home/KH_logo.png" />
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7XKNHG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php include_once "../templates/top_nav_recetas.html"; ?>
  <?php
  //Búsqueda por pan no va
  //include_once "../templates/page-recetas.php"; 
  ?>
  <?php include_once "../templates/todas_las_recetas.php"; ?>
  <?php include_once "../templates/footer-secciones.html"; ?>
  <script src="../js/filter.js"></script>
  <script src="../js/head.js"></script>
  <script src="../js/runAll.js"></script>
  <script src="../lib/js/jquery-3.5.1.slim.min.js"></script>
  <script src="../lib/js/bootstrap.min.js"></script>
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