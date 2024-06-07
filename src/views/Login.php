<?php
include_once 'src/models/DatabaseConnection.php';
?>

<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingreso de usuario</title>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body class="body">
    <div class="frame">
      <div id="container">
          <div id="principal">
            <div class="box"><img src="public/img/Logo.png" alt="logo" id="img"></div>
          </div>
          <div id="sidebar" class="welcome"><h1 class="title">Bienvenidos</h1>
            <section id="login">
            <form action="" method="post">
            <label for="user" class="loginuser"><i class="fa-solid fa-user-secret"></i> Usuario<input id="loginuser" name="user" type="text" value="" placeholder="Usuario" required></label>
            <label for="password" class="loginpassword"><i class="fa-solid fa-fingerprint"></i> Contraseña<input id="loginpassword" name="password" type="password" value="" placeholder="Contraseña" required></label>
            <button class="loginbutton" id="submit" name="submit" type="submit" value="Ingresar"><a href="src/views/Seller.php"></a>Ingresar <i class="fa-solid fa-door-open"></i></button></section>
            <section id="forget"><p><a href="#forget" class="forget"><i class="fa-solid fa-circle-question"></i> ¿Olvidaste tú usuario?</a></p>
            <p><a href="#forget" class="forget"><i class="fa-solid fa-lock-open"></i> ¿Olvidaste tú contraseña?</a></p></section>
            <div class="error">
              <?php
              $db = new DataBase;
              $db->connection();
              if (isset($errorLogin)) {
                  echo $errorLogin;
                } 
                ?>
              <div class="box1"><img src="public/img/Logo SOFTPAF.png" alt="Logo2" class="cover" id="img2"></div>
            </div>
            </form>
          </div>
        </div>
  </body>
</html>
