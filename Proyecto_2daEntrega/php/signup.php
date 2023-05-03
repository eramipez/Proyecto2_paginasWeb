<?php


  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Creaste un nuevo usuario';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pet´s Co</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="images/x-icon">
  </head>
  <body>
                  <!-- Barra principal-->
                     <nav class="barra">
                    <div class="logo"><a href="/proyecto_tienda.html">
                        <img src="../../images/logo3.png">
                      </div></a>
                    <ul class=" enlaces">
                      <li class="paginas"><a href="/fotos.html">Galeria</a></li>
                      <li class="paginas"><a href="/preguntas.html">Preguntas</a></li>
                      <li class="paginas"><a href="/servicios.html">Servicios</a></li>
                      <li class="paginas"><a href="/carrocompras.html">Compra</a></li>
                      <li class="paginas"><a href="./php/signup.php">Sesión</a></li>
                    </ul>
                  </nav>



    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">


      <input name="email" type="text" placeholder="Digita tu nombre">
      <input name="email" type="text" placeholder="Digita tu correo">
      <input name="password" type="password" placeholder="Digita una contraseña">
      <input name="password" type="password" placeholder="Repite la contraseña">
      <!--Fin de seccion de prueba-->
      <!--<input name="Confirma tu contraseña" type="password" placeholder="Confirma tu contraseña">-->
      <input type="submit" value="Enviar">
    </form>


    <a href="/carrocompras.html" class="btn-flotante">Compra ahora</a>

    <p class="pie">
              ©  Copyright 2023
              <br>
              <img src="..\..\images\facebook.png" alt="Descripción de la imagen" width="20" height="20" >
              <img src="/images/instagram.png" alt="Descripción de la imagen" width="20" height="20" > 
              PET´S co 
               </p>


  </body>
</html>
