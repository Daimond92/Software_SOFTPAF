<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualización de cliente</title>
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="UpdateCustomer-table"><h1 id="title3">Actualización de cliente</h1>
    <h3 class="update-register">Actualización de registro</h3>
    <form action="?page=updateC" method="POST">
        <div class="input-group">
            <div class="input-field">
                <i class="fa-solid fa-id-card"></i>
                <input type="hidden" name="ID_customer" value="<?php echo $cus->getCus_ID()?>"><label><?php echo $cus->getCus_ID()?></label>
            </div>
            <div class="input-field">
                <i class="fa-solid fa-circle-user"></i>
                <input require type="text" placeholder="Nombres" name="name_customer" value="<?php echo $cus->getCus_name()?>">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-phone-volume"></i>
                <input require type="number" placeholder="Celular" name="phonenumber_customer" value="<?php echo $cus->getCus_phonenumber()?>">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-map-location-dot"></i>
                <input require type="text" placeholder="Dirección" name="adress_customer" value="<?php echo $cus->getCus_adress()?>">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i></i>
                <input require type="text" placeholder="Correo electronico" name="email_customer" value="<?php echo $cus->getCus_email()?>">
            </div>
        </div>
        <div class="btn-field">
            <button require name="update" id="update-customer" type="submit"><i class="fa-solid fa-pen-to-square"></i></i><span>Actualizar Usuario</span></a></button>
        </div>
    </form>
</div>  
</body>
</html>