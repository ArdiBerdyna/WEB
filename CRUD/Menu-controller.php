<?php

require_once('database.php');
class Car extends dbConnect {  
    private $id;
    private $image;
    private $emri; 
    private $lloji; 
    private $qmimi; 
    private $dbconn;

    public function __construct($id='', $image='', $emri = '', $lloji='', $qmimi=''){
        $this->id = $id;
        $this->image = $image;
        $this->emri = $emri;
        $this->lloji = $lloji;
        $this->qmimi = $qmimi;

        $this->dbconn= $this->connectDB();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
    public function setImage($image){
        $this->image = $image;
    }

    public function getImage(){
        return $this->image;
    }

    public function setemri($emri){
        $this->emri = $emri;
    }

    public function getemri(){
        return $this->emri;
    }

    public function setlloji($lloji){
        $this->lloji = $lloji;
    }

    public function getlloji(){
        return $this->lloji;
    }

    
    public function setqmimi($qmimi){
        $this->qmimi = $qmimi;
    }

    public function getqmimi(){
        return $this->qmimi;
    }




    public function insertoDhenat(){
        $this->image = './assets/images/'.  $this->image;
        $sql="INSERT INTO cars (image, emri,lloji,qmimi) VALUES (:image,:emri,:lloji,:qmimi)";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':image', $this->image);
        $stm->bindParam(':emri', $this->emri);
        $stm->bindParam(':lloji', $this->lloji);
        $stm->bindParam(':qmimi', $this->qmimi);

        $stm->execute();

        echo "<script>
                alert('dhenat jane Regjistruar me sukses');
                document.location='display.php';
         </script>";
        
    }
    public function lexoDhenat(){
       $sql = "select * from cars";
       $stm=$this->dbconn->prepare($sql);
       $stm->execute();
       $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC);
       return $rezultati;


    }

    public function deleteDhenat($id){
        $sql = "delete from cars where id = :id";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        if($stm==true){
            echo  "<script>
            alert('dhenat jane delete me sukses');
            document.location='display.php';

            </script>";
        }else {
            return false;
        }}

        public function updateDhenat(){
            $this->image = './assets/images/'.  $this->image;
            $sql = 'update cars set image=?, emri=?, lloji=?, qmimi=? where id=?';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->image, $this->emri, $this->lloji, $this->qmimi, $this->id]);
        }

        public function lexoDhenatSipasIDs($id){
           
            $sql='SELECT * FROM cars where id=:id';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([':id'=>$this->id=$id]);
            $rezultati =$stm->fetch(PDO::FETCH_ASSOC);
            return $rezultati;
        }
    

}










?>