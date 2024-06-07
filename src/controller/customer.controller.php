<?php

include_once 'src/models/Customer.php';

class CustomerController{
    public $model;

    public function __construct()
    {
        $this->model = new Customer();
    }
    
    public function loadCustomer(){
        $cus = new Customer();

        if(isset($_REQUEST['ID_customer'])){
            $cus = $this->model->getCustomer($_REQUEST['ID_customer']);
        }

        require_once 'src/views/header.php';
        require_once 'src/views/footer.php';
        require_once 'src/views/Read_customer.php';
    }

    public function saveCustomer(){
        $cus = new Customer();

        $cus->setCus_ID($_REQUEST['ID_customer']);
        $cus->setCus_name($_REQUEST['name_customer']);
        $cus->setCus_phonenumber($_REQUEST['phonenumber_customer']);
        $cus->setCus_adress($_REQUEST['adress_customer']);
        $cus->setCus_email($_REQUEST['email_customer']);

        $this->model->createCustomer($cus);

        header('Location: ?page=readC');
    }

    public function formupCustomer(){
        $cus = new Customer;
        if(isset($_REQUEST['ID_customer'])){
            $cus = $this->model->getCustomer($_REQUEST['ID_customer']);
        }
        require_once 'src/views/Update_customer.php';
    }
    
    public function updatesCustomer(){
        $cus = new Customer();
        $cus->setCus_ID($_REQUEST['ID_customer']);
        $cus->setCus_name($_REQUEST['name_customer']);
        $cus->setCus_phonenumber($_REQUEST['phonenumber_customer']);
        $cus->setCus_adress($_REQUEST['adress_customer']);
        $cus->setCus_email($_REQUEST['email_customer']);

        $this->model->updateCustomer($cus);
        
        header('Location: ?page=readC');
    }

    public function removeCustomer(){
        $cus = new Customer();
        
        if(isset($_REQUEST['ID_customer'])){
            $cus = $this->model->deleteCustomer($_REQUEST['ID_customer']);
                header('Location: index.php');
            }
    }
}
?>