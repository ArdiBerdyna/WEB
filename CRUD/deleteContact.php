<?php
session_start();
if(!isset($_SESSION["role"])){
    header("Location: ../login.php");
}
require_once 'ReciveContact.php';

$rez = new Contact();

if(isset($_GET['id'])){
    $rez ->setId($_GET['id']);
    $myid= $rez->getId();
    $rez->deleteContact($myid);
    echo 
    "<script>
        alert('dhenat jane bere delete me sukses');
        document.location='readContact.php'
    </script>";
}



?>