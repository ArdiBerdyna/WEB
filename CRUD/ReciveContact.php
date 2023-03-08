<?php

    require_once "database.php";
    class Contact extends dbConnect{  
        private $id;
        private $email;
        private $telefoni;
        private $messages; 
        private $dbconn;
      
        
    
        public function __construct($id='' ,$email='', $telefoni='', $messages=''){
            $this->id = $id;
            $this->email = $email;
            $this->telefoni = $telefoni;
            $this->messages = $messages;
            $this->dbconn= $this->connectDB();
           
        }
        public function setId($id){
            $this->id = $id;
        }
    
        public function getId(){
            return $this->id;
        }
        public function setemail($email){
            $this->email = $email;
        }
    
        public function getemail(){
            return $this->email;
        }
    
        public function settelefoni($telefoni){
            $this->telefoni = $telefoni;
        }
    
        public function gettelefoni(){
            return $this->telefoni;
        }
    
        public function setmessages($messages){
            $this->messages = $messages;
        }
    
        public function getmessages(){
            return $this->messages;
        }

        public function insert(){
            $sql="INSERT INTO contact (email, telefoni, messages) VALUES (:email,:telefoni,:messages)";
    
            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam(':email', $this->email);
            $stm->bindParam(':telefoni', $this->telefoni);
            $stm->bindParam(':messages', $this->messages);
    
            $stm->execute();
    
            echo "<script>
                    alert('dhenat jane derguar me sukses');
                    document.location='contact.php';
             </script>";
            
        }

        public function lexo(){
            $sql = "select * from contact";
            $stm=$this->dbconn->prepare($sql);
            $stm->execute();
            $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $rezultati;
     
     
         }

         public function deleteContact($id){
            $sql = "delete from contact where id = :id";
    
            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam(':id', $id);
            $stm->execute();
            if($stm==true){
                echo  "<script>
                alert('dhenat jane delete me sukses');
                document.location='readContact.php';
    
                </script>";
            }else {
                return false;
            }}
    




    }
    


?>

