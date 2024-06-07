<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo cliente</title>
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="CreateCustomer-table"><h1 id="title3">Registro de cliente</h1>
    <h3 class="new-register">Nuevo Registro</h3>
    <form action="?page=addC" method="POST">
        <div class="input-group">
            <div class="input-field">
                <i class="fa-solid fa-id-card"></i>
                <input require type="number" placeholder="Cedula" name="ID_customer">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-circle-user"></i>
                <input require type="text" placeholder="Nombres" name="name_customer" >
            </div>
            <div class="input-field">
                <i class="fa-solid fa-phone-volume"></i>
                <input require type="number" placeholder="Celular" name="phonenumber_customer">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-map-location-dot"></i>
                <input require type="text" placeholder="Dirección" name="adress_customer">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i></i>
                <input require type="text" placeholder="Correo electronico" name="email_customer">
            </div>
        </div>
        <div class="btn-field">
            <button name="register" id="create-customer" type="submit"><i class="fa-solid fa-user-plus"></i><span>Agregar Usuario</span></a></button>
        </div>
    </form>
</div>  
</body>
</html>