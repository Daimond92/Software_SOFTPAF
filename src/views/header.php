<?php

// formato de fecha y hora
date_default_timezone_set("America/Bogota");
$date = date("d/m/y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de <?php 
    echo $user->getRole();
    ?></title>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bodyheader">
    <div class="frameheader">
        <div class="principal1">
            <div class="box2"><img src="public/img/Logo.png" alt="logo" id="img3"></div>
            <div class="welcome2"><i class="fa-solid fa-user-check"></i><h2>Bienvenido
                <?php
                    echo $user->getName();
                ?>
            </h2></div>
            <div class="profile"><h2>Perfil de <?php
                        echo $user->getRole();
                        ?>
                    </h2></div>
            <div class="watch">
                <div class="date"><i class="fa-solid fa-calendar-days"></i><h3>&nbsp Fecha: </h3><h5>&nbsp <?php echo $date;?></h5></div>
                <div class="time"><i class="fa-solid fa-clock"></i><p><h3>&nbsp Hora: </h3><h5>&nbsp <span id="time">00 : 00 : 00</span></h5></p></div>
            </div>
            <div class="box3"><img src="public/img/Logo SOFTPAF.png" alt="logo" class="cover2" id="img3" ></div>
        </div>
        <div  iv class="menu">
            <div class="option"><h2>Opciones</h2></div>
            <div class="options">
                <nav>
                    <ul class="navigation">
                        <li class="customer">Clientes<a href=""></a></li>
                        <ul>
                            <li class="create_customer">Agregar<a href="?page=createC"></a></li>
                            <li class="read_customer">Consultar<a href="?page=readC"></a></li>
                        </ul>
                        <li class="products">Productos<a href="#"></a></li>
                        <ul>
                            <li class="create_product">Agregar<a href="#"></a></li>
                            <li class="read_product">Consultar<a href="#"></a></li>
                        </ul>
                        <li class="logout"><a href="Logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp Cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>

<script src="public/js/time.js"></script>
</html>