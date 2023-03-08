<?php

require_once('database.php');
class Reservation extends dbConnect {  
    private $id;
    private $car_name;
    private $pick_up; 
    private $drop_off; 
    private $name;
    private $email;
    private $phone;
    private $dbconn;

    public function __construct($id='', $car_name='', $pick_up = '', $drop_off='', $name='', $email='',$phone=''){
        $this->id = $id;
        $this->car_name = $car_name;
        $this->pick_up = $pick_up;
        $this->drop_off = $drop_off;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

        $this->dbconn= $this->connectDB();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
    public function setcar_name($car_name){
        $this->car_name = $car_name;
    }

    public function getcar_name(){
        return $this->car_name;
    }

    public function setpick_up($pick_up){
        $this->pick_up = $pick_up;
    }

    public function getpick_up(){
        return $this->pick_up;
    }

    public function setdrop_off($drop_off){
        $this->drop_off = $drop_off;
    }

    public function getdrop_off(){
        return $this->drop_off;
    }

    
    public function setname($name){
        $this->name = $name;
    }

    public function getname(){
        return $this->name;
    }
    public function setemail($email){
        $this->email = $email;
    }

    public function getemail(){
        return $this->email;
    }

    public function setphone($phone){
        $this->phone = $phone;
    }

    public function getphone(){
        return $this->phone;
    }





    public function insertReservation(){
        $sql="INSERT INTO reservation (car_name, Pick_up_date , Drop_off_date, name, email, phone) VALUES (:car_name,:Pick_up_date,:Drop_off_date,:name, :email,:phone )";

        $pick_up = $this->pick_up;
    $drop_off = $this->drop_off;

// Convert the dates to Unix timestamps using strtotime
    $pick_up_timestamp = strtotime($pick_up);
    $drop_off_timestamp = strtotime($drop_off);
    if ($pick_up_timestamp > $drop_off_timestamp) {
        // Display an error message
        echo "<script>
            alert('pick-up date ose drop-of date jane gabim');
            document.location='cars.php';
        </script>";
    } else {

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':car_name', $this->car_name);
        $stm->bindParam(':Pick_up_date', $this->pick_up);
        $stm->bindParam(':Drop_off_date', $this->drop_off);
        $stm->bindParam(':name', $this->name);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':phone', $this->phone);


        $stm->execute();

        echo "<script>
                alert('Rezervimi eshte bere me sukses');
                document.location='cars.php';
         </script>";}
        
    }

    public function lexoReservation(){
       $sql = "select * from reservation";
       $stm=$this->dbconn->prepare($sql);
       $stm->execute();
       $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
       return $rezultati;


    }
    public function deleteReservation($id){
        $sql = "delete from reservation where id = :id";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        if($stm==true){
            echo  "<script>
            alert('dhenat jane delete me sukses');
            document.location='readReservatio.php';

            </script>";
        }else {
            return false;
        }}

    

}










?>