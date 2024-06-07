<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de clientes</title>
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="ReadCustomer-table">
    <h1 class="title2">Consulta de usuarios registrados</h1>
    <table class="ReadC-table">
        <thead>
            <tr class="tr-ReadC">
                <th class="th-ReadC">Cedula</th>
                <th class="th-ReadC">Nombres</th>
                <th class="th-ReadC">Celular</th>
                <th class="th-ReadC">Dirección</th>
                <th class="th-ReadC">Correo electronico</th>
                <th class="th-ReadC"></th>
                <th class="th-ReadC"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($this->model->ReadCustomer() as $result):
            ?>
            <tr class="tr-ReadC">
                <th class="th-ReadC"> <?php echo $result->ID_customer; ?> </th>
                <th class="th-ReadC"> <?php echo $result->name_customer; ?> </th>
                <th class="th-ReadC"> <?php echo $result->phonenumber_customer; ?> </th>
                <th class="th-ReadC"> <?php echo $result->adress_customer; ?> </th>
                <th class="th-ReadC"> <?php echo $result->email_customer; ?> </th>
                <th class="th-ReadC" id="th-ReadC-edit"><a href="?page=editC&ID_customer=<?php echo $result->ID_customer?>"><i class="fa-solid fa-pen-to-square"></i>Editar</a></th>
                <th class="th-ReadC" id="th-ReadC-delete"><a href="?page=deleteC&ID_customer=<?php echo $result->ID_customer?>"><i class="fa-solid fa-trash-can"></i>Eliminar</a></th>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>  
</body>
</html>