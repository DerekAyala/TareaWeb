<?php 
  $uploaddir = "filesrecib/";
  $tamano = $_FILES["archivo"]['size'];
  $tipo = $_FILES["archivo"]['type'];
  $archivo = $_FILES["archivo"]['name'];
  $prefijo = substr (md5 (uniqid (rand ())),0,6);
  $uploadfilename = strtolower(str_replace(" ", "_",basename($_FILES['archivo']['name'])));
  $uploadfile = $uploaddir.$prefijo.$uploadfilename;
  $error = $_FILES['archivo']['error'];
  $subido = false;
  if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK)
  {
    if($tamano > 500000)
    {
      $error = "Comprueba que el archivo sea inferior a 500 Kb."; 
    }elseif(preg_match("/[^0-9a-zA-Z_.-]/",$uploadfilename))
    {
      $error = "El nombre del archivo contiene caracteres no v�lidos.";
    }else
    {
      $subido = copy($_FILES['archivo']['tmp_name'], $uploadfile);
    }
  }
  if($subido)
  {
    echo "El archivo subio con exito"; 
  }else
  {
    echo "Se ha producido un error: ".$error;
  }
?>
