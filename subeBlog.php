<?php
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$dir_subida = getcwd() . '/blog/';
$upload_max_filesize = 0;
$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);
if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
  $contenido = basename($_FILES['archivo']['name']) . ' Titulo: ' . $titulo . '. autor: ' . $autor . '.';
  $archivo = fopen($dir_subida . "datos.txt", "a");
  fwrite($archivo, PHP_EOL . "$contenido");
  fclose($archivo);
  echo '<script type="text/javascript">
    		alert("La entrada será publicado en breve.");
    		window.location.href="blog.html";
    	</script>';
} else {
  echo '<script type="text/javascript">
   			alert("¡No se pudo subir el archivo!");
   			window.location.href="subeBlog.html";
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