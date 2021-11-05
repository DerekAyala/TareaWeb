<html/html>
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
		<main class="contenedor">
			<div class="apartados">
				<div class="index-link--logo logo">
					<a class="index-link link logo" href="Galeria.html"><h3 class="no-margin no-padding centrar-texto">Galería de peliculas</h3></a>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ghost" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9B0823" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						<path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
						<line x1="10" y1="10" x2="10.01" y2="10" />
						<line x1="14" y1="10" x2="14.01" y2="10" />
						<path d="M10 14a3.5 3.5 0 0 0 4 0" />
					</svg>
					</div>
				<div class="index-link--logo logo">
					<a class="index-link link" href="#" onclick="javascript:window.open('subirarchivos/subir.php','ventanita','width=500,height=190,menubar=no')"><h3 class="no-margin no-padding centrar-texto">Subir un Poster</h3></a>
					<svg class="logos" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9B0823" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						<line x1="12" y1="5" x2="12" y2="19" />
						<line x1="5" y1="12" x2="19" y2="12" />
					</svg>
				</div>
				<div class="index-link--logo descarga logo">
					<a class="index-link link" href="descargarchivo.php"><h3 class="no-margin no-padding centrar-texto">Descargar Cartelera de estrenos</h3></a>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9B0823" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						<path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
						<polyline points="7 11 12 16 17 11" />
						<line x1="12" y1="4" x2="12" y2="16" />
					</svg>
					</div>
				<div class="index-link--logo descarga logo">
					<a href="login.php" class="index-link link"><h3 class="no-margin no-padding centrar-texto">
						Tienes <span>
					<?PHP
						include("cuentacorreo.php");
					?></span>
						Recomendaciones no leídas 
					</h3></a>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9B0823" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						<path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
						<line x1="8" y1="9" x2="16" y2="9" />
						<line x1="8" y1="13" x2="14" y2="13" />
					</svg>
				</div>
				<div class="index-link--logo descarga">
					<h3 class="index-link no-margin no-padding centrar-texto">
						Usuarios Activos<span>
						<?PHP
							include("uactivos.php");
							echo $USUARIOS_ACTIVOS
						?>
						</span>
					</h3>
				</div>
				<div class="index-link--logo descarga">
					<h3 class="index-link no-margin no-padding centrar-texto">
					Eres el visitante<span>
					<?PHP
						include("contador.php");
					?>
					</span>
					desde el 4/11/2021
					</h3>
				</div>
				<section id="galeria" class="acerca__peliculas centrar-texto">
					<h3 class="no-margin"><span>Peliculas Favoritas</span> </h3>
					<ul class="acerca__galeria">
						<img loading="lazy" width="100%" height="350" src="images/fotos/imagengaleria_4.jpg" alt="imagen galeria">
						<img loading="lazy" width="100%" height="350" src="images/fotos/imagengaleria_8.jpg" alt="imagen galeria">
						<img loading="lazy" width="100%" height="350" src="images/fotos/imagengaleria_13.jpg" alt="imagen galeria">
						<img loading="lazy" width="100%" height="350" src="images/fotos/imagengaleria_12.jpg" alt="imagen galeria">
						<img class="uno" loading="lazy" width="100%" height="350" src="images/fotos/imagengaleria_16.jpg" alt="imagen galeria">
						<img class="dos" loading="lazy" width="100%" height="350" src="images/fotos/imagengaleria_22.jpg" alt="imagen galeria">
					</ul>
				</section>
			</div>
		</main>
	</body>
</html>
