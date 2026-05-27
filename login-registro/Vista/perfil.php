<?php
    $user = $_GET["user"];
    $correo = $_GET["correo"];
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location:../Vista/iniciosesion.php");
        exit;
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div id="cajita">
            <img id="foto" src="imagenes/<?php echo $_SESSION['imagen']; ?>" alt="Imagen de perfil">
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

            <div id="tabla">
              <?php 
                $hostname = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'base_de_usuarios';
                $conn = mysqli_connect($hostname, $username, $password, $database);
                if(!$conn){
                  die('Connection failed: ' . mysqli_connect_error());
                }
                $sql = "SELECT * FROM usuario";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  echo "<table><tr><th>Nombre de Usuario</th><th>Correo</th></tr>";
                  while($row = mysqli_fetch_assoc($result)) {
                    echo  "</td><td>" . $row["usr_name"]. "</td><td>" . $row["usr_email"]. "</td></tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 results";
                }
                mysqli_close($conn);
              ?>
            </div>
            <div id="cerrar">

                <a href="../Controlador/logout.php" class="button">Cerrar Sesion</a>
            </div>
             <div id="lista">
          <h2>Lista de Elementos</h2>
            <ul class="lista_elementos"></ul>
            <button onclick="openModal();">Añadir elemento</button>
            <dialog id="formModal">
              <h3>Añadir elemento</h3>
              <input type="text" id="nuevo_elemento">
              <button onclick="añadirProducto();">Añadir</button>
              <button onclick="closeModal();">Cerrar</button>
            </dialog>
            <script>
              function añadirProducto(){
                const nuevo_elemento = document.getElementById("nuevo_elemento").value;
                const li = document.createElement("li");
                li.textContent = nuevo_elemento;
                document.querySelector(".lista_elementos").appendChild(li);
              
                const btn_eliminar = document.createElement("button");
                btn_eliminar.textContent = "Eliminar";
                btn_eliminar.addEventListener("click", function(){
                  li.remove();
                })
                li.appendChild(btn_eliminar);
              }

              function openModal() {
                const modal = document.getElementById('formModal');
                modal.showModal();
              }
              function closeModal() {
                const modal = document.getElementById('formModal');
                modal.close();
              }
            </script>
        </div>
    </body>
</html>