<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"><link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
    <title>Comentarios</title>
  </head>
  <body class="fondo">
    <header class="header">
        <div class="contenedor">
          <div class="barra">
            <a class="logo" href="index.php">
              <h1 class="logo__nombre no-margin">Recomendando Peliculas</h1>
              <div class="logos"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-movie" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <line x1="8" y1="4" x2="8" y2="20" />
                <line x1="16" y1="4" x2="16" y2="20" />
                <line x1="4" y1="8" x2="8" y2="8" />
                <line x1="4" y1="16" x2="8" y2="16" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="16" y1="8" x2="20" y2="8" />
                <line x1="16" y1="16" x2="20" y2="16" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-tv" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="3" y="7" width="18" height="13" rx="2" />
                <polyline points="16 3 12 7 8 3" />
              </svg></div>
            </a>
            <nav class="navegacion">
              <a href="index.php" class="navegacion__enlace">Home</a>
              <a href="comentario.php" class="navegacion__enlace">Hacer una recomendacion</a>
              <a href="acercademi.html" class="navegacion__enlace">Acerca de mi</a>
              <a href="login.php" class="navegacion__enlace">Recomendaciones</a>
            </nav>
          </div>
        </div>
      </header>
    <main>
      <div class="contenedor--formulario acceso">
      <?php 
        //verificamos los campos
        $valida = true;
        if (empty($_POST['mensaje']) && empty($_POST['pelicula']) && empty($_POST['pais']) && empty($_POST['email']) && empty($_POST['nombre'])) {
          echo "<center><h4 class=\"titulo no-margin borde-superior-derecha borde-superior-izquierda\">Error</h4></center>"; 
          echo "<label class=\"campo__label no-margin mensajeNO\">Por favor, no envie un formulario vacio</label>";
          $valida = false;
        }
        else{
          if (empty($_POST['nombre'])) {
            $valida = false;
          }
          if (empty($_POST['email'])) {
            $valida = false; 
          }
          if (empty($_POST['pais'])) { 
            $valida = false;
          }
          if (empty($_POST['pelicula'])) {
            $valida = false; 
          }
          if (empty($_POST['mensaje'])) {
            $valida = false;
          }
          // Validamos la direccion de correo electronico
          if (!strchr($_POST['email'],"@") || !strchr($_POST['email'],"."))
          {
            $valida = false;
          }
          if ($valida == false){
            echo "<center><h4 class=\"titulo no-margin borde-superior-derecha borde-superior-izquierda\">Errores</h4></center>"; 
            if (empty($_POST['nombre'])) {
            echo "<label class=\"campo__label no-margin mensajeNO\">No se especifico Nombre</label>";
            }
            if (empty($_POST['email'])) {
              echo "<label class=\"campo__label no-margin mensajeNO\">No se especifico e-mail</label>";
            }
            if (empty($_POST['pais'])) { 
              echo "<label class=\"campo__label no-margin mensajeNO\">No se especifico Pais</label>";
            }
            if (empty($_POST['pelicula'])) {
              echo "<label class=\"campo__label no-margin mensajeNO\">No se especifico Pelicula</label>";
            }
            if (empty($_POST['mensaje'])) {
              echo "<label class=\"campo__label no-margin mensajeNO\">Por favor no, deje la reseña en blanco</label>";
            }
            // Validamos la direccion de correo electronico
            if (!strchr($_POST['email'],"@") || !strchr($_POST['email'],"."))
            {
              echo "<label class=\"campo__label no-margin mensajeNO\">No es un correo valido</label>";
            }
          }
          
        }
        // Si las comprobaciones son correctas
        if ($valida == true)
        {
          // Archivo en donde se acumular� el numero de visitas
          $archivo = "comentarios.txt";
          // Abrimos archivo
          $abre = fopen($archivo, "a+");
          //recuperamos los datos recibidos
          $date = date("d-m-Y   H:i:s");
          $total = "\nFecha: ".$date."\r\n"."IP: ".$_SERVER['REMOTE_ADDR']."\r\n"."Nombre: ".$_POST['nombre']."\r\n"."Correo: ".$_POST['email']."\r\n"."Pais:".$_POST['pais']."\r\n"."Pelicula: ".$_POST['pelicula']."\r\n"."Reseña:\n".$_POST['mensaje']."\r\n"."\r\n\n";
          // se graba la info
          $grabar = fwrite($abre, $total);
          // Cerramos la conexi�n al archivo
          fclose($abre);
          // Ahora indicamos a la base de datos que a llegado un correo
          // Archivo en donde se acumular� el numero de correos
          $archivo = "cuenta_cor.txt";
          // Abrimos el archivo para solamente leerlo (r de read)
          $abre = fopen($archivo, "r");
          // Leemos el contenido del archivo
          $total = fread($abre, filesize($archivo));
          // Cerramos la conexi�n al archivo
          fclose($abre);
          // Abrimos nuevamente el archivo
          $abre = fopen($archivo, "w");
          // Sumamos 1 nuevo correo
          $total = $total + 1;
          // Y reemplazamos por la nueva cantidad de correos 
          $grabar = fwrite($abre, $total);
          // Cerramos la conexi�n al archivo
          fclose($abre);
          echo "
          <center><h4 class=\"titulo--v no-margin borde-superior-derecha borde-superior-izquierda\">Reseña Enviada</h4></center>
          <label class=\"campo__label no-margin mensajeSI\">Reseña Enviada , gracias por su opinion</label>
          <input type=\"submit\" onClick=\"javascript:history.go(-1)\" value=\"Volver\" class=\"boton borde-inferior-derecha borde-inferior-izquierda\">";
        } //se cierra el IF de validacion
        else{
          echo "<input type=\"submit\" onClick=\"javascript:history.go(-1)\" value=\"Volver\" class=\"boton borde-inferior-derecha borde-inferior-izquierda\">";
        }
      ?>
      </div>
    </main>
  </body>
</html>
