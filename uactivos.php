<?php
  $tiempo_logout = 600; // segundos tras los cuales un usuario es marcado como inactivo
  $arr = file("usuarios.txt");
  $contenido = $_SERVER['REMOTE_ADDR'].":".time().""; 
  for ( $i = 0 ; $i < sizeof($arr) ; $i++ )
  {
    $tmp = explode(":",$arr[$i]);
    if (( $tmp[0] != $_SERVER['REMOTE_ADDR'] )  && (( time() - $tmp[1] ) < $tiempo_logout ))
    {
      $contenido .= $_SERVER['REMOTE_ADDR']  .":".time()." ";
    }
  }
  $fp = fopen("usuarios.txt","w");
  fputs($fp,$contenido);
  fclose($fp);
  $array = file("usuarios.txt");
  $USUARIOS_ACTIVOS = count($array); //guardamos numero de usuarios activos
?>
