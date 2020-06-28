<?php
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$dir_subida = getcwd() . '/video/';
$upload_max_filesize = 0;
$fichero_subido = $dir_subida . basename($_FILES['video']['name']);
if (move_uploaded_file($_FILES['video']['tmp_name'], $fichero_subido)) {
  $contenido = basename($_FILES['video']['name']) . ' Titulo: ' . $titulo . '. descripcion: ' . $descripcion . '.';
  $archivo = fopen($dir_subida . "datos.txt", "a");
  fwrite($archivo, PHP_EOL . "$contenido");
  fclose($archivo);
  echo '<script type="text/javascript">
    		alert("El video será publicado en breve.");
    		window.location.href="videos.html";
    	</script>';
} else {
  echo '<script type="text/javascript">
   			alert("¡No se pudo subir el archivo!");
   			window.location.href="subeVideo.html";
   		</script>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Subir video</title>
</head>

<body>
</body>

</html>