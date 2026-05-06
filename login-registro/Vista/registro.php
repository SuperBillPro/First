<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <img id="rayo" src="lightning-png-44026.png" alt="">
        <h1>Registro</h1>
        
        <div id="tabla">
        <table>
            <tr>
                <th>Contribuyente</th>
                <th>Contacto</th>
                <th>País</th>
            </tr>
            <tr>
                <td>g203_</td>
                <td>+59891631224 </td>
                <td>Israel</td>
            </tr>
            <tr>
                <td>Adriantor</td>
                 <td>+59899442163</td>
                <td>Venezuela</td>
            </tr>
        </table>
        <img id="seissiete" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRhxJbyc8AvOjBnXE8bOjfEluBs5r-oA2uJQ&s" alt="">
        </div>
        <div id="formulario">
            <div id="miniform">
                <form action="../Controlador/servidor.php" method="POST" enctype="multipart/form-data">
                    <label for="usuario">Ingrese su nombre de usuario:</label>
                    <input type="text" id="usuario" name="user"><br>
                    <label for="contraseña">Ingrese su contraseña</label>
                    <input type="text"  id="contraseña" name="pass"><br>
                    <label for="gmail">Ingrese su Gmail</label><br>
                    <input type="text" id="mail" name="correo"><br>
                    <span>Selecciona un archivo:</span>
                    <input type="file" name="uploadedFile" />
                    <input type="submit">
                </form>
            </div>
        <div id="ellogin">
            <h4>¿Ya tienes una cuenta?</h4>
            <a id="link" href="iniciosesion.php" class="button">Iniciar Sesión</a>
        </div>
        <img id="rakai" src="https://media1.tenor.com/m/QbmbfSEMO9cAAAAd/rakai-reading.gif" alt="">
        </div>
        <div class="tenor-gif-embed" data-postid="13494748921738976691" data-share-method="host" data-aspect-ratio="0.97992" data-width="100%"><a href="https://tenor.com/view/bill-gates-bill-gates-thrusting-bill-gates-dancing-gif-13494748921738976691">Bill Gates Bill Gates Thrusting GIF</a>from <a href="https://tenor.com/search/bill+gates-gifs">Bill Gates GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </body>
</html>