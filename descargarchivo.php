<?php
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="estrenos.pdf"');
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Pragma: public');
  header('Content-Length: ' . filesize('repositorio/estrenos.pdf'));
  ob_clean();
  flush();
  readfile('repositorio/estrenos.pdf');
  exit();
?>