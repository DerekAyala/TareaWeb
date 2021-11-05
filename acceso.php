<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"><link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
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
    <main class="main">
      
        <?php 
          //verificamos los campos
          $valida = false;
          if (($_POST['login']=="benjamin") and ($_POST['password']=="benjitoi"))
          {
            $valida = true;
          }
          if ($valida == false)
          {
            echo "<div class=\"contenedor--formulario acceso\">";
            echo "<center><h3 class=\"titulo no-margin borde-superior-derecha borde-superior-izquierda\">Acceso no autorizado</h3></center>"; 
            echo "<input type=\"submit\" onClick=\"javascript:history.go(-1)\" value=\"Volver\" class=\"boton borde-inferior-derecha borde-inferior-izquierda\">";
            echo "</div>";
          }
          // Si las comprobaciones son correctas
          if ($valida == true)
          {  
            echo "<div class=\"contenedor mensajes\">";
            echo "<center><h2 class=\"titulo--v no-margin borde-superior-derecha borde-superior-izquierda\">Recomendaciones</h2></center>"; 
            $archivo = file_get_contents("comentarios.txt"); //Guardamos comentarios.txt en $archivo
            $archivo = ucfirst($archivo); //Le damos un poco de formato
            $archivo = nl2br($archivo); //Transforma todos los saltos de linea en tag <br/>
            echo "<div class=\"mensajes--contenido borde-inferior-derecha borde-inferior-izquierda\">".$archivo."</div>"; //imprime
            echo "</div>";
          }   
          // Ahora indicamos a la base de datos que ya se leyeron los mensajes
          // Archivo en donde se acumular� el numero de correos
          $archivo = "cuenta_cor.txt";
          // Abrimos nuevamente el archivo
          $abre = fopen($archivo, "w");
          // Sumamos 1 nuevo correo
          $total = 0;
          // Y reemplazamos para indicar que ya no hay mensajes pendientes 
          $grabar = fwrite($abre, $total);
          // Cerramos la conexi�n al archivo
          fclose($abre);
        ?>
      
    </main>
	</body>
</html>
