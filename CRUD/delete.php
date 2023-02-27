<?php
 session_start();
 if(!isset($_SESSION["role"])){
     header("Location: ../login.php");
 }

require_once('Menu-controller.php');

$dhenat = new Car();

if(isset($_GET['id'])){
    $dhenat ->setId($_GET['id']);
    $myid= $dhenat->getId();
    $dhenat->deleteDhenat($myid);
}
?>