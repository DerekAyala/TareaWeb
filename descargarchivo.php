<?php
  header("Content-disposition: attachment; filename=estrenos.pdf");
  header("Content-type: application/pdf");
  readfile("estrenos.pdf");
?>