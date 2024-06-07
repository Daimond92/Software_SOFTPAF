<?php

class Customer extends DataBase{

    public $ID_customer;
    public $name_customer;
    public $phonenumber_customer;
    public $adress_customer;
    public $email_customer;

    //Getter y Setter de variables en encapsulamiento
    public function getCus_ID() : ?string{
        return $this->ID_customer;
    }

    public function setCus_ID(string $ID_customer){
        $this->ID_customer = $ID_customer;
    }

    public function getCus_name() : ?string{
        return $this->name_customer;
    }

    public function setCus_name(string $name_customer){
        $this->name_customer = $name_customer;
    }

    public function getCus_phonenumber() : ?string{
        return $this->phonenumber_customer;
    }

    public function setCus_phonenumber(string $phonenumber_customer){
        $this->phonenumber_customer = $phonenumber_customer;
    }

    public function getCus_adress() : ?string{
        return $this->adress_customer;
    }

    public function setCus_adress(string $adress_customer){
        $this->adress_customer = $adress_customer;
    }
    
    public function getCus_email() : ?string{
        return $this->email_customer;
    }

    public function setCus_email(string $email_customer){
        $this->email_customer = $email_customer;
    }

    public function readCustomer(){
        try {
            $result = array();

            $stm = $this->connection()->prepare("SELECT * FROM customer");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getCustomer($ID_customer){
        try {
            $stm = $this->connection()->prepare("SELECT * FROM customer WHERE ID_customer = ?");
            $stm->execute(array($ID_customer));
            $result = $stm->fetch(PDO::FETCH_OBJ);

            $cus = new Customer();
            
            $cus->setCus_ID($result->ID_customer);
            $cus->setCus_name($result->name_customer);
            $cus->setCus_phonenumber($result->phonenumber_customer);
            $cus->setCus_adress($result->adress_customer);
            $cus->setCus_email($result->email_customer);

            return $cus;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteCustomer($ID_customer){
        try {
            $stm = $this->connection()->prepare("DELETE FROM customer WHERE ID_customer = ?");
            $stm->execute(array($ID_customer));
            
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function updateCustomer(Customer $cus){
        try {
            $sql = "UPDATE customer SET name_customer = ?, phonenumber_customer = ?, adress_customer = ?, email_customer = ? WHERE ID_customer = ?";
            $stm = $this->connection()->prepare($sql);

            $stm->execute(array($cus->getCus_name(), $cus->getCus_phonenumber(), $cus->getCus_adress(), $cus->getCus_email(), $cus->getCus_ID()));
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function createCustomer(Customer $cus){
        try {            
            $sql = "INSERT INTO customer (ID_customer, name_customer, phonenumber_customer, adress_customer, email_customer) VALUES (?,?,?,?,?)";
            $stm = $this->connection()->prepare($sql);
            
            $stm->execute(array($cus->getCus_ID(), $cus->getCus_name(), $cus->getCus_phonenumber(), $cus->getCus_adress(), $cus->getCus_email()));
        
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }
}
?>