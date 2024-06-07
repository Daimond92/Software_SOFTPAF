<?php

class Product extends DataBase{

    public $id_product;
    public $image_product;
    public $name_product;
    public $amount_product;
    public $cost_product;
    public $price_product;

    public function readProduct(){
        try {
            $result = array();

            $stm = $this->connection()->prepare("SELECT * FROM product");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getProduct($id_product){
        try {
            $stm = $this->connection()->prepare("SELECT * FROM product WHERE id_product = ?");
            $stm->execute(array($id_product));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteProduct($id_product){
        try {
            $stm = $this->pdo->prepare("DELETE * FROM product WHERE id_product = ?");
            $stm->execute(array($id_product));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function updateProduct(){
        try {
            $sql = "UPDATE customer SET image_product = ':image_product', name_product = ':name_product', amount_product = ':amount_product', cost_product = ':cost_product', price_product = ':price_product' WHERE id_product = ':id_product'";
            $stm = $this->connection()->prepare($sql);

            $stm->bindParam(':id_product',$id_product);
            $stm->bindParam(':image_product',$image_product);
            $stm->bindParam(':name_customer',$name_customer);
            $stm->bindParam(':amount_product',$amount_product);
            $stm->bindParam(':cost_product',$cost_product);
            $stm->bindParam(':price_product',$price_product);

            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function createProduct(){
        try {

            $sql = "INSERT INTO customer (image_product, name_product, amount_product, cost_product, price_product) VALUES (':image_product', ':name_product', ':amount_product', ':cost_product', ':price_product')";
            $stm = $this->connection()->prepare($sql);
            
            $stm->bindParam(':image_product',$image_product);
            $stm->bindParam(':name_product',$name_product);
            $stm->bindParam(':amount_product',$amount_product);
            $stm->bindParam(':cost_product',$cost_product);
            $stm->bindParam(':price_product',$price_product);

            $stm->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
}
?>