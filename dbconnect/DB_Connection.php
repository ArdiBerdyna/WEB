<?php
 class dbConnect{
     private $conn = null;
     private $host = 'localhost';
     private $dbname = 'renta_car';
     private $dbusername = 'root';
     private $password = '';

        public function connectDB(){
            try{
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbusername, $this->password);
           
         }catch(PDOException  $d){
                echo "nuk mund te lidhj me sukses";
         }
            return $this->conn;
        }







     }

     $con = new dbConnect();
     $pdo = $con->connectDB();
    




?>