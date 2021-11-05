<?php
  // Archivo en donde se acumular� el numero de visitas
  $archivo = "cuenta_cor.txt";
  // Abrimos el archivo para solamente leerlo (r de read)
  $abre = fopen($archivo, "r");
  // Leemos el contenido del archivo
  $total = fread($abre, filesize($archivo));
  // Cerramos la conexi�n al archivo
  fclose($abre);
  // Imprimimos el total de visitas d�ndole un formato
  echo $total;
?>