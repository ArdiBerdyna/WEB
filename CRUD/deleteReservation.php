<?php
session_start();
if(!isset($_SESSION["role"])){
    header("Location: ../login.php");
}
require_once 'reservation.php';

$rez = new Reservation();

if(isset($_GET['id'])){
    $rez ->setId($_GET['id']);
    $myid= $rez->getId();
    $rez->deleteReservation($myid);
    echo 
    "<script>
        alert('dhenat jane bere delete me sukses');
        document.location='readReservatio.php'
    </script>";
}



?>