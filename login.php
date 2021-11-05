<HTML>
  <head>
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
        </div>
      </div>
    </header>
    <main>
      <form class="formulario contenedor--formulario centrar-texto" action="acceso.php" method="post">
        <h2 class="centrar-texto no-margin  titulo borde-superior-derecha borde-superior-izquierda">Sistema de acceso</h2>
        <div class="campo">
          <label class="campo__label" for="login">Nombre</label>
          <input class="campo__field" type="text" placeholder="Nombre" name="login">
        </div>
        <div class="campo">
          <label class="campo__label" for="password">Contraseña</label>
          <input class="campo__field" type="password" placeholder="Contraseña" name="password">
        </div>
        <div class="campo">
          <input type="submit" value="Aceptar acceso" name="pass" class="boton completo borde-inferior-derecha borde-inferior-izquierda">
        </div>
      </FORM>
    </main>
  </body>
</HTML>

