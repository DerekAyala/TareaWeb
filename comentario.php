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
    <main class="main">
      <form class="formulario contenedor--formulario" name="form1" method="post" action="recibecome.php"> 
        <h2 class="centrar-texto no-margin titulo borde-superior-derecha borde-superior-izquierda">Recomendacion</h2>
        <div class="campo">
          <label class="campo__label" for="nombre">Nombre</label>
          <input class="campo__field" type="text" placeholder="Nombre Completo" id="nombre" name="nombre">
        </div>
        <div class="campo">
          <label class="campo__label" for="email">Correo</label>
          <input class="campo__field" type="email" placeholder="Correo Electronico" id="email" name="email">
        </div>
        <div class="campo">
          <label class="campo__label" for="pais">Pais</label>
          <input class="campo__field" type="text" placeholder="Pais" id="pais" name="pais">
        </div>
        <div class="campo">
          <label class="campo__label" for="asunto">Pelicula</label>
          <input class="campo__field" type="text" placeholder="Pelicula" id="pelicula" name="pelicula">
        </div>
        <div class="campo">
          <label class="campo__label campo--textarea completo" for="mensaje">Escribe tu reseña</label>
          <textarea class="campo__textarea completo" name="mensaje" id="mensaje"></textarea>
        </div>
        <div class="campo campo--botones">
          <input type="submit" value="Enviar" name="enviar2" class="boton borde-inferior-izquierda">
          <input type="reset" value="Borrar" name="borrar2" class="boton boton--secundario borde-inferior-derecha">
        </div>
      </form>
    </main>
  </body>
</html>
