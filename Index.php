<?php
include_once 'config.php';

//Inicio de sesión

include_once 'src/models/DatabaseConnection.php';
include_once 'src/models/User.php';
include 'src/controller/login.controller.php';

$userSession = new LoginController();
$user = new User();

if (isset($_SESSION['user'])) {
    //Hay sesión abierta
    $user->setUser($userSession->getCurrentUser());
    include_once 'src/views/Seller.php';
} else if (isset($_POST['user']) && isset($_POST['password'])) {
    //Validación de ingreso
    $userForm = $_POST['user'];
    $passForm = $_POST['password'];
    
    $user = new User();
    if ($user->userExists($userForm, $passForm)) {
        //Ingreso validado
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'src/views/Seller.php';
    } else {
        //No existe el usuario
        $errorLogin = "Nombre de usuario y/o contraseña incorrecto";
        include_once 'src/views/Login.php';
    }
} else {
    include_once 'src/views/Login.php';
}

//CRUD

$page = '';

//If switch para direccionamiento dentro de la aplicación

if(isset($_GET['page']))
    $page = $_GET['page'];
switch ($page) {
    case 'readC':
        require_once 'src/controller/customer.controller.php';
        $query = new CustomerController;
        $query->loadCustomer();
        break;
    case 'createC':
        require_once 'src/views/Create_customer.php';
        break;
    case 'addC':
        require_once 'src/controller/customer.controller.php';
        $query = new CustomerController;
        $query->saveCustomer();
        break;
    case 'updateC':
        require_once 'src/controller/customer.controller.php';
        $query = new CustomerController;
        $query->updatesCustomer();
        break;
    case 'editC':
        require_once 'src/controller/customer.controller.php';
        $query = new CustomerController;
        $query->formupCustomer();
        break;
    case 'deleteC':
        require_once 'src/controller/customer.controller.php';
        $query = new CustomerController;
        $query->removeCustomer();
        require_once 'src/views/Read_customer.php';
        break;
    default:
        //header('Location: ?page=readC');
        break;
}