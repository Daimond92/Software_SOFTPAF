<?php

    include_once 'src/controller/login.controller.php';
    $userSession = new LoginController();
    $userSession->closeSession();
    header('Location: index.php');
?>