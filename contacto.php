<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Cardistry es el arte de combinar movimientos o hacer florituras con cartas, es manipulación no mágica de las cartas.">
  <meta name="keywords" content="Cardistry, cardistry, Florituras, florituras, Manipulacion, manipulacion, Cartas, cartas, Cards, cards, Baraja, baraja">
  <title>Contacto</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158057835-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-158057835-2');
  </script>
</head>

<body>
  <?php
  $email_to = "cardistry@diegochiapa.com.ar";
  $email_subject = $_POST['asunto'];
  $email_message = "Detalles del formulario de contacto:\n\n";
  $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
  $email_message .= "E-mail: " . $_POST['email'] . "\n";
  $email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";
  $headers = 'From: ' . $email_to . "\r\n" . 'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
  echo '<script type="text/javascript">
		    	alert("Gracias por su consulta, nos comunicaremos a la brevedad");
		    	window.location.href="index.html";
		      </script>';
  ?>

</body>

</html>