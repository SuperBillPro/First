<?php
    $user = $_GET["user"];
    $correo = $_GET["correo"];
?>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div id="cajita">
            <h1>¡Hola Mundo!</h1>
            <p>Iniciaste sesion</p>
        
            <p>Tu nombre de usuario es: <?php echo $user; ?></p>
        
            <p>Tu correo es: <?php echo $correo; ?></p>
        </div>

         <div class="wrapper" id="stewie">
    <div class="head">
      <div class="hair-wrapper">
        <div class="hair1"></div>
        <div class="hair2"></div>
        <div class="hair3"></div>
        <div class="hair4"></div>
        <div class="hair5"></div>
        <div class="hair6"></div>
        <div class="hair7"></div>
        <div class="hair8"></div>
        <div class="hair9"></div>
      </div>
      <div class="ear" id="left"><div class="ear-inside"></div></div>
      <div class="ear-cover"><div class="ear-inside"></div></div>
      <div class="eyebrow" id="left"></div>
      <div class="eyebrow" id="right"></div>
      <div class="eye" id="left">
        <div class="eyeball"  id="eyeball-left"></div>
        <div class="eyelid" id="lower"></div>
        <div class="eyelid" id="upper"></div>
      </div>
<!--
      <div class="eye" id="left" style="background-color:transparent"></div>
-->
      <div class="eye" id="right">
        <div class="eyeball" id="eyeball-right"></div>
        <div class="eyelid" id="lower"></div>
        <div class="eyelid" id="upper"></div>
      </div>
<!--
      <div class="eye" id="right" style="background-color:transparent"></div>
-->
      <div class="nose"></div>
      <div class="mouth">
        <div class="upper-lip"></div>
        <div class="mouth-line"></div>
        <div class="lower-lip"></div>
      </div>
    </div>
    <div class="ear" id="right"></div>
    <div class="body">
      <div class="shirt" id="left"></div>
      <div class="shirt" id="right"></div>
      <div class="tummy"></div>
      <div class="arm-left"></div>
      <div class="overalls-main"></div>
      <div class="overalls-strap-left"></div>
      <div class="overalls-strap-left-cover"></div>
      <div class="overalls-strap-right"></div>
      <div class="overalls-side-right"></div>
      <div class="overalls-neck"></div>
      <div class="button-left"></div>
      <div class="button-right"></div>
      <div class="bok"></div>
      <div class="leg-left"></div>
      <div class="leg-left-bottom"></div>
      <div class="leg-middle"></div>      
      <div class="leg-right"></div>
      <div class="leg-right-bottom"></div>
      <div class="shoe-right"></div>
      <div class="shoe-left"></div>
      <div class="hand-right">
        <div class="finger1"></div>
        <div class="finger2"></div>
      </div>
      <div class="hand-left">
        <div class="finger1"></div>
        <div class="finger2"></div>
        <div class="finger3"></div>
        <div class="palm"></div>
        <div class="finger4"></div>      
      </div>
    </div>

  </div>

    </body>
</html>