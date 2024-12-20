<h2>Entendendo Interfaces:</h2>
<hr/>

<?php

interface DataBase {
    public function AddProduct();
    public function ReadProduct();
    public function UpdateProduct();
} 

class MySqlDB implements DataBase {
    public function AddProduct() {
        
    }
    public function ReadProduct() {
        echo "Lendo com MySql";
    }
    public function UpdateProduct() {
        
    }
}

class OracleDB implements DataBase {
    public function AddProduct() {
        
    }
    public function ReadProduct() {
        echo "Lendo com Oracle";
    }
    public function UpdateProduct() {
        
    }
}

class MongoDB implements DataBase {
    public function AddProduct() {
        
    }
    public function ReadProduct() {
        echo "Lendo com Mongo";
        
    }
    public function UpdateProduct() {
        
    }
}

$db = new MongoDB();
$db->ReadProduct();